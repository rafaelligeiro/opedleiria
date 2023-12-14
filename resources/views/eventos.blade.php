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
                <img src="{{asset($evento->imagem) }}" alt="{{ $evento->titulo }}">
                <div class="card-content">
                    <h3>{{ $evento->titulo }}</h3>
                    <p>{{ $evento->descricao }}</p>
                    <a href="{{route('inscricoes.create',$evento)}}" class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></a>
                </div>
            </div>
        @endforeach
    </section>
@endsection

@section('scripts')
    <!-- opcional -->
@endsection

