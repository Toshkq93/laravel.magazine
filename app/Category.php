<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 * @mixin Builder
 */
class Category extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'parent_id', 'slug'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id')->with('categories');
    }

}
