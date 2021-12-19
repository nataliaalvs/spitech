<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfil</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('welcome')}}">Spitech</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            @yield('search-bar')

            <ul class="navbar-nav ms-auto ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            @csrf
                         </form>
                         <li>
                            <div class="dropdown-item small">Logado(a) como {{Auth::user()->name}}</div>

                         </li>
                        <li><a class="dropdown-item" onclick="document.getElementById('logout').submit(); return false;" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{route('welcome')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-left"></i></div>
                                Página Inicial
                            </a>
                            <div class="sb-sidenav-menu-heading">Tools</div>
                            <a class="nav-link collapsed" href="{{route('course.create')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus-square"></i></div>
                                Novo curso
                            </a> 
                            <a class="nav-link collapsed" href="{{route('post.create')}}">
                                <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>
                                Novo post
                            </a> 
                            <a class="nav-link" href="{{route('course.index')}}">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
                                Todos os cursos
                            </a>
                            <a class="nav-link" href="{{route('post.index')}}">
                                <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
                                Todos os posts
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        @yield('main')
                        @yield('formulario')                        
                    </div>
                </main>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
