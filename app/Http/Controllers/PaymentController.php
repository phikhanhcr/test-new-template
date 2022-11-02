<?php

namespace App\Http\Controllers;

use App\Models\MainPackage;
use App\Models\PaddleAccount;
use App\Models\PaypalAccount;
use App\Models\UserSport;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Jenssegers\Agent\Agent;

class PaymentController extends Controller
{
    public function getPricing() {
        if (request()->has('level')) {
            if (request()->get('level') == 1) {
                return $this->getPricingIframeLevel1();
            }
            if (request()->get('level') == 2) {
                return $this->getPricingIframeLevel2();
            }
        }

        if (request()->has('source')) {
            return $this->getPricingIframe();
        }

        $packages = MainPackage::query()->where(['is_enabled' => 1, 'site_name' => config('app.SITE_NAME')])->orderBy('order')->get()->toArray();
        $paddleAccount = PaddleAccount::query()->where('site_name', 'LIKE', '%,'.config('app.SITE_NAME').',%')->where('status', 1)->first();
        $paypalAccount = PaypalAccount::query()->where('status', 1)->where('site_name', 'LIKE', '%,'.config('app.SITE_NAME').',%')->first();
        foreach ($packages as &$package) {
            $origin_price = 0;
            $package = formatPackage($package, $origin_price, $paddleAccount, $paypalAccount);
        }

        $this->getSeoData();
        return view('pricing', ['packages' => $packages, 'paddleAccount' => $paddleAccount, 'paypalAccount' => $paypalAccount, 'user' => auth()->user()]);
    }

    public function getPricingIframeLevel1() {
        return view('bingsport_v2.packages-iframe-level-1');
    }

    public function getPricingIframeLevel2() {
        $source = !empty(request()->get('source')) ? request()->get('source') : $_SERVER['HTTP_HOST'];
        $site_name = !empty(request()->get('site_name')) ? request()->get('site_name') : $_SERVER['HTTP_HOST'];
        $paypal_client_id = !empty(request()->get('paypal_client_id')) ? request()->get('paypal_client_id') : '';
        $paddle_vendor_id = !empty(request()->get('paddle_vendor_id')) ? request()->get('paddle_vendor_id') : '';
        $stripe_public_key = !empty(request()->get('stripe_public_key')) ? request()->get('stripe_public_key') : '';
        $show_paddle = !empty(request()->get('show_paddle')) ? request()->get('show_paddle') == 'true' : false;
        $show_stripe = !empty(request()->get('show_stripe')) ? request()->get('show_stripe') == 'true' : false;

        View::share('source', $source);
        View::share('site_name', $site_name);

        $package_id = request()->get('package_id');
        $private_token = request()->get('private_token');
        $user = Cache::remember('user_by_private_token:' . $private_token, 3600, function () use ($private_token) {
            $user = UserSport::query()->where('private_token', $private_token)->first();
            return (empty($user)) ? null : $user->toArray();
        });

        //infor
        $arrInfor = [];

        if (!empty($user)) {
            $arrInfor['id'] = $user['id'];
        }

        $agent = new Agent();

        $text = '';
        //browser
        $browser = $agent->browser();
        $text = $browser;

        //platform
        $platform = $agent->platform();
        $version2 = $agent->version($platform);

        $text = $text . '|' . $platform . ' - ' . $version2;

        $arrInfor['info_device'] = $text;

        return view('bingsport_v2.packages-iframe-level-2', [
            'user' => $user,
            'package_id' => $package_id,
            'arrInfor' => $arrInfor,
            'status_show_stripe' => !empty($statusShowStripe) ? $statusShowStripe : '',
            'paypal_client_id' => $paypal_client_id,
            'paddle_vendor_id' => $paddle_vendor_id,
            'stripe_public_key' => $stripe_public_key,
            'show_paddle' => $show_paddle,
            'show_stripe' => $show_stripe,
        ]);
    }

    public function getPricingIframe() {
        $source = !empty(request()->get('source')) ? request()->get('source') : $_SERVER['HTTP_HOST'];
        $site_name = !empty(request()->get('site_name')) ? request()->get('site_name') : $_SERVER['HTTP_HOST'];
        $paypal_client_id = !empty(request()->get('paypal_client_id')) ? request()->get('paypal_client_id') : '';
        $paddle_vendor_id = !empty(request()->get('paddle_vendor_id')) ? request()->get('paddle_vendor_id') : '';
        $stripe_public_key = !empty(request()->get('stripe_public_key')) ? request()->get('stripe_public_key') : '';
        $show_paddle = !empty(request()->get('show_paddle')) ? request()->get('show_paddle') : false;
        $show_stripe = !empty(request()->get('show_stripe')) ? request()->get('show_stripe') : false;

        View::share('source', $source);
        View::share('site_name', $site_name);

        $package_id = request()->get('package_id');
        $private_token = request()->get('private_token');
        $user = Cache::remember('user_by_private_token:' . $private_token, 3600, function () use ($private_token) {
            $user = UserSport::query()->where('private_token', $private_token)->first();
            return (empty($user)) ? null : $user->toArray();
        });

        //infor
        $arrInfor = [];

        if (!empty($user)) {
            $arrInfor['id'] = $user['id'];
        }

        $agent = new Agent();

        $text = '';
        //browser
        $browser = $agent->browser();
        $text = $browser;

        //platform
        $platform = $agent->platform();
        $version2 = $agent->version($platform);

        $text = $text . '|' . $platform . ' - ' . $version2;

        $arrInfor['info_device'] = $text;

        return view('bingsport_v2.packages-iframe-level-2', [
            'user' => $user,
            'package_id' => $package_id,
            'arrInfor' => $arrInfor,
            'status_show_stripe' => !empty($statusShowStripe) ? $statusShowStripe : '',
            'paypal_client_id' => $paypal_client_id,
            'paddle_vendor_id' => $paddle_vendor_id,
            'stripe_public_key' => $stripe_public_key,
            'show_paddle' => $show_paddle,
            'show_stripe' => $show_stripe,
        ]);
    }

    public function getThankYou() {

        $this->getSeoData();
        return view('thank-you');
    }
}
