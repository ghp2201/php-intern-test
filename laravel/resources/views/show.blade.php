@extends('produtos.layout')
@section('content')
<div class = "row">
    <div>
        <h1>Exibir produto</h1>
    </div>
</div>
<div class = "row">
    Id: {{ $produto -> id }}
    Nome: {{ $produto -> name}}
    Descrição: {{ $produto -> description }}
    Valor: {{ $produto -> valor }}
</div>
@endsection