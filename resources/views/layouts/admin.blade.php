<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SISTEMA DE CATALOGACIÓN PUIC - UNAM</title>
 <!-- Bootstrap-->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <!-- Custom styles for this template-->
 <link href="{{asset('css/sb-admin.min.css')}}" rel="stylesheet">
 <!-- Custom fonts for this template-->
 <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
 <link href="{{asset('css/estiloLibre.css')}}" rel="stylesheet" type="text/css">
 <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/">
            <img length="55px" width="40px" src="{{asset('imgs/logo_UNAM.png')}}"></img>PUIC-UNAM Catalogacíon 
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Documento">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Documento" data-parent="#exampleAccordion">
                                <i class="fa fa-fw fa-file"></i>
                                <span class="nav-link-text">Documento</span>
                            </a>
                            <ul class="sidenav-second-level collapse" id="Documento">
                                <li>
                                    <a href="/documento">Ver Documento</a>
                                </li>
                                <li>
                                    <a href="/documento/create">Crear Documento</a>
                                </li>
                            </ul>
                        </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Autor">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Autor" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Autor</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Autor">
                        <li>
                            <a href="/autor">Ver Autores</a>
                        </li>
                        <li>
                            <a href="/autor/create">Crear Autor</a>
                        </li>
                    </ul>
                </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Editor">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Editor" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-male"></i>
                        <span class="nav-link-text">Editor</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Editor">
                        <li>
                            <a href="/editor">Ver Editores</a>
                        </li>
                        <li>
                            <a href="/editor/create">Crear Editor</a>
                        </li>
                    </ul>
                </li>


                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Proyecto">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Proyecto" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-product-hunt"></i>
                        <span class="nav-link-text">Proyecto</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Proyecto">
                        <li>
                            <a href="/">Ver Proyecto</a>
                        </li>
                        <li>
                            <a href="/">Crear Projecto</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Institucion">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Institucion" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-italic"></i>
                        <span class="nav-link-text">Institución</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Institucion">
                        <li>
                            <a href="/eje">Ver Instituciones</a>
                        </li>
                        <li>
                            <a href="/eje/create">Crear Institución</a>
                        </li>
                    </ul>
                </li>
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="persona">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#persona" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-thumbs-up"></i>
                        <span class="nav-link-text">Persona / Actor Social</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="persona">
                        <li>
                            <a href="/eje">Ver Personas/Actores Sociales</a>
                        </li>
                        <li>
                            <a href="/eje/create">Crear Persona</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tema">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Tema" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-book"></i>
                        <span class="nav-link-text">Tema</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Tema">
                        <li>
                            <a href="/tema">Ver Temas</a>
                        </li>
                        <li>
                            <a href="/tema/create">Crear Tema</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="subtema">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#subtema" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-bookmark"></i>
                        <span class="nav-link-text">Subtema</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="subtema">
                        <li>
                            <a href="/tema">Ver Subtemas</a>
                        </li>
                        <li>
                            <a href="/tema/create">Crear Subtema</a>
                        </li>
                    </ul>
                </li>

            
            </ul>


           
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <!--menu de arriba-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope"></i>
                        <span class="d-lg-none">Messages
                        <span class="badge badge-pill badge-primary">12 New</span>
                        </span>
                        <span class="indicator text-primary d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                        <span class="badge badge-pill badge-warning">6 New</span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-danger">
                                <strong>
                                <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all alerts</a>
                    </div>
                </li>
              <!--  <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for...">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
            -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-secondary" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @else
                <button class="btn btn-success">
                    {{ Auth::user()->name }}
                </button>    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/logout')}}">
                            <i class="fa fa-fw fa-sign-out"></i>Salir
                        </a>
                    </li>
                @endguest
                
                
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!--Contenido-->
            <div class="container">
                <br><br>
                @yield('contenido')
            </div>
            <!--Fin Contenido-->
        </div>
    </div>
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © PUIC - UNAM 2018</small>
            </div>
        </div>
    </footer>
    <!-- jQuery-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/sb-admin.min.js')}}"></script>

    <!--STACK PERMITE UTILIZAR SCRIPTS PROPIOS-->


</body>


</body>
</html>