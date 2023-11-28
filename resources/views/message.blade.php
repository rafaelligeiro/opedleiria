@extends ('layout.master')

@section('title', 'Enviar Mensagem')

@section('styles')
@vite('resources/css/app.css')
<link rel="stylesheet" href="{{asset('css/estilos_message.css')}}">
@endsection

@section('content')
    <div class="containerAll">
        <div class="ajustes">
            <div class="form-divided">
                <div class="part1">
                    <div class="oped">
                        <h1 class="opening">OPED<span class="span">LEIRIA</span></h1>
                    </div>
                </div>
                <div class="part2">
                    <div class="inputs">
                        <img class="imagem1" src="{{asset('img/user.png')}}" alt="nome">
                        <input class="nome" type="text" name="nome" placeholder="O seu nome">
                    </div>
                    <div class="mail">
                        <img class="imagem2" src="{{asset('img/mail.png')}}" alt="nome">
                        <input class="email" type="text" name="nome" placeholder="O seu email">
                    </div>
                    <div class="bubble">
                        <img class="imagem3" src="{{asset('img/bubble.png')}}" alt="nome">
                        <textarea class="mensagem" type="text" name="nome" placeholder="A sua mensagem"></textarea>
                    </div>
                    <div class="botao">
                        <a href="#"><button class="mainbutton">Enviar Mensagem</button></a>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
