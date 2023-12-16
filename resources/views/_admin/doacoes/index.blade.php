@extends ("layout.admin")

@section("content")
<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Doações</h1>

  <div class="card shadow mb-4">
    <div class="card-body">
      @if(count($doacoes))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Quantidade</th>
              <th>Tipo de Pagamento</th>
              <th>Nome</th>
              <th>Data</th>
              <th>Descrição</th>
              <th>E-mail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($doacoes as $doacao)
            <tr>
              <td>{{$doacao->quantidade}}</td>
              <td>{{$doacao->tipo_pagamento}}</td>
              <td>{{$doacao->nome}}</td>
              <td>{{$doacao->data}}</td>
              <td>{{$doacao->descricao}}</td>
              <td>{{$doacao->email}}</td>
              <td nowrap>
                <a class="btn btn-xs btn-primary btn-p" href="{{route('admin.doacoes.show',$doacao)}}"><i class="fas fa-eye fa-xs"></i></a>
                <form method="POST" action="{{route('admin.doacoes.destroy',$doacao)}}" role="form" class="inline"
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
      <h6>Não existem doações registados</h6>
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
