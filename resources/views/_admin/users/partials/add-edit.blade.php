
<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{old('name',$user->name)}}" />
</div>


<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputRole">Previlégios</label>
    <select name="role" id="inputRole" class="form-control">
        <option value="A" {{old('role',$user->role)=='A'?'selected':''}}>Administrador</option>
        <option value="M" {{old('role',$user->role)=='M'?'selected':''}}>Membro</option>
        <option value="F" {{old('role',$user->role)=='F'?'selected':''}}>Funcionário</option>
    </select>
</div>

