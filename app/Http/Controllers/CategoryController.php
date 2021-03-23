<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->product;
        return view('fronts.category.index', ['category' => $category, 'products' => $products]);
    }
}
