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
class Product extends Model
{
    use Sluggable;

    protected $fillable = ['title', 'description', 'content', 'category_id', 'price', 'old_price', 'status', 'img', 'raiting', 'bestseller'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function hotDeals(){
        return $this->hasMany(HotDeals::class);
    }

    public function relatedProducts()
    {
        return $this->belongsTo(RelatedProduct::class);
    }

    public function modifications()
    {
        return $this->belongsToMany(Modification::class)->withTimestamps();
    }
}
