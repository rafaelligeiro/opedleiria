<div class="form-group">
    <label for="inputTitle">Título</label>
    <input type="text" class="form-control" name="titulo" id="inputTitle" value="{{ old('titulo', $noticia->titulo) }}" />
</div>

<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select class="form-control" name="categoria" id="inputCategory">
        @foreach(['Desporto', 'Social', 'Eventos', 'Comunidade', 'Novidades', 'Histórias'] as $categoria)
            <option value="{{ $categoria }}" {{ old('categoria', $noticia->categoria) === $categoria ? 'selected' : '' }}>
                {{ $categoria }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescription">{{ old('descricao', $noticia->descricao) }}</textarea>
</div>

<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="datetime-local" class="form-control" name="data" id="inputDate" value="{{ old('data', $noticia->data ? $noticia->data->format('Y-m-d\TH:i:s') : \Carbon\Carbon::now()->format('Y-m-d\TH:i:s')) }}" />
</div>


