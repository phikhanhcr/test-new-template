<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaddleAccount extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'paddle_account';

    const CACHE_PADDLE_ACCOUNT = 'paddle_account:';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'main_package_id',
        'paddle_account_id',
        'product_id',
        'name',
        'site_name',
        'vendor_id',
        'secret',
    ];
}
