@extends ("layout.admin")

@section("content")
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Noticias</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('admin.noticias.create')}}">
        <i class="fas fa-plus"></i> Nova Noticia
      </a>
    </div>
    <div class="card-body">
      @if(count($noticias))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Categoria</th>
              <th>Descrição</th>
              <th>Data</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($noticias as $noticia)
            <tr>
              <td>{{$noticia->titulo}}</td>
              <td>{{$noticia->categoria}}</td>
              <td>{{$noticia->descricao}}</td>
              <td>{{$noticia->data}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.noticias.show',$noticia)}}"><i class="fas fa-eye fa-xs"></i></a>
                <a class="btn btn-xs btn-warning btn-p" href="{{route('admin.noticias.edit',$noticia)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('admin.noticias.destroy',$noticia)}}" role="form" class="inline"
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
      <h6>Não existem noticias registadas</h6>
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
