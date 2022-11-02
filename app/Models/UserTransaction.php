<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    const TYPE_PAYPAL = 1;
    const TYPE_PADDLE = 2;
    const TYPE_STRIPE = 3;

    const ST_WAIT_CONFIRM= 0;
    const ST_NO = 1;
    const ST_RECEIVED_LITLE = 2;
    const ST_RECEIVED = 3;


    const arrStatusConfirm = [
        self::ST_WAIT_CONFIRM => 'Waiting for confirmation',
        self::ST_NO => 'Not received',
        self::ST_RECEIVED => 'Fully received',
        self::ST_RECEIVED_LITLE => 'Partially Received',
    ];

    const transactionType = [
        self::TYPE_PAYPAL => 'PayPal',
        self::TYPE_PADDLE => 'Visa',
        self::TYPE_STRIPE => 'Stripe',
    ];



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'package_id',
        'type',
        'status',
        'receive_amount',
        'amount_currency_code',
        'receive_code',
        'coupon_id',
        'payment_gate_id',
        'paddle_event_time',
        'paddle_refund_reason',
        'paddle_alert_name',
        'checkout_id',
        'country_code',
        'note',
        'number_transaction',
        'time_reg',
        'account',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates  = [];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function package()
    {
        return $this->belongsTo(\App\Models\MainPackage::class, 'package_id', 'id');
    }
}
