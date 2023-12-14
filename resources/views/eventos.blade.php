@extends ('layout.master')

@section('title', 'Eventos')

@section('styles')
<link rel="stylesheet" href="{{asset('css/_eventos.css')}}">
@vite('resources/css/app.css')
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
        @foreach($eventos as $evento)
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
                    <button class="button-sec">Saber Mais</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <!-- opcional -->
@endsection

