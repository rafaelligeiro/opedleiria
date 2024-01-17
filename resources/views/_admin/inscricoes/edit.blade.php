@extends('layout.admin')

@section('content')
<div class="container-fluid">

     <div class="card shadow mb-4">
        <div class="card-header py-3">
			Editar Inscricão
        </div>
        <div class="card-body">

			<form method="POST" action="{{route('admin.inscricoes.update',$inscricao)}}" class="form-group" enctype="multipart/form-data">
				@csrf
                @method('PUT')
                @include('_admin.inscricoes.partials.add-edit')
				<div class="form-group">
					<button type="submit" class="btn btn-success" name="ok">Guardar</button>

					<a href="{{route('admin.inscricoes.index')}}" class="btn btn-default">Cancelar</a>
				</div>

			</form>
            @if (count($evento->inscricoes))
            <div >
                <h3>Inscrições</h3>
                <ul>
                    @foreach($evento->inscricoes as $inscricao)
                    <li>
                        {{$inscricao->nome}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
		</div>
	</div>
</div>
@endsection
