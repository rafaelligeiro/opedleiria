@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Mensagem
            </div>
            <div class="card-body">
                <div><strong>Nome:</strong>{{ $mensagem->nome}}</div>
                <div><strong>Email:</strong>{{ $mensagem->email}}</div>
                <div><strong>Mensagem:</strong>{{ $mensagem->mensagem}}</div>
            </div>
        </div>
    </div>
@endsection

