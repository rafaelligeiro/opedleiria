@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Doação
            </div>
            <div class="card-body">
                <div><strong>Titulo:</strong> {{ $doacao->titulo }} </div>
                <div><strong>Quantidade:</strong> {{ $doacao->quantidade }} </div>
                <div><strong>Tipo de Pagamento:</strong> {{ $doacao->tipo_pagamento }} </div>
                <div><strong>Nome:</strong> {{ $doacao->nome }} </div>
                <div><strong>Data:</strong> {{ $doacao->data }} </div>
                <div><strong>Descrição:</strong> {{ $doacao->descricao }} </div>
                <div><strong>E-mail:</strong> {{ $doacao->email }} </div>
            </div>
        </div>
    </div>
@endsection

