@extends ('layout.master')

@section('title', 'Fazer uma Doação')

@section('styles')
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/DonationStyle.css')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="all">
        <div class="division">
            <div class="colunas1">
                <img class="imagem" src="{{asset('img/retrato-de-homem-com-deficiencia-com-fones-de-ouvido.png')}}" alt="Pessoa com Trissomia 21">
            </div>
            <form class="formClass" action="#">
                <div class="formDiv">
                    <h1 class="text" >Faça uma doação</h1>
                    <h2 class="texth2" >Todas as doações, por mais pequenas que sejam <span class="ajudamSpan">ajudam</span></h2>
                    <div class="nomes">
                        <div class="grupo-input">
                            <h1 class="text">Nome</h1>
                            <input id="inputID" type="text" name="nome" class="nomeInput" placeholder="O seu nome">
                        </div>
                        <div class="grupo-input">
                            <h1 class="text">Email</h1>
                            <input id="inputID" type="text" name="email" class="emailInput" placeholder="O seu email">
                        </div>
                    </div>

                    <div class="radio">
                        <h1>Quantia da doação</h1>
                        <div class="checkboxes">
                            <div class="escolhas">
                                <input type="radio" checked="checked" name="dinheiro">
                                <label for="20">20€</label>
                            </div>
                            <div class="escolhas">
                                <input type="radio" name="dinheiro">
                                <label for="40">40€</label>
                            </div>
                            <div class="escolhas">
                                <input type="radio" name="dinheiro">
                                <label for="60">60€</label>
                            </div>
                            <div class="escolhas">
                                <input type="radio" name="dinheiro">
                                <label for="80">80€</label>
                            </div>
                            <div class="escolhas">
                                <input type="radio" name="dinheiro">
                                <label for="100">100€</label>
                            </div>
                            <div class="escolhas">
                                <input type="radio" name="dinheiro" id="radioOutra">
                                <label for="outra">Outra</label>
                                <input pattern="[0-9]+" id="outraInput" class="outraInput" type="text" name="Outra"
                                    disabled placeholder="Digite o seu valor">
                            </div>
                        </div>

                    </div>

                    <div class="pagamento">
                        <div class="title">
                            <h1>Tipo de pagamento</h1>
                        </div>
                        <div class="tipos">
                            <div id="items" class="items" onclick="selecionarOpcao(this)">
                                <h1>Cartão de Crédito</h1>
                                <div class="like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <path
                                            d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861 5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z" />
                                    </svg>
                                </div>
                            </div>
                            <div id="items" class="items" onclick="selecionarOpcao(this)">
                                <h1>Ref. Multibanco</h1>
                                <div class="like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <path
                                            d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861 5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z" />
                                    </svg>
                                </div>
                            </div>
                            <div id="items" class="items" onclick="selecionarOpcao(this)">
                                <h1>PayPal</h1>
                                <div class="like">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24">
                                        <path
                                            d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861 5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="companhia">
                        <input type="text" name="companhia" placeholder="Nome da companhia(se aplicável)">
                    </div>

                    <div class="notification">
                        <input type="radio" name="not">
                        <h1>Gostaria de receber notificações através do email</h1>
                    </div>

                    <div class="submitButton">
                        <button id="btn" class="buttonFinal">
                            <p id="btnText" style="margin-bottom:0;" >Doar</p>
                            <div class="check-box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                    <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
        </div>

    </div>
    </div>
    </form>
    </div>
    </div>
@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var radioOutra = document.getElementById('radioOutra');
        var outraInput = document.getElementById('outraInput');

        var placeholderOriginal = outraInput.placeholder;

        var radioButtons = document.querySelectorAll('[name="dinheiro"]');
        radioButtons.forEach(function (radio) {
            radio.addEventListener('change', function () {
                outraInput.disabled = !radioOutra.checked;
                if (!radioOutra.checked) {
                    outraInput.value = "";
                    outraInput.placeholder = placeholderOriginal;
                } else {
                    outraInput.placeholder = "";
                    outraInput.disabled = false;
                }

                document.querySelectorAll('.items').forEach(function (item) {
                    item.classList.remove('selected');
                });
            });
            outraInput.disabled = !radioOutra.checked;
        });

        const btn = document.querySelector("#btn");
        const btnText = document.querySelector("#btnText");

        btn.onclick = () => {
            btnText.innerHTML = "Obrigado!";
            btn.classList.add("active");
        };

    });

    function selecionarOpcao(element) {

        element.classList.add('selected');


        document.querySelectorAll('.items').forEach(function (item) {
            if (item !== element) {
                item.classList.remove('selected');
            }
        });
    }
</script>    
@endsection
