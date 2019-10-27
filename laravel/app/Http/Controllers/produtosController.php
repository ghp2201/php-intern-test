<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    //tela inicial e listagem dos produtos:
    public function index()
    {
        $produtos = Produtos::latest() -> paginate(5);
        return view ('produtos.index', compact('produtos')) -> with('i', (request() -> input('page', 1) -1) * 5);
    }
    //criação dos produtos:
    public function create()
    {
        return view('produtos.create');
    }
    //armazenamento do produto recem criado:
    public function store(Request $request)
    {
        //array dos valores
        $request -> validate([
            'name'        => 'required',
            'description' => 'required',
            'value'       => 'required'
        ]);
        Produto::create($request -> all());
        //redirecionamento p/o index 
        return redirect() -> route('produtos.index') -> with('sucesso', 'produto cadastrado com sucesso.');
    }
    //exibição do produto:
    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }
    //exibe a tela de edição do produto:
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }
    //atualiza o produto para o armazenamento:
    public function update(Request $request, Product $produto)
    {
        //array dos valores
        $request -> validate([
            'name'        => 'required',
            'description' => 'required',
            'value'       => 'required'
        ]);
        $produto -> update($request -> all());
        //redirecionamento p/o index 
        return redirect() -> route('produtos.index') -> with('sucesso', 'produto editado com sucesso.');
    }
    //exclusão de produto:
    public function delete(Produto $produto)
    {
        $produto -> delete();
        //redirecionamento p/o index 
        return redirect() -> route('produtos.index') -> with('sucesso', 'produto excluido com sucesso.');
    }
}
