@extends ('layout.master')

@section('title', 'Enviar Mensagem')

@section('styles')
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/estilos_message.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@endsection

@section('content')
@if (!empty(session('success')))
<div class="alert alert-success alert-dismissible fade show" style="margin: 0 auto !important; width:500px;" role="alert">
    <p style="margin: 0 auto; width:fit-content;" >Mensagem enviada com sucesso!!</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@error("nome")
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Erro no nome!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@enderror

@error("email")
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Erro no email!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@enderror

@error("mensagem")
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Erro na mensagem!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@enderror

    <div class="containerAll">
        <div class="ajustes">
            <div class="form-divided">
                <div class="part1">
                    <div class="oped">
                        <h1 class="opening">OPED<span class="span">LEIRIA</span></h1>
                    </div>
                </div>

                <form class="formClass" action="{{route('mensagens.store')}}" method='POST'>
                    @csrf
                <div class="part2">
                    <div class="inputs">
                        <div class="input">
                            <p>Introduza o seu nome</p>
                            <div class="iconInput">
                                <img class="imagem1" src="{{asset('img/user.png')}}" alt="nome">
                                <input class="nome" type="text" name="nome" placeholder="Rafael Ligeiro">
                            </div>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input">
                            <p>Introduza o seu email</p>
                          <div class="mail">
                            <img class="imagem2" src="{{asset('img/mail.png')}}" alt="nome">
                            <input class="email" type="text" name="email" placeholder="O seu email">
                          </div>
                        </div>
                    </div>
                    <div class="inputs">
                        <div class="input">
                            <p>Introduza a sua mensagem</p>
                           <div class="bubble">
                                <img class="imagem3" src="{{asset('img/bubble.png')}}" alt="nome">
                                <textarea class="mensagem" type="text" name="mensagem" placeholder="A sua mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="botao">
                        <a href="#"><button type="submit" class="mainbutton">Enviar Mensagem</button></a>
                    </div>

                </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <!-- opcional-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
@endsection
