@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação da Notícia
            </div>
            <div class="card-body">

                <div><strong>Titulo:</strong> {{ $noticia->titulo }} </div>
                <div><strong>Categoria:</strong> {{ $noticia->categoria }} </div>
                <div><strong>Descrição:</strong> {{ $noticia->descricao }} </div>
                <div><strong>Data:</strong> {{ $noticia->data }} </div>
                <br>
            </div>
        </div>
    </div>
@endsection
