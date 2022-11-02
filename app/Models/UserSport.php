<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserSport extends Model
{
    protected $table = 'users';
    protected $connection = 'mysql_sport';

    const CACHE_PAYPAL_ACCOUNT = 'paypal_account:';

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
}
