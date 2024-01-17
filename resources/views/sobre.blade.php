@extends ('layout.master')

@section('title', 'Sobre o OPEDLeiria')

@section('styles')
<link rel="stylesheet" href="{{asset('css/estilos_sobre.css')}}">

@endsection

@section('content')
<div class="banner">
    <div class="title">
        Sobre o OPEDLeiria
    </div>
    <img src="{{asset('img/banner_sobre.png')}}" alt="Banner">
</div>


<div class="location pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/location.png')}}" alt="local do OPEDLeiria">
            </div>
            <div class="col-md-6 align-self-center">
                <h2>A nossa localização</h2>
                <p>A nossa instituição possui apenas uma filial e ela está situada em Leiria, de momento temos
                    lotação máxima de 50 pessoas.</p>
            </div>
        </div>
    </div>
</div>

<div class="objetivos pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <h2>Os nossos objetivos</h2>
                <p>Temos como objetivo a inclusão de toda a gente independentemente das suas capacidades mentais e
                    motoras. Criamos o OPEDLeiria para as pessoas que não são capacitadas terem um lugar seguro e
                    com a ajuda necessária.</p>
            </div>
            <div class="col-md-6 ">
                <img src="{{asset('img/objetivos.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="equipa pt-5">
    <div class="container">
        <h1>A nossa equipa</h1>
        <div class="box-position pt-5">
            <div class="box">
                <img src="{{asset('img/alex.png')}}" alt="" />
                <h3>Alexandre Marcelino</h3>
                </a>
            </div>
            <div class="box">
                <img src="{{asset('img/francisco.png')}}" alt="" />
                <h3>Francisco Assis</h3>
                </a>
            </div>
        </div>
        <div class="box-position">
            <div class="box">
                <img src="{{asset('img/rafa.png')}}" alt="" />
                <h3>Rafael Ligeiro</h3>
                </a>
            </div>
            <div class="box">
                <img src="{{asset('img/teixeira.png')}}" alt="" />
                <h3>Rúben Teixeira</h3>
                </a>
            </div>
            <div class="box">
                <img src="{{asset('img/valentim.png')}}" alt="" />
                <h3>Valentim Oryshchuk</h3>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- opcional-->
@endsection
