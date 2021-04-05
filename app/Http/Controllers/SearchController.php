<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Filters\ProductFilter;
use App\Http\Helpers\ProductHelper;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(ProductFilter $request)
    {
        dump($request);
        $category = Category::select('title')->where('id', $request->request->category_id)->first();

        $products = Product::filter($request)->paginate(5);
        if ($request->request->ajax()) {
            return response()->json(Product::filter($request)->paginate(5));
        }
        return view('fronts.search.index', ['products' => $products, 'category' => $category]);
    }

    public function autocomplite(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('title', 'LIKE', "%$query%")->get();
        foreach ($products as $product) {
            $product->img = ProductHelper::getImage($product->img);
        }
        return response()->json($products);
    }

}
