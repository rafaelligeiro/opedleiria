<nav id="navbarAll" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a><img class="logo" src="{{ asset('img/logo.svg') }}" alt="logótipo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCompleta" class="collapse navbar-collapse" id="navbarScroll">
            <ul id="links" class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('eventos')}}">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('noticias')}}">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('message')}}">Contactos</a>
                </li>
            </ul>
            @if (Auth::check())
            <a href="{{ asset('MyDonations') }}"><button style="background-color:#15B7B9;  border:0;" type="button" class="btn btn-primary">Doações</button></a>
            <form action="{{route('logout')}}" method="post" class="inline">
                @csrf
                <a><button style="margin-left:20px; background-color:#15B7B9; border:0;" type="submit" class="btn btn-primary">Logout</button></a>
            </form>
            @else
            <a href="{{ route('login') }}"><button style="background-color:#15B7B9;  border:0;" type="button" class="btn btn-primary">Login</button></a>
            <a href="{{ route('register') }}"><button style="margin-left:20px; background-color:#15B7B9;  border:0;" type="button" class="btn btn-primary">Registar</button></a>
            @endif
        </div>
    </div>
  </nav>



