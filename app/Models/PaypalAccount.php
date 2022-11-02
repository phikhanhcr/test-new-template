<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaypalAccount extends Model
{
    protected $table = 'paypal_account';
    protected $connection = 'mysql_sport';

    const CACHE_PAYPAL_ACCOUNT = 'paypal_account:';

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
}
