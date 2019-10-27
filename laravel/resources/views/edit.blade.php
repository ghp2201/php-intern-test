@extends('produtos.layout')
@section('content')
<div class = "row">
    <div>
        <h1>Editar produtos</h1>
    </div>
</div>
<form action = "{{ route('produtos.update'), $product -> id }}" method = "POST">
    @csrf
    @method('PUT')
    <div class = "row">
        Nome: <input type = "text" name = "nome" value = "{{ $produto -> name}}" class = "form-control" placeholder = "Novo nome do produto">
        Descrição: <input type = "text" name = "descricao" value = "{{ $produto -> description}}" class = "form-control" placeholder = "Nova descrição do produto">
        Valor: <input type = "number" name = "valor" value = "{{ $produto -> value}}" class = "form-control" placeholder = "Novo valor do produto">
        <button type = "submit" class = "btn btn-primary">Enviar</button>
    </div>
</form>
@endsection