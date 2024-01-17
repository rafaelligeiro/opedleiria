@extends ('layout.master')

@section('title', 'Notícias OPEDLeiria')

@section('styles')
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{asset('css/noticias.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
@endsection

@section('content')
    <div class="hero-section">
        <div class="content">
            <h1>Notícias</h1>
            <p>Fique a par de tudo o que acontece na OPEDLeiria</p>
        </div>
    </div>
    <div class="container">
        @foreach($noticias->chunk(3) as $noticiasChunk)
            <div class="linha1">
                @foreach($noticiasChunk as $noticia)
                    <div class="noticia">
                        <div class="content">
                            <div>
                                <h2 class="tituloNoticia">{{ $noticia->titulo }}</h2>
                                <p class="categoriaNoticia">{{ $noticia->categoria }}</p>
                                <p class="descricaoNoticia">{{ $noticia->descricao }}</p>
                            </div>
                            <div>
                                <div class="boxes">
                                    <div class="box">
                                        <p class="cima">{{ \Carbon\Carbon::parse($noticia->data)->format('H:i') }}</p>
                                        <p class="meio">{{ \Carbon\Carbon::parse($noticia->data)->format('d') }}</p>
                                        <p class="baixo">{{ \Carbon\Carbon::parse($noticia->data)->format('F') }}</p>
                                    </div>
                                </div>
                                <a class="button-sec" href="">Ler Noticia</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
