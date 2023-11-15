@extends('plantilla')

@section('gestion_nombre', 'Gestión de Categorías')

@section('contenido')



    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                            <h5 class="mb-0 text-dark" title="Agregar Categoría">Lista de Categorias</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h5 class="m-0">Registrar</h5>
                                            </div>
                                            <div class="me-2">
                                                <button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalAgregarCategoria"
                                                    style="background-color: #04D9B2; border-color: #04D9D9;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar Nueva Categoría">+</button>
                                            </div>

                                            <div class="modal fade" id="modalAgregarCategoria" tabindex="-1"
                                                aria-labelledby="modalAgregarCategoriaLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalAgregarCategoria">
                                                                Agregar Nueva categoría</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="row mb-3">
                                                                    <label for="nombre"
                                                                        class="col-sm-4 col-form-label">Nombre de la
                                                                        categoría:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            id="nombre" name="nombre"
                                                                            placeholder="Ingrese el nombre">
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="descripcion"
                                                                        class="col-sm-4 col-form-label">Descripción de la
                                                                        categoría:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            id="descripcion" name="descripcion"
                                                                            placeholder="Ingrese la descripción">
                                                                    </div>
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
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="table-responsive">
                                        <table id="tablaRoles" class="table table-bordered">
                                            <thead class="theadRoles">
                                                <tr>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Nombre</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Descripción</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td>1</td>
                                                    <td>Hogar</td>
                                                    <td>Ahhhajjajbbcbxxuusisisisiis</td>
                                                    <td>





                                                        <a href="{{ route('categorias.show', $id) }}"
                                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Visualizar Subcategoría">
                                                            <div class="text-center">
                                                                <i class="lni lni-eye"
                                                                    style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                            </div>
                                                        </a>

                                                        <!-- Botón de editar con modal -->
                                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#editarCategoriaModal" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Editar Categoria">
                                                            <div class="text-center">
                                                                <i class="lni lni-pencil-alt"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </div>
                                                        </button>


                                                        <!-- Modal de edición -->
                                                        <div class="modal fade" id="editarCategoriaModal" tabindex="-1"
                                                            aria-labelledby="editarCategoriaModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="editarCategoriaModalLabel">
                                                                            Editar Categoría</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Cerrar"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="mb-3">
                                                                                <label for="editarNombreCategoria"
                                                                                    class="form-label">Nombre de la
                                                                                    categoría</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="editarNombreCategoria">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="editarDescripcion"
                                                                                    class="form-label">Descripción</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="editarDescripcion">
                                                                            </div>

                                                                        </form>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                        <button type="button"
                                                                            class="btn btn-info text-white"
                                                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                            <i class="bx bx-save"
                                                                                style="color: #F2F2F2;"></i>
                                                                            Guardar
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#eliminarCategoriaModal">
                                                            <i class="lni lni-trash"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </button>

                                                        <!-- Modal de eliminación -->
                                                        <div class="modal fade" id="eliminarCategoriaModal"
                                                            tabindex="-1" aria-labelledby="eliminarRolModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="eliminarCategoriaModalLabel">Confirmar
                                                                            eliminación</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ¿Estás seguro de que deseas eliminar esta categoría?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <!-- Form para eliminar categoria -->
                                                                        <form action="">
                                                                            
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#eliminacionCorrectaModal">Eliminar
                                                                            </button>
                                                                            <!-- Fin form para eliminar categoria -->
                                                                        </form>
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


        </div>
        </div>
        </div>
        </div>




    @endsection
