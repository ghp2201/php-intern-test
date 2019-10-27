@extends('produtos.layout')
@section('content')
<div class = "row">
    <div>
        <h1>Cadastrar produtos</h1>
    </div>
</div>
<form action = "{{ route('produtos.store') }}" method = "POST">
    @csrf
    <div class = "row">
        Nome: <input type = "text" name = "nome" class = "form-control" placeholder = "Nome do produto">
        Descrição: <input type = "text" name = "descricao" class = "form-control" placeholder = "Descrição do produto">
        Valor: <input type = "text" name = "valor" class = "form-control" placeholder = "Valor do produto">
        <button type = "submit" class = "btn btn-primary">Enviar</button>
    </div>
</form>
@endsection