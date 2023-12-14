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

    <section class="cards">
        @foreach($eventos as $evento)
            <div class="card">
                <img src="{{ asset('storage/imagens_eventos/'.$evento->imagem) }}" alt="{{ $evento->titulo }}">
                <div class="card-content">
                    <h3>{{ $evento->titulo }}</h3>
                    <p>{{ $evento->descricao }}</p>
                    <a href="{{route('inscricoes.create',$evento)}}" class="my-2 w-full bg-primary-600 hover:bg-primary-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-xl text-md px-5 py-2.5 text-center flex items-center justify-center text-white gap-2">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></a>
                </div>
            </div>
        @endforeach
    </section>


    <div class="eventos">
        @foreach($eventos->take(3) as $evento)
        <div class="evento">
            <img src="{{$evento->imagem}}" alt="">
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

