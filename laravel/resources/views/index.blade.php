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
        <td>{{ $produto -> id }}</td>
        <td>{{ $produto -> name }}</td>
        <td>{{ $produto -> description }}</td>
        <td>{{ $produto -> value}}</td>
        <td>
            <form action = "{{ route('produtos.delete), $produto -> id }}" method = "POST">
                <a class = "btn btn-info" href = "{{ route('produtos.show'), $produto -> id }}">Exibir</a>
                <a class = "btn btn-primary" href = "{{ route('produtos.edit'), $produto -> id }}">Editar</a>
                @csrf
                @method('delete')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $produtos -> links() !!}
@endsection