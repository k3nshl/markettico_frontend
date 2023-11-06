@extends('plantilla')

@section('gestion_nombre', 'Articulo')

@section('contenido')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Estilos de Bootstrap 5 -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <!--favicon-->
    <link rel="icon" href="assets/images/logo-markettico-icono.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />

    <!--plugins-->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />


    <title>MarketTico Admin</title>
</head>

    <section class="content">

        <div class="row">
            <div class="col-xl-7 mx-auto">
                <div class="card border-4 border-info mt-5">
                    <div class="card-body">

                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="bx bx-library me-1 font-22 text-info"></i>
                                            </div>
                                            <h5 class="mb-0 text-info" title="Agregar Usuario">Colección <span>X</span>
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h5 class="m-0"></h5>
                                            </div>
                                            <div class="me-2">
                                                <a href="" class="btn btn-info text-white"
                                                    style="background-color: #04D9B2; border-color: #04D9D9;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar artículo">Agregar artículo</a>
                                            </div>

                                        </div>
                                    </div>
                                    <hr />

                                    <div class="text-center">
                                        <h6 class="mb-0 text-info">Lista de artículos de Colección <span>X</span></h6>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table id="tablaArticulo"A class="table table-bordered">
                                            <thead class="theadUsuariosAdministradores">
                                                <tr>
                                                    <th>Nombre de Colección</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>EjemploUsuario</td>
                                                    <td>
                                                        <div class="text-center">

                                                            <!-- Botón visualizar -->

                                                            <a href="" class="btn btn-primary btn-sm"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Visualizar Artículo">
                                                                <div class="text-center">
                                                                    <i class="lni lni-eye"
                                                                        style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                </div>
                                                            </a>


                                                            <!-- Botón de editar -->
                                                            <a href="" class="btn btn-warning btn-sm"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Editar Artículo">
                                                                <div class="text-center">
                                                                    <i class="lni lni-pencil-alt"
                                                                        style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                </div>
                                                            </a>


                                                            <!-- Botón eliminar -->
                                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#eliminarUsuarioModal">
                                                                <i class="lni lni-trash"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </button>
                                                        </div>

                                                        <!-- Modal eliminar -->
                                                        <div class="modal fade" id="eliminarUsuarioModal" tabindex="-1"
                                                            aria-labelledby="eliminarUsuarioModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="eliminarUsuarioM mx-2odalLabel">
                                                                            Confirmar
                                                                            eliminación</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ¿Estás seguro de que deseas eliminar este
                                                                        artículo
                                                                        de colección?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-danger"
                                                                            data-bs-dismiss="modal" data-bs-toggle="modal"
                                                                            data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
