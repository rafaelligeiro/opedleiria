@extends('layout.master')

@section('title', 'As minhas Doações')

@section('styles')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/MyDonations.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Adicione a biblioteca DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Doação
            </div>
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

        <!-- Display a table of all donations -->
        <h1 class="h3 mb-2 text-gray-800">Doações</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Quantidade</th>
                                <th>Tipo de Pagamento</th>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Descrição</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doacoes as $doacao)
                                <tr>
                                    <td>{{ $doacao->nome}}</td>
                                    <td>{{ $doacao->tipo_pagamento}}</td>
                                    <td>{{ $doacao->quantidade}}</td>
                                    <td>{{ $doacao->data}}</td>
                                    <td>{{ $doacao->descricao}}</td>
                                    <td>{{ $doacao->email}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Adicione as bibliotecas jQuery e DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                destroy: true,
                "order": [[1, 'desc']],
                "columns": [
                    { "orderable": false },
                    null,
                    null,
                    null,
                    { "orderable": false },
                    { "orderable": false }
                ]
            });
        });
    </script>
@endsection
