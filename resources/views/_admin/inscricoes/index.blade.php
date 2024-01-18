@extends ("layout.admin")

@section("content")
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Inscrições</h1>

  <div class="card shadow mb-4">
    <div class="card-body">
      @if(count($inscricoes))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Quantidade</th>
              <th>Evento</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($inscricoes as $inscricao)
            <tr>
              <td>{{$inscricao->nome}}</td>
              <td>{{$inscricao->telefone}}</td>
              <td>{{$inscricao->quantidade}}</td>
              <td>{{$inscricao->evento->titulo}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.inscricoes.show',$inscricao)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.inscricoes.edit',$inscricao)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.inscricoes.destroy',$inscricao)}}" role="form" class="inline"
                onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      @else
      <h6>Não existem inscricões registadas</h6>
      @endif
    </div>
  </div>
</div>
@endsection

@section("scripts")
<script>
  $('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 1, 'desc' ]],
	"columns": [
    { "orderable": false },
    null,
	null,
    null,
    { "orderable": false },
	{ "orderable": false }
  ]
} );

</script>
@endsection
