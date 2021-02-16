<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.index', ['categories' => Category::orderBY('parent_id')->get()]);
    }


    public function create()
    {
        return view('admin.category.create', [
            'categories' => Category::with('children')->where('parent_id')->get(),
            'delimiter' => ''
        ]);
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Категория успешно добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'category' => Category::findOrFail($id),
            'categories' => Category::with('children')->where('parent_id')->get(),
            'delimiter' => ''
        ]);
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->slug = null;
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Ваши изменения успешно добавлены');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->children->count()){
            return redirect()->route('categories.index')->with('error', 'Категория имеет вложенные категории!');
        }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Категория успешно удалена');
    }
}
