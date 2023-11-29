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
                <div><strong>Data Nascimento:</strong> {{ $user->data_nasc }} </div>
                {{-- Acabar Tabela --}}

            </div>
        </div>
    </div>
@endsection
