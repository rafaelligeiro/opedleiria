@extends ('layout.master')

@section('title', 'Bem-Vindo ao OPEDLeiria')

@section('styles')
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
@endsection

@section('content')
    <div class="hero-section">
        <div class="content">
            <h1>Instituição de<br>Solidariedade</h1>
            <p>Instituição sem fins lucrativos ao serviço das pessoas<br>
                com deficiência que diariamente contam connosco.</p>
            <button class="button-sec">Saber Mais</button>
            <button class="button-white">Doar</button>
        </div>
    </div>
    <div class="container">
        <div class="linha1">
            <div class="box1">
                <h2>Quem Somos</h2>
                <p>Somos a OPEDLeiria, uma associação comprometida com a promoção da inclusão e melhoria da qualidade de vida para pessoas com deficiência na região de Leiria. Fundada em 2023, a nossa missão é criar uma comunidade inclusiva onde cada indivíduo é valorizado, respeitado e capacitado.</p>
                <button class="button-sec">Saber Mais</button>
            </div>
            <div class="box2">
                <h2>Últimas Doações</h2>
                <div class="ultimas-doacoes">
                    @foreach($doacoes->take(2) as $doacao)
                    <div class="doacao">
                        <img src="{{asset('img/pessoa1.png')}}" alt="foto-utilizador">
                        <div class="content">
                            <h3>{{ $doacao->nome }}</h3>
                            <p>{{ $doacao->descricao }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="linha2">
            <div class="box2">
                <h2>A nossa missão</h2>
                <p>Trabalhamos incansavelmente para proporcionar oportunidades para que pessoas com deficiência alcancem o seu pleno potencial. Acreditamos na igualdade de direitos e na construção de uma sociedade mais justa e acessível.</p>
            </div>
            <div class="box1">
                <div class="content">
                    <h2>Como Ajudar</h2>
                    <p>A sua doação faz toda a diferença na construção de um ambiente mais inclusivo e acolhedor para pessoas com deficiência na nossa comunidade.</p>
                    <button class="button-sec">Começar</button>
                </div>
                <div class="boxes">
                    <div class="box">
                        <img src="{{asset('img/maca.svg')}}" alt="icone-maça">
                        <p>Garanta acesso a alimentos nutritivos para todos.</p>
                    </div>
                    <div class="box">
                        <img src="{{asset('img/livro.svg')}}" alt="icone-livro">
                        <p>Inspire a leitura, doe livros que enriqueçam mentes.</p>
                    </div>
                    <div class="box">
                        <img src="{{asset('img/roupa.svg')}}" alt="icone-roupa">
                        <p>Dê calor e conformo com doações de roupas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="linha3">
            <div class="box1">
                <div class="content">
                    <h2>Como sempre, estamos abertos a receber novos membros na nossa assossiação</h2>
                    <p>Seja de que lugar do mundo for, todos são bem-vindos na OPEDLeiria. Junte-se a nós para construir uma comunidade globalmente inclusiva.</p>
                    <button class="button-sec">Começar uma inscrição</button>
                </div>
                <img src="{{asset('img/mundo-index.png')}}" alt="">
            </div>
        </div>
        <div class="linha4">
            @foreach($eventos->take(3) as $evento)
            <div class="evento">
                <img src="{{ asset($evento->imagem) }}" alt="{{ $evento->titulo }}">
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
    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
