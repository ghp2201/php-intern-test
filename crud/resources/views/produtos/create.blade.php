@extends('produtos.layout')  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastro de produto</h2>
        </div>
    </div>
</div>      
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome do produto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição do produt"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor:</strong>
                <input type="number" name="valor" class="form-control" placeholder="Valor do produto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>   
</form>
@endsection