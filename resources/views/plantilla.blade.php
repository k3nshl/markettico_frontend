<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Estilos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}">


    <!--favicon-->
    <link rel="stylesheet" href="{{ asset('../assets/images/logo-markettico-icono.png') }}">
    <!--plugins-->
    <link rel="stylesheet" href="{{ asset('../assets/plugins/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/plugins/metismenu/css/metisMenu.min.css') }}">
    <!-- loader-->
    <link rel="stylesheet" href="{{ asset('../assets/css/pace.min.css') }}">
    <script src="{{ asset('../assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/css/icons.css') }}">
    <!--Estilos propios-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}">

    <!--plugins-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}">


    <title>MarketTico Admin</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('../assets/images/logo-markettico-icono.png') }}" class="logo-icon"
                        alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">MarketTico</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="menu-label">Administrativo</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='lni lni-crown'></i>
                        </div>
                        <div class="menu-title">Superadmin</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('usuariosAdministrativos.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i>Usuarios Administrativos</a>
                        </li>
                        <li> <a href="{{ route('estados.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i>Gestionar Estados/Roles</a>
                        </li>
                        <li> <a href="{{ route('historiales.index') }}"><i class="bx bx-right-arrow-alt"></i>Visualizar
                                Historiales</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-bot"></i>
                        </div>
                        <div class="menu-title">Administrador</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('usuariosAdministrativos.index') }}"><i
                                    class="bx bx-right-arrow-alt"></i>Gestionar usuarios</a>
                        </li>
                        <li> <a href="{{ route('solicitudes-vendedores.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Vendedores</a>
                        </li>
                        <li> <a href="{{ route('estadisticas.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Estadisticas</a>

                        </li>
                        <li> <a href="{{ route('notificaciones') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Notificaciones</a>
                        </li>
                        <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Plantillas
                                para Correos</a>
                            <ul>
                                <li> <a href="{{ route('correoAutenticacion') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Correo Autenticacion</a>
                                </li>
                                <li> <a href="{{ route('correoCambiosPoliticas') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Correo cambios en politicas</a>
                                </li>
                                <li> <a href="{{ route('correoExpiracionSuspension') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Correo expiracion y suspencion</a>
                                </li>
                                <li> <a href="{{ route('correoRegistro') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Correo registro</a>
                                </li>
                                <li> <a href="{{ route('correoSolicitud') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Correo solicitud</a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-bot"></i>
                        </div>
                        <div class="menu-title">Moderador</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('paginasInformacion.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Paginas</a>
                        </li>
                        <li> <a href="{{ route('planes.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Planes</a>
                        </li>
                        <li> <a href="{{ route('categorias.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Categorias</a>
                        </li>

                        <li> <a href="{{ route('solicitudes-productos.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Productos</a>
                        </li>
                        <li> <a href="{{ route('moderarContenido.index') }}"><i class="bx bx-right-arrow-alt"></i>Gestionar
                                Contenido</a>

                    </ul>
                </li>



            </ul>
            <!--end navigation-->
        </div>

        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control"
                                placeholder="Ingrese para buscar">
                            <span class="position-absolute top-50 search-show translate-middle-y"><i
                                    class='bx bx-search'></i></span>
                            <span class="position-absolute top-50 search-close translate-middle-y"><i
                                    class='bx bx-x'></i></span>
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notificaciones</p>
                                            <p class="msg-header-clear ms-auto">Marcar como leidas</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i
                                                        class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span
                                                            class="msg-time float-end">14 Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">Ver todas las notificaciones</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">8</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Mensajes</p>
                                            <p class="msg-header-clear ms-auto">Marcar como leídos</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="../assets/images/avatars/avatar-1.png"
                                                        class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span
                                                            class="msg-time float-end">5 sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">Ver todos los mensajes</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('../assets/images/avatars/avatar-2.png') }}" class="user-img"
                                alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Delia Smith</p>
                                <p class="designattion mb-0">Project Manager</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('perfil.show', ['id' => 1]) }}">
                                    <i class="bx bx-user"></i><span>Perfil</span>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-cog"></i><span>Configuracion</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-home-circle'></i><span>Dashboard</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-log-out-circle'></i><span>Cerrar sesion</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->


        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Gestión</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('gestion_nombre')</li>
                            </ol>
                        </nav>
                    </div>

                </div>
                <!--end breadcrumb-->


                <!--INICIO SECCIONES-->
                <section class="content">
                    <div class="container-fluid">
                        <!--Inicio yield de forms para superadmin-->
                        @yield('contenido')
                        <!--fin de forms para superadmin-->
                    </div>
                </section>
                <!--FIN SECCIONES-->




                <!--end row-->
            </div>
        </div>
        <!--end page wrapper -->



        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'
                style="background-color: 04D9D9; color: #f2f2f2"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. Todos los derechos reservados Markettico.</p>
        </footer>
    </div>
    <!--end wrapper-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>


    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
    <!--Inicio datatables-->
    <script>
        $(document).ready(function() {
            $('#tablaUsuariosAdmin').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaRoles').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaEstados').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaSolicitudEspera').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaSolicitudAprobados').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaSolicitudRechazados').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tablaCorreos').DataTable();
        });

        $(document).ready(function() {
            $('#tablaAnuncios').DataTable();
        });

        $(document).ready(function() {
            $('#tablaAlertas').DataTable();
        });
    </script>
    <!--Fin datatables-->


    <!-- Inicio datatable moderador -->

    <script>
        $(document).ready(function() {
            $('#tablaArticulo').DataTable();
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#tablaColeccion').DataTable();
        });
    </script>



    <!-- Fin de datatable moderador -->



    <!-- Inicio datatable planes -->

    <script>
        $(document).ready(function() {
            $('#tablaPlanes').DataTable();
        });
    </script>

    <!-- Fin de datatable planes -->




    <!-- Inicio de las tablas de historial -->
    <script>
        $(document).ready(function() {
            $('#tablaHistorialRoles').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaHistorialGestionCuentas').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaHistorialAcciones').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaHistorialSuspenciones').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaHistorialInicioSesion').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaHistorialPaginas').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaProductosEspera').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaProductosAprobados').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#tablaProductosRechazados').DataTable();
        });
    </script>


    <!-- Fin de las tablas de historial -->


    <script>
        $(document).ready(function() {
            var table = $('#').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });
        });
    </script>

    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>



    <script>
        $(function() {
            $('[data-bs-toggle="popover"]').popover();
            $('[data-bs-toggle="tooltip"]').tooltip();
        })
    </script>

    <script src="https://cdn.tiny.cloud/1/ridcfj86k1i5y88uy1n1vznbruw2zv4icacguzwpjgeoum26/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>



    <script>
        $(document).ready(function() {
            $("#portada").change(function() {
                readURL(this, "#imagen-preview-portada");
            });

            $("#otroInput").change(function() {
                readURL(this, "#imagen-preview-otroInput");
            });
        });

        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(previewId).attr('src', e.target.result);
                    $(previewId).show();
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

{{-- Para limpiar el campo de verificar contra --}}
    <script>
        $('#VerificarContra').on('hidden.bs.modal', function() {
            $('#password').val('');
        });
    </script>


</body>

</html>
