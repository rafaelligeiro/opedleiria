@extends('layout.master')

@section('title', 'As minhas Doações')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/MyDonationsEdit.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="all">
        <div class="box">
            <form action="/MyDonationsEdit" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}">
                <span class="text-center">Mudar o Nome</span>
                <div class="input-container">
                    <input type="text" name="nome" required="" value="{{$data['nome']}}"/>
                    <label>Novo Nome</label>
                </div>
                <button type="submit" class="btn">Alterar nome</button>
            </form>
        </div>
    </div>

    

@endsection

@section('scripts')



@endsection
