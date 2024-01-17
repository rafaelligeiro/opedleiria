@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do Utilizador
            </div>
            <div class="card-body">

                @if ($user->photo)
                    <div>
                        <img alt="User photo" src="{{ asset('storage/users_photos/' . $user->photo) }}">
                    </div>
                @endif

                <div><strong>Nome:</strong> {{ $user->name }} </div>
                <div><strong>E-mail:</strong> {{ $user->email }} </div>
                <div><strong>Morada:</strong> {{ $user->morada }} </div>
                <div><strong>Data de Nascimento:</strong> {{ $user->data_nasc ? \Carbon\Carbon::parse($user->data_nasc)->format('d/m/Y') : '' }} </div>
                <div><strong>Género:</strong> {{ $user->genero }} </div>
                <div><strong>Código Postal:</strong> {{ $user->cod_postal }} </div>
                <div><strong>NIF:</strong> {{ $user->nif }} </div>
                <div><strong>Telefone:</strong> {{ $user->telefone }} </div>
                <div><strong>Role:</strong> {{ $user->role }} </div>

            </div>
        </div>
    </div>
@endsection

