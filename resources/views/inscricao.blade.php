@extends ('layout.master')

@section('title', 'Inscricão')

@section('styles')
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/_inscricao.css')}}">
  <!--
        opcional
        <link rel="stylesheet" href="style_message.css">

    -->
@endsection

@section('content')
<div class="container">
    <form  method="POST" action="{{route("inscricoes.store",$evento)}}">
        @csrf
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" name="nome" placeholder="Escreva o seu nome">
        </div>
        <div class="form-group">
          <label for="Telefone">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
        </div>
        <div class="form-group">
            <select class="custom-select" name="quantidade">
                <option selected>Quantas pessoas vai inscrever</option>
                <option value="1">Uma</option>
                <option value="2">Duas</option>
                <option value="3">Três</option>
                <option value="4">Quatro</option>
                <option value="5">Cinco</option>
              </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Inscrever</button>
      </form>

</div>

@endsection

@section('scripts')
    <!-- opcional-->
@endsection
