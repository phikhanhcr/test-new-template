<?php namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed $id
 */
class MainPackage extends Model
{

    const TENURE_TYPE_TRIAL = 'TRIAL';
    const TENURE_TYPE_REGULAR = 'REGULAR';
    const PAYPAL_FEE = 34;
    const UNIT_DAY = '';

    const TIME_SHOWS = [
        'all_time' => 'Tất cả thời gian',
        'before_2_hours' => 'Trước 2 giờ',
        'after_2_hours' => 'Sau 2 giờ',
    ];

    protected $attributes = [
        'country' => '',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'main_packages';

    const CACHE_MAIN_PACKAGE_BY_ID = 'main_package_by_id:';
    const CACHE_ALL_PACKAGES = 'all_packages:';
    const CACHE_ALL_PACKAGES_API = 'all_packages_api:';
    const CACHE_PACKAGES = 'packages:';
    const CACHE_PACKAGES_LIFETIME = 'packages_lifetime:';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'site_name',
        'name',
        'slug',
        'limit_device',
        'day_using',
        'day_code',
        'order',
        'is_enabled',
        'price',
        'currency_code',
        'description',
        'h1_content',
        'time_show_popup',
        'time_view_free_after_login',
        'time_view_free',
        'show_popup_all_match',
        'note',
        'discount',
        'discount_note',
        'most_popular',
        'is_us_uk',
        'is_nba',
        'paddle_product_id',
        'stripe_id',
        'note_number',
        'time_show',
        'is_after_popup',
        'in_popup_player',
        'promotion_time',
        'promotion_time_note',
        'country',
        'is_life_time',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = [];

    public function paddlePlans(): HasMany
    {
        return $this->hasMany(PaddlePlan::class,'main_package_id','id');
    }
}
