<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Gallery extends Model
{
    protected $fillable = ['product_id', 'img'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
