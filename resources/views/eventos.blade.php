@extends ('layout.master')

@section('title', 'Eventos')

@section('styles')
<link rel="stylesheet" href="{{asset('css/_eventos.css')}}">
    <!--
        opcional
        <link rel="stylesheet" href="style_message.css">

    -->
@endsection

@section('content')
<section class="header">
    <h1>Eventos</h1>
</section>

<section class="cards">
    <div class="card">
        <img src="img/caminhada.jpg" alt="Evento 1">
        <div class="card-content">
            <h3>Caminhada pela Saúde Mental</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>

    <div class="card">
        <img src="img/sao_martinho.jpg" alt="Evento 2">
        <div class="card-content">
            <h3>São Martinho</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>

    <div class="card">
        <img src="img/parque.jpeg" alt="Evento 3">
        <div class="card-content">
            <h3>Evento Solidário no Parque</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>
</section>

<section class="cards">
    <div class="card">
        <img src="img/Natal.jpg" alt="Evento 1">
        <div class="card-content">
            <h3>Gala de Natal OPEDLeiria</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>

    <div class="card">
        <img src="img/carnaval.jpg" alt="Evento 2">
        <div class="card-content">
            <h3>Carnaval Especial</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>

    <div class="card">
        <img src="img/Pascoa.jpeg" alt="Evento 3">
        <div class="card-content">
            <h3>Páscoa Feliz</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus mauris at iaculis faucibus. Lorem ipsum dolor sit amet, consectetur</p>
            <button class="btn">Inscrever-me <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i></i></button>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
