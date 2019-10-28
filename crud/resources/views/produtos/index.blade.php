@extends('produtos.layout') 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Index</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produtos.create') }}">Cadastrar novo produto</a>
            </div>
        </div>
    </div>   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th width="280px"></th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto -> id }}</td>
            <td>{{ $produto -> nome }}</td>
            <td>{{ $produto -> descricao }}</td>
            <td>{{ $produto -> valor }}</td>
            <td>
                <form action="{{ route('produtos.destroy', $produto -> id) }}" method="POST">     
                    <a class="btn btn-primary" href="{{ route('produtos.edit',$produto -> id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $produtos->links() !!}      
@endsection