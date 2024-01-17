@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Inscricões
            </div>
            <div class="card-body">
                <div><strong>Nome:</strong> {{$inscricao->nome}} </div>
                <div><strong>Telefone:</strong> {{$inscricao->telefone}} </div>
                <div><strong>Quantidade:</strong> {{$inscricao->quantidade}} </div>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
