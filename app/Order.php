<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Order extends Model
{
    protected $fillable = ['user_id', 'status', 'currency', 'note', 'country_id', 'region_id', 'city_id', 'coupon_code', 'gift_voucher'];
}
