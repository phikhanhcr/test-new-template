<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageSubscription extends Model
{
    protected $table = 'package_subscriptions';

    const CACHE_PAYPAL_PLAN_BY_PACKAGE_ID = 'paypal_plan_by_package_id:';
}
