<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Helpers\ProductHelper;
use App\Http\Requests\ProductStoreRequest;
use App\Modification;
use App\Product;
use App\RelatedProduct;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::paginate(20)
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::whereNull('parent_id')->with('children')->get(),
            'delimiter' => '',
            'modifications' => Modification::pluck('title', 'id')->all(),
            'products' => Product::get(),
        ]);
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->all();
        $data['img'] = ProductHelper::uploadImage($request);
        $product = Product::create($data);
        $product->modifications()->sync($request->modifications);
        ProductHelper::uploadGallery($request, $product);
        ProductHelper::saveRelated($request->input('related'), $product);
        return redirect()->route('products.index')->with('success', 'Продукт успешно добавлен');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', [
            'product' => Product::findOrFail($id),
            'categories' => Category::whereNull('parent_id')->with('children')->get(),
            'delimiter' => '',
            'products' => Product::get(),
            'galleries' => $product->gallery()->get(),
            'modifications' => Modification::pluck('title', 'id')->all(),
            'related' => RelatedProduct::related()->get(),
        ]);
    }

    public function update(ProductStoreRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->all();

        $data['status'] = $request->input('status') ? true : false;
        $data['bestseller'] = $request->input('bestseller') ? true : false;

        if ($file = ProductHelper::uploadImage($request, $product->img)) {
            $data['img'] = $file;
        }

        if (isset($data['galleries'])) {
            $images = Gallery::where('product_id', $product->id)->get();
            ProductHelper::deleteGallery($images);
        }

        $product->update($data);
        $product->modifications()->sync($request->modifications);

        if ($request->has('related')) {
            RelatedProduct::where('product_id', $id)->delete();
        }

        ProductHelper::saveRelated($request->input('related'), $product);
        ProductHelper::uploadGallery($request, $product);
        return redirect()->route('products.index')->with('success', 'Изменения успешно сохранены');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->modifications()->sync([]);
        RelatedProduct::where('product_id', $id)->delete();
        Gallery::where('product_id', $product->id)->delete();
        Storage::deleteDirectory(date('Y-m-d') . '/' . $product->title);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Продукт успешно удалена');
    }
}
