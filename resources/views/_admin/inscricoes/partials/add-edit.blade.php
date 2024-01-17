<div class="form-group">
    <label for="inputTitle">Nome</label>
    <input type="text" class="form-control" name="nome"
    id="inputTitle" value="{{old('nome',$inscricao->nome)}}" />
</div>
<div class="form-group">
    <label for="inputDate">Telefone</label>
    <input type="datetime_local" class="form-control"
    name="telefone" id="inputDate" value="{{old('telefone',$inscricao->telefone)}}"/>
</div>
<div class="form-group">
    <label for="inputDescription">Quantidade</label>
    <textarea class="form-control"
    name="quantidade" id="inputDescription">{{old('quantidade',$inscricao->quantidade)}}</textarea>
</div>



