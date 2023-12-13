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
                    <a class="nav-link" aria-disabled="true">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true">Contactos</a>
                </li>
            </ul>
            <form id="pesquisa" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar.." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
  </nav>
