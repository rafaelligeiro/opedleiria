@extends('layout.admin') @section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">Informação do Patrocinio</div>
        <div class="card-body">
            <div>
                <img
                    src="{{asset('storage/imagens_patrocinios/'.$patrocinio->imagem)}}"
                    class="img-post"
                    alt="Event image"
                />
            </div>

            <div>
                <strong>Nome Patrocinador:</strong>
                {{ $patrocinio->nome_patrocinador }}
            </div>
            <br />
            <br />
        </div>
    </div>
</div>
@endsection
