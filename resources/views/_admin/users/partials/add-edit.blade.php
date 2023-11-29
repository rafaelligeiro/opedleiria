
<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>
<div class="form-group">
    <label for="inputCP">Codigo-Postal</label>
    <input type="text" class="form-control" name="cod_postal" id="inputCP" value="{{old('cod_postal',$user->cod_postal)}}" />
</div>
<div class="form-group">
    <label for="inputM">Morada</label>
    <textarea type="text" class="form-control" name="morada" id="inputM">{{old('morada',$user->morada)}}</textarea>
</div>

{{-- Acabar Tabela --}}

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="photo" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>

<div class="form-group">
    <label for="inputRole">Previlégios</label>
    <select name="role" id="inputRole" class="form-control">
        <option value="A" {{old('role',$user->role)=='A'?'selected':''}}>Administrador</option>
        <option value="M" {{old('role',$user->role)=='M'?'selected':''}}>Membro</option>
        <option value="F" {{old('role',$user->role)=='F'?'selected':''}}>Funcionário</option>
    </select>
</div>

