<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - OPEDLeiria</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel=" stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <img src="{{ asset('img/logo.svg') }}" alt="" class="img-fluid">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
                    aria-expanded="true" aria-controls="collapseUsers">
                    <i class="fas fa-users"></i>
                    <span>Utilizadores</span>
                </a>
                <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="{{ route('admin.users.index') }}">Listagem</a>
                        <a class="collapse-item" href="{{ route('admin.users.create') }}">Novo Utilizador</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvents"
                    aria-expanded="true" aria-controls="collapseEvents">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Eventos</span>
                </a>
                <div id="collapseEvents" class="collapse" aria-labelledby="headingEvents" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Eventos:</h6>
                        <a class="collapse-item" href="{{route('admin.eventos.index')}}">Listagem</a>
                        <a class="collapse-item" href="{{route('admin.eventos.create')}}">Criar Novo</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNoticias"
                    aria-expanded="true" aria-controls="collapseNoticias">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Notícias</span>
                </a>
                <div id="collapseNoticias" class="collapse" aria-labelledby="headingNoticias" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Noticias:</h6>
                        <a class="collapse-item" href="{{route('admin.noticias.index')}}">Listagem</a>
                        <a class="collapse-item" href="{{route('admin.noticias.create')}}">Criar Nova</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDonation"
                    aria-expanded="true" aria-controls="collapseDonation">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Doações</span>
                </a>
                <div id="collapseDonation" class="collapse" aria-labelledby="headingDonation" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Doações:</h6>
                        <a class="collapse-item" href="{{route('admin.doacoes.index')}}">Listagem</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMensagem"
                    aria-expanded="true" aria-controls="collapseMensagem">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mensagens</span>
                </a>
                <div id="collapseMensagem" class="collapse" aria-labelledby="headingMensagem" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Mensagens:</h6>
                        <a class="collapse-item" href="{{route('admin.mensagens.index')}}">Listagem</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInscricao"
                    aria-expanded="true" aria-controls="collapseInscricao">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Inscrições</span>
                </a>
                <div id="collapseInscricao" class="collapse" aria-labelledby="headingInscricao" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Inscrições:</h6>
                        <a class="collapse-item" href="{{route('admin.inscricoes.index')}}">Listagem</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatrocinador"
                    aria-expanded="true" aria-controls="collapsePatrocinador">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Patrocinios</span>
                </a>
                <div id="collapsePatrocinador" class="collapse" aria-labelledby="headingPatrocinador" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Patrocinios:</h6>
                        <a class="collapse-item" href="{{route('admin.patrocinios.index')}}">Listagem</a>
                        <a class="collapse-item" href="{{route('admin.patrocinios.create')}}">Criar Novo</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-nav dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            @if (auth()->check())
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-200 small">
                                        {{ auth()->user()->name }}
                                    </span>
                                    @if (auth()->user()->photo == null)
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('img /default_user.jpg') }}">
                                    @else
                                        <img class="img-profile rounded-circle" alt="User Photo"
                                            src="{{ asset('storage/users_photos/' . auth()->user()->photo) }}">
                                    @endif
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item"
                                        href="{{ route('perfil', auth()->user()) }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            @else
                                <a href="{{ route('login') }}">
                                    <span
                                        class="mr-2 d-none d-lg-inline
                                text-gray-200 small">Login</span>
                                </a>
                            @endif
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    @if ($errors->any())
                        @include ('layout.partials.error')
                    @endif
                    @if (!empty(session('success')))
                        @include ('layout.partials.success')
                    @endif
                </div>

                <!-- Begin Page Content -->
                @yield('content')


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CTeSP Desenvolvimento Web e Multimédia</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terminar Sessão?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Clique no botão "Logout" se confirma que pretende terminar a sua sessão nesta
                    página.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <form action="{{route('logout')}}" method="post" class="inline">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('vendor/jquery/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    @yield('scripts')

</body>

</html>
