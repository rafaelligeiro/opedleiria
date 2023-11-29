@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Editar Utilizador
            </div>
            <div class="card-body">

                <form method="POST" action="{{ route('admin.users.update', $user) }}" class="form-group"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($user->photo)
                        <img src="{{ asset('storage/users_photos/' . $user->photo) }}" alt="User photo" width="200" class="mt-1 mb-3">
                    @endif
                    @include('_admin.users.partials.add-edit')
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="ok">Guardar</button>

                        <a href="{{ route('admin.users.index') }}" class="btn btn-default">Cancelar</a>

                    </div>

                </form>
                @if ($user->photo)
                    <form method="POST" action="{{ route('admin.users.destroyPhoto', $user) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Apagar foto</button>
                    </form>
                @endif

                <a href="{{ route('admin.users.sendActivationEmail', $user) }}" class="btn btn-primary">Enviar
                    email de ativação</a>
            </div>
        </div>
    </div>
@endsection
