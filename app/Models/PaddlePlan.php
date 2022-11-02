<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaddlePlan extends Model
{
    protected $table = 'paddle_plan';

    const CACHE_PADDLE_PLAN_BY_PACKAGE_ID = 'paddle_plan_by_package_id:';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'paypal_account_id',
        'main_package_id',
        'product_id',
    ];

    public function paddle_account()
    {
        return $this->belongsTo(\App\Models\PaddleAccount::class,'paddle_account_id','id');
    }
}
