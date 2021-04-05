<?php


namespace App\Http\Filters;


class ProductFilter extends QueryFilter
{
    public function q($value = '')
    {
        return $this->builder
            ->where('title', 'LIKE', '%'.$value.'%');
    }

    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('category_id', $id);
        });
    }

    public function price($price)
    {
        $array = explode(' -', $price);
        return $this->builder->where('price', '>=', $array[0])->where('price', '<=', $array[1]);
    }

}
