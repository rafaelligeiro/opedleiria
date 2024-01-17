<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<div class="form-group">
    <label for="inputFullname">Nome</label>
    <input type="text" class="form-control" name="name" id="inputFullname" value="{{ old('name', $user->name) }}" />
</div>

<div class="form-group">
    <label for="inputEmail">E-mail</label>
    <input type="text" class="form-control" name="email" id="inputEmail" value="{{ old('email', $user->email) }}" />
</div>

<div class="form-group">
    <label for="inputDataNasc">Data de Nascimento</label>
    <input type="text" class="form-control" name="data_nasc" id="inputDataNasc" value="{{ old('data_nasc', $user->data_nasc) }}" data-input>
</div>

<script>
    flatpickr("#inputDataNasc", {
        dateFormat: "Y-m-d",
        maxDate: "today",
    });
</script>


<div class="form-group">
    <label for="inputNif">NIF</label>
    <input type="text" class="form-control" name="nif" id="inputNif" value="{{ old('nif', $user->nif) }}" />
</div>

<div class="form-group">
    <label for="inputMorada">Morada</label>
    <textarea class="form-control" name="morada" id="inputMorada">{{ old('morada', $user->morada) }}</textarea>
</div>

<div class="form-group">
    <label for="inputCodPostal">Código-Postal</label>
    <input type="text" class="form-control" name="cod_postal" id="inputCodPostal" value="{{ old('cod_postal', $user->cod_postal) }}" />
</div>

<div class="form-group">
    <label for="inputTelefone">Telefone</label>
    <input type="text" class="form-control" name="telefone" id="inputTelefone" value="{{ old('telefone', $user->telefone) }}" />
</div>

<div class="form-group">
    <label for="inputGenero">Género</label>
    <select name="genero" id="inputGenero" class="form-control">
        <option value="M" {{ old('genero', $user->genero) == 'M' ? 'selected' : '' }}>Masculino</option>
        <option value="F" {{ old('genero', $user->genero) == 'F' ? 'selected' : '' }}>Feminino</option>
    </select>
</div>

<div class="form-group">
    <label for="inputPhoto">Foto</label>
    <input type="file" class="form-control-file" name="photo" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">Por favor, carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB.</small>
</div>

<div class="form-group">
    <label for="inputRole">Privilégios</label>
    <select name="role" id="inputRole" class="form-control">
        <option value="A" {{ old('role', $user->role) == 'A' ? 'selected' : '' }}>Administrador</option>
        <option value="F" {{ old('role', $user->role) == 'F' ? 'selected' : '' }}>Funcionário</option>
        <option value="M" {{ old('role', $user->role) == 'M' ? 'selected' : '' }}>Membro</option>
    </select>
</div>

