@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Lista de Produtos</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-success" href="{{ route('produtos.create') }}"> Criar Novo Produto</a>
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
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th width="280px">Ações</th>
            </tr>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>
                    <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('produtos.show',$produto->id) }}">Detalhes</a>
                        <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $produtos->links() !!}
    </div>
@endsection
