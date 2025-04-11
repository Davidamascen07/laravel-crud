@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start">
                    <h2>Detalhes do Produto</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {{ $produto->nome }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $produto->descricao }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    R$ {{ number_format($produto->preco, 2, ',', '.') }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantidade:</strong>
                    {{ $produto->quantidade }}
                </div>
            </div>
        </div>
    </div>
@endsection
