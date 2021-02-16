<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModficationStoreRequest;
use App\Modification;

class ModificationController extends Controller
{
    public function index()
    {
        return view('admin.modification.index', ['modifications' => Modification::get()]);
    }

    public function create()
    {
        return view('admin.modification.create');
    }

    public function store(ModficationStoreRequest $request)
    {
        Modification::create($request->all());
        return redirect()->route('modifications.index')->with('success', 'Модификация успешно добавлена');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('admin.modification.edit', ['modification' => Modification::findOrFail($id)]);
    }

    public function update(ModficationStoreRequest $request, $id)
    {
        $modification = Modification::findOrFail($id);
        $modification->update($request->all());
        return redirect()->route('modifications.index')->with('success', 'Изменения успешно добавлены');
    }

    public function destroy($id)
    {
        $modification = Modification::findOrFail($id);
        $modification->delete();
        return redirect()->route('modifications.index')->with('success', 'Модификация успешно удалена');
    }
}
