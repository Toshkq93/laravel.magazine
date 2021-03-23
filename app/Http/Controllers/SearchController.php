<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Helpers\ProductHelper;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->category_id == null){
            $products = Product::paginate(5);
            $category = 'all';
        }else{
            $products = Product::where('category_id', $request->category_id)->where('title', 'LIKE', "%{$request->q}%")->paginate(5);
            $category = Category::select('title')->where('id' , $request->category_id)->first();
        }
        return view('fronts.search.index', ['products' => $products, 'category' => $category]);
    }

    public function autocomplite(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('title', 'LIKE', "%$query%")->get();
        foreach ($products as $product){
            $product->img = ProductHelper::getImage($product->img);
        }
        return response()->json($products);
    }
}
