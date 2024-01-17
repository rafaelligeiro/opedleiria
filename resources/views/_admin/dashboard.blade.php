@extends('layout.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_users }} </h1>
                        <h3 style="display:inline;"> Utilizadores </h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_eventos }} </h1>
                        <h3 style="display:inline;"> Eventos </h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_doacoes }} </h1>
                        <h3 style="display:inline;"> Doacões </h3>
                    </div>
                </div>
            </div>
            <div style="margin-top:20px" class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_mensagens }} </h1>
                        <h3 style="display:inline;"> Mensagens </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
