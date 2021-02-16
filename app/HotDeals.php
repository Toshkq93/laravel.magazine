<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class HotDeals extends Model
{
    protected $fillable = ['product_id', 'timer'];

    public function product(){
        return $this->hasOne(Product::class,'id');
    }

}
