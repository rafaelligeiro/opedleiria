@extends ('layout.master')

@section('title', 'LogIn OPEDLeiria')

@section('styles')
<link rel="stylesheet" href="{{asset('css/styles_login.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
  @vite('resources/css/app.css')

    <!--
        opcional
        <link rel="stylesheet" href="style_message.css">

    -->
@endsection

@section('content')
    <div>
        <h1 class="text-4xl font-bold underline text-underline text-red-600">
            Hello world!
          </h1>
    </div>
@endsection

@section('scripts')
    <!-- opcional-->
@endsection
