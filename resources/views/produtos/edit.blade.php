@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Editar Produto</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Houve alguns problemas com os dados fornecidos.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Descrição:</strong>
                        <textarea class="form-control" name="descricao" placeholder="Descrição">{{ $produto->descricao }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Preço:</strong>
                        <input type="number" name="preco" value="{{ $produto->preco }}" class="form-control" placeholder="0.00" step="0.01">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 mb-3">
                    <div class="form-group">
                        <strong>Quantidade:</strong>
                        <input type="number" name="quantidade" value="{{ $produto->quantidade }}" class="form-control" placeholder="0">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
