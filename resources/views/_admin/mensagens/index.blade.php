@extends ("layout.admin")

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Mensagens</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                @if (count($mensagens))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Mensagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mensagens as $mensagem)
                                    <tr>
                                        <td>{{ $mensagem->nome }}</td>
                                        <td>{{ $mensagem->email }}</td>
                                        <td>{{ $mensagem->mensagem }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('admin.mensagens.show', $mensagem) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <form method="POST" action="{{ route('admin.mensagens.destroy', $mensagem) }}"
                                                role="form" class="inline"
                                                onsubmit="return confirm('Confirma que pretende eliminar este registo?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                        class="fas fa-trash fa-xs"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @else
                    <h6>Não existem Mensagens registadas</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [1, 'desc']
            ],
            "columns": [{
                    "orderable": false
                },
                null,
                null,
                null,
                {
                    "orderable": false
                },
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
