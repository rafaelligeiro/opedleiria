@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Evento
            </div>
            <div class="card-body">

                <div>
                    <img src="{{asset('storage/imagens_eventos/'.$evento->imagem)}}"class="img-post" alt="Event image">
                </div>

                <div><strong>Titulo:</strong> {{ $evento->titulo }} </div>
                <div><strong>Descrição:</strong> {{ $evento->descricao }} </div>
                <br>
                <br>
                @if (count($evento->inscricoes))
                <div >
                    <h3>Inscrições</h3>
                    <ul>
                        @foreach($evento->inscricoes as $inscricao)
                        <li>
                            <strong>Nome:</strong> {{$inscricao->nome}} - {{$inscricao->quantidade}} pessoas
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
