@extends('produtos.layout')
@section('content')
<div class = "row">
    <div>
        <div>
            <h1>Cadastro de produtos</h1>
            <a class = "btn btn-success" href = "{{ route('produtos.create') }}"> Cadastrar novo </a>
        </div>
    </div>
</div>
<!-- tabela de exibição dos produtos ja cadastrados-->
<table class = "table table-bordered">
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Valor</th>
    </tr>
    @foreach ($produtos as $produtos)
    <tr>
        <td></td>
    </tr>
    @endforeach
</table>