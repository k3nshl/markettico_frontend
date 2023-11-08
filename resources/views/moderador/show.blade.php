@extends('plantilla')

@section('gestion_nombre', 'Articulo')

@section('contenido')



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
                                            <h5 class="mb-0 text-dark">Colección <span>X</span>
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h5 class="m-0"></h5>
                                            </div>
                                            <div class="me-2">
                                                <a href="{{ route('moderador.create') }}" class="btn btn-info text-white"
                                                    style="background-color: #04D9B2; border-color: #04D9D9;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar artículo">Agregar artículo</a>
                                            </div>

                                        </div>
                                    </div>
                                    <hr />

                                    <div class="text-center">
                                        <h6 class="mb-0 text-dark">Lista de artículos de Colección <span>X</span></h6>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table id="tablaArticulo"A class="table table-bordered">
                                            <thead class="theadUsuariosAdministradores">
                                                <tr>
                                                    <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Nombre de Colección</th>
                                                    <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                
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
                                                            <a href="{{ route('moderador.edit', $id) }}" class="btn btn-warning btn-sm"
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
