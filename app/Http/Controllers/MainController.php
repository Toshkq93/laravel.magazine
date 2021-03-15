<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Product;
use App\Regions;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->with('gallery')->get();
        if (session()->has('currency')){
             session('currency');
        }else{
             session()->put(['currency' => Currency::where('code', 'BYN')->first()]);
        }

        return view('fronts.main.index', [
            'products' => $products,
        ]);
    }
}
