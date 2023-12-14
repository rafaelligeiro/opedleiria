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
@endsection

@section('scripts')
    <!-- opcional -->
@endsection

