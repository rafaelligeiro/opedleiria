@extends('layout.master')

@section('title', 'As minhas Doações')


@section('styles')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/MyDonations.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
@endsection

@section('content')
            <div class="card-body">
                @if(isset($doacao))
                    <div><strong>Titulo:</strong> {{ $doacao->titulo }} </div>
                    <div><strong>Quantidade:</strong> {{ $doacao->quantidade }} </div>
                    <div><strong>Tipo de Pagamento:</strong> {{ $doacao->tipo_pagamento }} </div>
                    <div><strong>Nome:</strong> {{ $doacao->nome }} </div>
                    <div><strong>Data:</strong> {{ $doacao->data }} </div>
                    <div><strong>Descrição:</strong> {{ $doacao->descricao }} </div>
                    <div><strong>E-mail:</strong> {{ $doacao->email }} </div>
                @endif
            </div>
        </div>
        <section>
            <h1 class="titulo">Doações</h1>
            <div class="tabelaTop">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Quantidade</th>
                            <th>Tipo de Pagamento</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tabela-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        @foreach ($doacoes as $doacao)
                            <tr>
                                <form id="formulario" action="/MyDonationEdit" method="POST">
                                 <td>{{ $doacao->quantidade}}€</td>
                                <td>{{ $doacao->tipo_pagamento}}</td>
                                <td><input disabled id="nome" class="nome" type="text" value="{{ $doacao->nome}}" data-original-value="{{ $doacao->nome }}"></td>
                                <td>{{ $doacao->data}}</td>
                                <td>{{ $doacao->descricao}}</td>
                                <td>{{ $doacao->email}}</td>
                                <td class = "actiontd">
                                    <a href={{"MyDonationsEdit/".$doacao['id']}}><div onclick="OpenName()" id="actionbtnOpen" class="actionbtn"><i class="fas fa-pencil-alt"></i></div></a>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection

@section('scripts')


@endsection
