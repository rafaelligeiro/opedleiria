@extends ('layout.master')

@section('title', 'Enviar Mensagem')

@section('styles')
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/estilos_message.css')}}">
@endsection

@section('content')
@if (!empty(session('success')))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
            @endif
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
                        <img class="imagem1" src="{{asset('img/user.png')}}" alt="nome">
                        <input class="nome" type="text" name="nome" placeholder="O seu nome">
                        @error("nome")
                        <br>
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mail">
                        <img class="imagem2" src="{{asset('img/mail.png')}}" alt="nome">
                        <input class="email" type="text" name="email" placeholder="O seu email">
                        @error("email")
                        <br>
                        <div style="color:red">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="bubble">
                        <img class="imagem3" src="{{asset('img/bubble.png')}}" alt="nome">
                        <textarea class="mensagem" type="text" name="mensagem" placeholder="A sua mensagem"></textarea>
                        @error("mensagem")
                        <br>
                        <div style="color:red">{{$message}}</div>
                        @enderror
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
