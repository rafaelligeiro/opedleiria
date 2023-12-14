<div class="form-group">
    <label for="inputTitle">Titulo</label>
    <input type="text" class="form-control" name="titulo"
    id="inputTitle" value="{{old('titulo',$evento->titulo)}}" />
</div>
<div class="form-group">
    <label for="inputDate">Data</label>
    <input type="datetime_local" class="form-control"
    name="data" id="inputDate" value="{{old('data',$evento->data??date("Y-m-d H:i:s"))}}"/>
</div>
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control"
    name="descricao" id="inputDescription">{{old('descricao',$evento->descricao)}}</textarea>
</div>
<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>


