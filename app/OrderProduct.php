<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class OrderProduct extends Model
{
    protected $fillable = ['order_id', 'product_id','qty','title','price'];
}
