@extends('layout.master')

@section('title', 'As minhas Doações')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/MyDonations.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="card-body">
    @if(isset($doacoes) && count($doacoes) > 0)
        <div class="tabelaTop">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Quantidade</th>
                        <th>Tipo de Pagamento</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($doacoes as $doacao)
                        <tr>
                            <form id="formulario" action="/MyDonationEdit" method="POST">
                                <td>{{ $doacao->quantidade }}€</td>
                                <td>{{ $doacao->tipo_pagamento }}</td>
                                <td><input disabled id="nome" class="nome" type="text" value="{{ $doacao->nome }}" data-original-value="{{ $doacao->nome }}"></td>
                                <td>{{ $doacao->data }}</td>
                                <td>{{ $doacao->descricao }}</td>
                                <td>{{ $doacao->email }}</td>
                                <td class="actiontd">
                                    <a href="#" onclick="openEditForm({{ $doacao->id }})">
                                        <div id="actionbtnOpen" class="actionbtn"><i class="fas fa-pencil-alt"></i></div>
                                    </a>
                                </td>

                            </form>
                        </tr>
                    @endforeach
                </tbody>
                <div class="editForm" id="editForm" >
    <div class="all">
        <div class="box">
            <form action="/MyDonationsEdit" method="POST">
                @csrf
                <input type="hidden" name="id" value="">
                <span class="text-center">Mudar o Nome</span>
                <div class="input-container">
                    <input type="text" name="nome" required="">
                    <label>Novo Nome</label>
                </div>
                <button type="submit" class="btn">Alterar nome</button>
            </form>
        </div>
    </div>
</div>
            </table>
        </div>
    @else
    <div class="tabelaTop_no_Donations">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        
                            <div class="no_Donations">
                                <h1 class="no_Donations_message">Ainda não realizou nenhuma doação.</h1>
                                <i style="color:rgb(2, 98, 100);" class="far fa-sad-tear fa-3x"></i>
                            </div> 
                        
                    </tr>
                </tbody>
            </table>
        </div>    
    @endif


</div>


<style>
    .editForm {
        position:absolute;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        display: none;
        width: fit-content;
        left: 35%;
        margin:40px;
    }

    .editForm .input-container input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .editForm .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

</style>

@endsection

@section('scripts')

    <script>
        function openEditForm(id) {
            // Obter o formulário de edição
            var editForm = document.getElementById('editForm');

            // Definir o valor do campo de ID do formulário de edição
            editForm.querySelector('input[name="id"]').value = id;

            // Exibir o formulário de edição
            editForm.style.display = 'block';
        }
    </script>

@endsection

