<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalog = Catalog::all();
        return view('index', compact('catalog'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Catalog::create($request->all());
        return redirect('/catalog');
    }

    public function edit($id)
    {
        $item = Catalog::find($id);
        return view('edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Catalog::find($id);
        $item->update($request->all());
        return redirect('/catalog');
    }

    public function destroy($id)
    {
        $item = Catalog::find($id);
        $item->delete();
        return redirect('/catalog');
    }
}
