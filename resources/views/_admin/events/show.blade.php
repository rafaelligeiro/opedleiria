@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Evento
            </div>
            <div class="card-body">

                <div>
                    <img alt="Post image" src="{{ asset('public/img/' . $evento->imagem) }}">
                </div>

                <div><strong>Titulo:</strong> {{ $evento->titulo }} </div>
                <div><strong>Descrição:</strong> {{ $evento->descricao }} </div>
            </div>
        </div>
    </div>
@endsection
