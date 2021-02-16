<?php

namespace App\Http\Controllers\admin;

use App\HotDeals;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ProductHelper;
use App\Product;
use Illuminate\Http\Request;

class HotDealsController extends Controller
{

    public function index()
    {

        return view('admin.hotdeal.index', ['hotdeals' => HotDeals::with('product')->get()]);
    }


    public function create()
    {
        $products = Product::select('title', 'id', 'img')->get();
        return view('admin.hotdeal.create', ['products' => $products]);
    }

    public function store(Request $request)
    {
        HotDeals::create($request->all());
        return redirect()->route('hotdeals.index')->with('success', 'Предложение успешно добавлено');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
