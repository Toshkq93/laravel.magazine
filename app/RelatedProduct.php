<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedProduct extends Model
{
    protected $fillable = ['product_id', 'related_id'];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeRelated($query)
    {
        return $query->join('products', function ($join){
            $join->on('related_products.related_id', '=', 'products.id');
        });
    }
}
