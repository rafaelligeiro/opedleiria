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
        <div class="linha1">
            <div class="noticia">
                <img src="https://i.imgur.com/Rp1maML.jpg" alt="">
                <div class="content">
                    <div>
                        <h2 class="tituloNoticia">Inauguração OPEDLeiria</h2>
                        <p class="descricaoNoticia">A OPEDLeiria anúncia com todo o gosto a sua inaugaração oficial.</p>
                        <p class="categoriaNoticia">Categoria: Novidades</p>
                    </div>
                    <div>
                        <div class="boxes">
                            <div class="box">
                                <p class="cima">2023</p>
                                <p class="meio">20</p>
                                <p class="baixo">Dezembro</p>
                            </div>
                        </div>
                        <button class="button-sec">Ler Noticia</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
