@extends('plantilla')


@section('gestion_nombre', 'Páginas estáticas')

@section('contenido')
    <section class="content">

        <div class="container">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                
                <div class="card-body">
                    <div class="row">


                        <div class="col-md-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="text-dark"><i class="bx bx-notepad me-2 font-22  text-info"></i>Agregar Colección
                                </h5>
                            </div>

                            <hr>
                            <form>
                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Nombre de Colección:</label>
                                    <input type="text" class="form-control" id="titulo"
                                        placeholder="Nombre de Colección">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción:</label>
                                    <input type="text" class="form-control" id="descripcion" placeholder="Descripción">
                                </div>
                                <div class="mb-3">
                                    <label for="icono" class="form-label">Icono:</label>
                                    <input type="file" class="form-control" id="icono" name="icono">
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="button" class="btn btn-info"
                                        style="background-color: #04D9D9; border-color: #04D9D9; color: #F2F2F2;">
                                        <i class="bx bx-save" style="color: #F2F2F2;"></i> Guardar
                                    </button>
                                </div>
                            </form>
                        </div>



                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-end mb-3">
                                <h5 class="text-dark"><i class="bx bx-notepad me-2 font-22 text-info"></i>Lista de
                                    Colecciones</h5>

                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="tablaColeccion" class="table table-bordered">
                                    <thead class="theadUsuariosAdministradores">
                                        <tr>

                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                ID</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Nombre</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Descripción</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Politicas</td>
                                            <td>Descripcion aqui</td>
                                            <td>
                                                <div class="text-center">

                                                    <a href="{{ route('moderador.show', $id) }}"
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Visualizar Artículo">
                                                        <div class="text-center">
                                                            <i class="lni lni-eye"
                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </a>

                                                    <!-- Botón de editar con modal -->
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editarColeccionModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Editar Colección">
                                                        <div class="text-center">
                                                            <i class="lni lni-pencil-alt"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>

                                                    {{-- Botón eliminar --}}
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#eliminarPaginaModal">
                                                        <i class="lni lni-trash"
                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                    </button>
                                                </div>

                                                <!-- Modal de edición -->
                                                <div class="modal fade" id="editarColeccionModal" tabindex="-1"
                                                    aria-labelledby="editarColeccionModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editarColeccionModalLabel">
                                                                    Editar Colección</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Cerrar"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="mb-3">
                                                                        <label for="editTitulo" class="form-label">Nombre de
                                                                            Colección</label>
                                                                        <input type="text" class="form-control"
                                                                            id="titulo">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="editDescripcion"
                                                                            class="form-label">Descripción</label>
                                                                        <input type="email" class="form-control"
                                                                            id="descripcion">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="editIcono"
                                                                            class="form-label">Icono</label>
                                                                        <input type="file" class="form-control"
                                                                            id="icono" name="icono">
                                                                    </div>

                                                                </form>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cerrar</button>
                                                                <button type="button" class="btn btn-info text-white"
                                                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                    <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                                    Guardar
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Modal eliminar --}}
                                                <div class="modal fade" id="eliminarPaginaModal" tabindex="-1"
                                                    aria-labelledby="eliminarPaginaModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="eliminarPaginaModalLabel">
                                                                    Confirmar
                                                                    eliminación</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ¿Estás seguro de que deseas eliminar esta colección?
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
    </section>

@endsection
