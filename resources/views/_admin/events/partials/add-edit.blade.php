<div class="form-group">
    <label for="inputTitle">Titulo</label>
    <input type="text" class="form-control" name="title"
    id="inputTitle" value="{{old('titulo',$evento->titulo)}}" />
</div>
<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="datetime_local" class="form-control"
    name="date" id="inputDate" value="{{old('data',$evento->data??date("Y-m-d H:i:s"))}}"/>
</div>
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control"
    name="descricao" id="inputDescription">{{old('descricao',$evento->descricao)}}</textarea>
</div>
<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputInscricao">Inscrições</label>
    <select name="inscricao_id" id="inputInscricao" class="form-control">
        @foreach($inscricoes as $inscricao)
        <option value="{{$inscricao->id}}"
            {{old('inscricao_id',$evento->inscricao_id) == $inscricao->id?'selected':''}}>
            {{$inscricao->name}}
        </option>
        @endforeach
    </select>
</div>
