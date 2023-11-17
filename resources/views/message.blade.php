@extends ('layout.master')

@section('title', 'Enviar Msg')

@section('styles')
<link rel="stylesheet" href="{{asset('css/estilos_message.css')}}">
    <!--
        opcional
        <link rel="stylesheet" href="style_message.css">

    -->
@endsection

@section('content')
    <div class="containerAll">
        <div class="ajustes">
            <div class="form-divided">
                <div class="part1">
                    <div class="oped">
                        <h1>OPED<span>LEIRIA</span></h1>
                    </div>
                </div>
                <div class="part2">
                    <div class="inputs">
                        <img src="{{asset('img/user.png')}}" alt="nome">
                        <input class="nome" type="text" name="nome" placeholder="O seu nome">
                    </div>
                    <div class="mail">
                        <img src="{{asset('img/mail.png')}}" alt="nome">
                        <input type="text" name="nome" placeholder="O seu email">
                    </div>
                    <div class="bubble">
                        <img src="{{asset('img/bubble.png')}}" alt="nome">
                        <textarea type="text" name="nome" placeholder="A sua mensagem"></textarea>
                    </div>
                    <div class="botao">
                        <a href="#"><button>Enviar Mensagem</button></a>
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
