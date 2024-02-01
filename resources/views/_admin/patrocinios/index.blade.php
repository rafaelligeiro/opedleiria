@extends ("layout.admin") @section("content")
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Patrocinios</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a
                class="btn btn-primary"
                href="{{ route('admin.patrocinios.create') }}"
            >
                <i class="fas fa-plus"></i> Novo Patrocinio
            </a>
        </div>
        <div class="card-body">
            @if(count($patrocinios))
            <div class="table-responsive">
                <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                >
                    <thead>
                        <tr>
                            <th>Imagem</th>
                            <th>Nome Patrocinador</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patrocinios as $patrocinio)
                        <tr>
                            <td>
                                <img
                                    src="{{asset('storage/imagens_patrocinios/'.
                $patrocinio->imagem)}}"
                                    class="img-post"
                                    alt="Event image"
                                />
                            </td>
                            <td>{{$patrocinio->data}}</td>
                            <td>{{$patrocinio->nome_patrocinador}}</td>
                            <td nowrap>
                                <a
                                    class="btn btn-xs btn-primary btn-p"
                                    href="{{
                                        route(
                                            'admin.patrocinios.show',
                                            $patrocinio
                                        )
                                    }}"
                                    ><i class="fas fa-eye fa-xs"></i
                                ></a>
                                <a
                                    class="btn btn-xs btn-warning btn-p"
                                    href="{{
                                        route(
                                            'admin.patrocinios.edit',
                                            $patrocinio
                                        )
                                    }}"
                                    ><i class="fas fa-pen fa-xs"></i
                                ></a>
                                <form
                                    method="POST"
                                    action="{{
                                        route(
                                            'admin.patrocinios.destroy',
                                            $patrocinio
                                        )
                                    }}"
                                    role="form"
                                    class="inline"
                                    onsubmit="return confirm('Confirma que pretende eliminar este registo?');"
                                >
                                    @csrf @method('DELETE')
                                    <button
                                        type="submit"
                                        class="btn btn-xs btn-danger btn-p"
                                    >
                                        <i class="fas fa-trash fa-xs"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <h6>Não existem patrocinios registados</h6>
            @endif
        </div>
    </div>
</div>
@endsection @section("scripts")
<script>
    $("#dataTable").dataTable({
        destroy: true,
        order: [[1, "desc"]],
        columns: [
            { orderable: false },
            null,
            null,
            null,
            { orderable: false },
            { orderable: false },
        ],
    });
</script>
@endsection
