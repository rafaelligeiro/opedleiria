<div class="form-group">
    <label for="inputTitle">Nome_patrocinador</label>
    <input
        type="text"
        class="form-control"
        name="nome_patrocinador"
        id="inputTitle"
        value="{{old('nome_patrocinador',$patrocinio->nome_patrocinador)}}"
    />
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input
        type="file"
        class="form-control-file"
        name="imagem"
        id="inputImage"
        aria-describedby="fileHelp"
    />
    <small id="fileHelp" class="form-text text-muted">
        Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não
        deve exceder 2MB.
    </small>
</div>
