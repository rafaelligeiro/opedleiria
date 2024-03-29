@extends ('layout.master')

@section('title', 'Fazer uma Doação')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/DonationStyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section('content')

    @if (!empty(session('success')))
        <div class="alert alert-success alert-dismissible fade show" style="margin: 0 auto !important; width:500px;"
            role="alert">
            Obrigado pela doação!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @error("tipo_pagamento")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Selecione a forma de Pagamento!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    @enderror
    @error("descricao")
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    A descrição não cumpre com as normas!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    @enderror

    <div class="all">
        <div class="division">
            <div class="colunas1">
                <img class="imagem" src="{{ asset('img/retrato-de-homem-com-deficiencia-com-fones-de-ouvido.png') }}"
                    alt="Pessoa com Trissomia 21">
            </div>
            <form class="formClass" action="{{ route('makeDonation.store') }}" method="POST">
                @csrf
                <div class="formDiv">
                    <h1 class="text">Faça uma doação</h1>
                    <h2 class="texth2">Todas as doações, por mais pequenas que sejam <span class="ajudamSpan">ajudam</span>
                    </h2>
                    <div class="nomes">
                        <div class="grupo-input">
                            <h1 class="textNome">Nome</h1>
                            <input id="inputID" type="text" name="nome" class="nomeInput" placeholder="O seu nome">
                            <label class="nomeLabel disabled" for="nome">O nome está <span style="color:#9C1417;"
                                    class="nomeErrado disabled">errado</span><span style="color:#0D9495;"
                                    class="nomeCerto disabled">certo</span></label>
                        </div>
                        <div class="grupo-input">
                            <h1 class="textEmail">Email</h1>
                            <input id="inputID" type="text" name="email" class="emailInput"
                                placeholder="O seu email">
                            <label class="emailLabel disabled" for="email">O email está <span style="color:#9C1417;"
                                    class="emailErrado disabled">errado</span><span style="color:#0D9495;"
                                    class="emailCerto disabled">certo</span></label>
                        </div>
                    </div>

                    <div class="radio">
                        <div class="radio_input">
                            <h2 class="QSubTitle">Quantidade da doação</h2>
                            <input pattern="[1-9][0-9]*" class="quantidadeDoacao" type="text" name="quantidade">
                        </div>
                        <div class="radio_input">
                            <div class="verificarDoacao" onclick="selecionarOpcao(this)">
                                <div class="verificarDiv">
                                    <p>Verificar Doação</p>
                                    <div class="like">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M0 11c2.761.575 6.312 1.688 9 3.438 3.157-4.23 8.828-8.187 15-11.438-5.861 5.775-10.711 12.328-14 18.917-2.651-3.766-5.547-7.271-10-10.917z" />
                                        </svg>
                                        <img class="errorImg" style="width:10px; height:auto;"
                                            src="{{ asset('img/close.png') }}" alt="xbutton">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tipoPagamento">
                        <div class="options">
                            <div class="items">
                                <p>Cartão de Crédito</p>
                                <input class="opcao" type="radio" name="tipo_pagamento" value="Cartão">
                            </div>
                            <div class="items">
                                <p>MBway</p>
                                <input class="opcao" type="radio" name="tipo_pagamento" value="MBWay">
                            </div>
                            <div class="items">
                                <p>PayPal</p>
                                <input class="opcao" type="radio" name="tipo_pagamento" value="Referência">
                            </div>
                        </div>
                    </div>

                    <div class="companhia">
                        <input type="text" name="descricao" placeholder="Motivo da doação">
                    </div>

                    <div class="notification">
                        <input type="radio" name="not">
                        <h1>Gostaria de receber notificações através do email</h1>
                    </div>

                    <div class="submitButton">
                        <button type="submit" id="btn" class="buttonFinal disabled">
                            <p id="btnText" style="margin-bottom:0;">Doar</p>
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
        /*bools*/
        var donationDone = false;
        var nomeIsCorrect = false;
        var emailIsCorrect = false;
        var doacaoIsCorrect = false;
        var pagamentoIsCorrect = false;
        var descricaoIsCorrect = false;
        var button = document.querySelector('.buttonFinal');


        function selecionarOpcao(element) {
            var inputQuantidade = document.querySelector('.quantidadeDoacao');
            var quantidadeValue = inputQuantidade.value;

            var pattern = /^[1-9][0-9]*(\.[0-9]+)?$/;


            if (!pattern.test(quantidadeValue)) {
                console.error("Erro: A quantidade da doação deve corresponder ao padrão.");
                document.querySelector('.verificarDoacao').classList.add('error');
            } else {
                if (document.activeElement !== inputQuantidade) {
                    document.querySelectorAll('.verificarDoacao').forEach(function(item) {
                        item.classList.remove('selected');
                        document.querySelector('.verificarDoacao').classList.remove('error');
                    });

                    if (!donationDone && confirm("Tem a certeza da doação?")) {
                        document.querySelector('.verificarDoacao').classList.add('selected');
                        donationDone = true;
                        doacaoIsCorrect = true;
                    } else {
                        doacaoIsCorrect = false;
                        return;
                    }

                    if (nomeIsCorrect === true && emailIsCorrect === true && doacaoIsCorrect === true) {
                    button.classList.remove('disabled');
                    button.disabled = false;
                    }

                }
            }
        }

        var inputQuantidade = document.querySelector('.quantidadeDoacao');
        inputQuantidade.addEventListener('focus', function() {
            document.querySelectorAll('.verificarDoacao').forEach(function(item) {
                item.classList.remove('selected');
                document.querySelector('.verificarDoacao').classList.remove('error');
            });
        });


        document.addEventListener("DOMContentLoaded", function() {

            var nomeInput = document.querySelector('.nomeInput');
            var nomeLabel = document.querySelector('.nomeLabel');
            var spanNomeCerto = document.querySelector('.nomeCerto');
            var spanNomeErrado = document.querySelector('.nomeErrado');
            var spanEmailCerto = document.querySelector('.emailCerto');
            var spanEmailErrado = document.querySelector('.emailErrado');
            var emailInput = document.querySelector('.emailInput');
            var emailLabel = document.querySelector('.emailLabel');

            if (button.classList.contains('disabled')) {
                button.disabled = true;
            } else {
                button.disabled = false;
            }

            nomeInput.addEventListener('blur', function() {
                var nomeValue = nomeInput.value.trim();
                var pattern =
                    /^[A-Za-zÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÄËÏÖÜäëïöüÇçÑñ']+([ -][A-Za-zÁÉÍÓÚáéíóúÀÈÌÒÙàèìòùÂÊÎÔÛâêîôûÄËÏÖÜäëïöüÇçÑñ']+)*$/;

                nomeLabel.classList.remove('disabled');
                if (!pattern.test(nomeValue)) {
                    button.classList.add('disabled');
                    button.disabled = true;
                    spanNomeErrado.classList.remove('disabled');
                    spanNomeCerto.classList.add('disabled');
                    nomeIsCorrect = false;
                } else {
                    spanNomeErrado.classList.add('disabled');
                    spanNomeCerto.classList.remove('disabled');
                    nomeIsCorrect = true;
                }
            });

            emailInput.addEventListener('blur', function() {
                var emailValue = emailInput.value.trim();

                var pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                if (!pattern.test(emailValue)) {
                    button.classList.add('disabled');
                    button.disabled = true;
                    emailLabel.classList.remove('disabled');
                    spanEmailErrado.classList.remove('disabled');
                    spanEmailCerto.classList.add('disabled');
                    emailIsCorrect = false;
                } else {
                    spanEmailErrado.classList.add('disabled');
                    spanEmailCerto.classList.remove('disabled');
                    emailIsCorrect = true;
                }
            });

        });
    </script>


@endsection
