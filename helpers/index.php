<?php

use App\Models\PackageSubscription;
use App\Models\PaddlePlan;

function _checkIs($data, $key, $data_return=''){
    if(is_object($data) && !empty($data->$key)){
        return $data->$key===''?$data_return:$data->$key;
    }

    if(is_array($data) && !empty($data[$key])){
        return $data[$key]===''?$data_return:$data[$key];
    }
    return $data_return;
}

function checkIs($data,$keys,$data_return=''){
    if (empty($data)) {
        return $data_return;
    }
    if(!is_array($keys)){
        $keys = explode('.', $keys);
    }
    $result = $data;
    foreach($keys as $key){
        $result = _checkIs($result,$key,$data_return);
    }
    return $result;
}


function formatPackage($package, &$origin_price, $paddleAccount, $paypalAccount) {
    if ($package['discount'] > 0) {
        $package['origin_price'] = round($package['price'] / (1 - $package['discount']));
    }
    if ($package['day_code'] == 'months') {
        $package['pricePerMonth'] = $package['price']*1.0 / $package['day_using'];
        if ($package['day_using'] == 1) {
            $package['day_code'] = 'month';
        }
    } else if ($package['day_code'] == 'days') {
        $package['pricePerDay'] = (int) ($package['price']*1.0 / $package['day_using']);
        $package['pricePerMonth'] = $package['price']*30;
        if ($package['day_using'] == 1) {
            $package['day_code'] = 'day';
        }
    } else if ($package['day_code'] == 'years'){
        $package['pricePerMonth'] = $package['price']*1.0 / 12;
        if ($package['day_using'] == 1) {
            $package['day_code'] = 'year';
        }
    }

    if (!empty($paddleAccount)) {
        $paddlePlanQuery = PaddlePlan::query()->where(['main_package_id' => $package['id'], 'paddle_account_id' => $paddleAccount['id']]);
        $package['paddle_plan'] = $paddlePlanQuery->first();
        if ($package['paddle_plan'] != null) {
            $package['paddle_plan'] = $package['paddle_plan']->toArray();
        }
    } else {
        $package['paddle_plan'] = null;
    }

    if (!empty($paypalAccount)) {
        $paypalPlanQuery = PackageSubscription::query()->where(['main_package_id' => $package['id'], 'paypal_account_id' => $paypalAccount['id']]);
        $package['paypal_plan'] = $paypalPlanQuery->first();
        if ($package['paypal_plan'] != null) {
            $package['paypal_plan'] = $package['paypal_plan']->toArray();
        }
    } else {
        $package['paypal_plan'] = null;
    }

    if ($origin_price == 0 && $package['day_code'] != 'days') {
        $origin_price = $package['pricePerMonth'];
    }
    if ($origin_price != 0) {
        $package['discount_value'] = (int)ceil(($origin_price - $package['pricePerMonth']) / $origin_price * 100);
    } else {
        $package['discount_value'] = 0;
    }

    if (!empty($package['pricePerMonth'])) {
        $package['pricePerMonth'] = round($package['pricePerMonth'], 0, PHP_ROUND_HALF_DOWN);
    }
    return $package;
}
