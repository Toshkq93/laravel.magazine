<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Countries;
use App\Http\Helpers\CartHelper;
use App\Product;
use App\Regions;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        if ($request->ajax()){
            $product = Product::find($request->id);
            $product->price = $request->price;
            $modification = $product->modifications()->where([
                'product_id' => $product->id,
                'modification_id' => $request->mod,
            ])->pluck('title')->first();
            CartHelper::addToCart($product, $request->qty, $modification);
        }
    }

    public function show()
    {
        $countries = Countries::all();
        return view('fronts.cart.show', ['countries' => $countries]);
    }

    public function update(Request $request)
    {
        if ($request->ajax()){
            $qty = $request->qty ? $request->qty : session("cart.$request->id.qty");
            session()->put('cartQty', session('cartQty') - session("cart.$request->id.qty"));
            session()->put('cartSum', session('cartSum') - session("cart.$request->id.qty") * session("cart.$request->id.price"));
            session()->forget("cart.$request->id.qty");
            session()->put("cart.$request->id.qty", $qty);
            session()->put('cartQty', session('cartQty') + $qty);
            session()->put('cartSum', session('cartSum') + (session("cart.$request->id.price") * session("cart.$request->id.qty")));
        }
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $qty = $request->qty ? $request->qty : session("cart.$request->id.qty");
            $sumMinus = session("cart.$request->id.price") * $qty;
            session()->put("cart.$request->id.qty", $qty);
            session()->put('cartQty', session('cartQty') - $qty);
            session()->put('cartSum', session('cartSum') - $sumMinus);
            if (!session()->has("cart.$request->id.qty")) {
                session()->forget("cart.$request->id");
            }
            if (session('cartSum') == 0){
                session()->forget('cartSum');
                session()->forget('cartQty');
                session()->forget('cart');
            }
        }
    }

    public function getRegions(Request $request)
    {
        if ($request->ajax()){
            $regions = Regions::select('id', 'name')->where('country_id', $request->id)->get();

            return response()->json($regions);
        }
        return null;
    }

    public function getCities(Request $request)
    {
        if ($request->ajax()){
            $cities = Cities::select('id', 'name')->where('region_id', $request->id)->get();

            return response()->json($cities);
        }
        return null;
    }
}
