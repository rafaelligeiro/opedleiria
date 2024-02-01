@extends('layout.admin') @section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">Editar Patrocinio</div>
        <div class="card-body">
            <form
                method="POST"
                action="{{ route('admin.patrocinios.update', $patrocinio) }}"
                class="form-group"
                enctype="multipart/form-data"
            >
                @csrf @method('PUT')
                @include('_admin.patrocinios.partials.add-edit')
                <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">
                        Guardar
                    </button>

                    <a
                        href="{{ route('admin.patrocinios.index') }}"
                        class="btn btn-default"
                        >Cancelar</a
                    >
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
