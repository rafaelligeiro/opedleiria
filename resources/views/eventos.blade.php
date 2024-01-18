@extends ('layout.master')

@section('title', 'Eventos')

@section('styles')
<link rel="stylesheet" href="{{asset('css/_eventos.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!--
        opcional
        <link rel="stylesheet" href="style_message.css">

    -->
@endsection

@section('content')
    <section class="header">
        <h1 class="titulo">Eventos</h1>
    </section>

    <div class="eventos">
        @foreach($eventos->chunk(3) as $eventosChunk)
            <div class="linha4">
                <div class="row">
                    @foreach($eventosChunk as $evento)
                        <div class="evento">
                            <img src="{{ asset('storage/imagens_eventos/'.$evento->imagem) }}" alt="{{ $evento->titulo }}">
                            <div class="content">
                                <div>
                                    <h2 class="tituloEvento">{{ $evento->titulo }}</h2>
                                    <p class="descricaoEvento">{{ $evento->descricao }}</p>
                                </div>
                                <div>
                                    <div class="boxes">
                                        <div class="box">
                                            <p class="cima">{{ \Carbon\Carbon::parse($evento->data)->format('H:i') }}</p>
                                            <p class="meio">{{ \Carbon\Carbon::parse($evento->data)->format('d') }}</p>
                                            <p class="baixo">{{ \Carbon\Carbon::parse($evento->data)->format('F') }}</p>
                                        </div>
                                        <div class="box">
                                            <p class="cima">Máximo</p>
                                            <p class="meio">{{ $evento->num_participantes }}</p>
                                            <p class="baixo">Participantes</p>
                                        </div>
                                    </div>
                                    <a class="button-sec" href="{{route('inscricoes.create',$evento)}}">Inscrever-me</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    </div>
@endsection

@section('scripts')
    <!-- opcional -->
@endsection

