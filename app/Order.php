<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Order extends Model
{
    protected $fillable = ['user_id', 'status', 'currency', 'note', 'country_id', 'region_id', 'city_id', 'coupon_code', 'gift_voucher'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function scopeOrders($query)
    {
        return $query
            ->select('orders.id', 'orders.user_id', 'orders.status', 'orders.created_at', 'orders.updated_at', 'orders.currency', 'users.name', DB::raw("sum(order_products.price) as sum"))
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->join('order_products', 'order_products.order_id', '=', 'orders.id')
            ->groupBy('orders.id')
            ->orderBy('orders.status');
    }

    public function scopeOrder($query)
    {
        return $query
            ->select('orders.*', 'countries.name as country_name', 'regions.name as region_name', 'cities.name as city_name', 'users.name', DB::raw("sum(order_products.price) as sum"))
            ->join('countries', 'countries.id', '=', 'orders.country_id')
            ->join('regions', 'regions.id', '=', 'orders.region_id')
            ->join('cities', 'cities.id', '=', 'orders.city_id')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->join('order_products', 'order_products.order_id', '=', 'orders.id')
            ->groupBy('orders.id');
    }
}
