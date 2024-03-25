<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{

    public function catalogo()
    {
        $produtos = Produto::all();
        return view('catalogo',compact('produtos'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
				$validator = Validator::make($request->all(), [
            "name" => "required|string",
            "price" => "required|numeric"
        ]);
        if ($validator->fails()) {
            return redirect(route('create'))
                ->withErrors($validator)
                ->withInput();
        }

        Produto::create($request->all());
        return redirect()->route('catalogo')->with('success', 'Produto cadastrado com sucesso!!!');
    }


    public function edit(int $id)
    {
        $product = Produto::findOrFail($id);
        return view('editar', compact('product'));
    }

		public function update(Request $request, int $id)
    {
        // Validação dos campos, se necessário
				$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return redirect(route('catalogo',$request->id))
                ->withErrors($validator)
                ->withInput();
        }

        // Atualizar os dados do produto
        $product = Produto::findOrFail($id);
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->save();

        // Redirecionar para a página de visualização do produto, por exemplo
        return redirect()->route('product.index', ['id' => $product->id])
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(int $id)
    {
        $product = Produto::findOrFail($id);
        $product->delete();
        // Redirecionar para a página de visualização do produto, por exemplo
        return redirect()->route('catalogo')->with('success', 'Produto removido com sucesso!');
    }

}


