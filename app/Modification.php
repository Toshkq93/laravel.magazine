<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Modification extends Model
{
    protected $fillable = ['title', 'price'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
