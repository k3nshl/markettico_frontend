@extends('plantilla')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-info">
                                    <i class="bx bx-info-circle"></i> Lista de planes
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-registro">
                                    <i class="bx bx-user-plus"></i> Registro de planes
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane  show active fade" id="tab-info">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center">
                                                <div><i class="bx bxs-user me-1 font-22 text-info"></i></div>
                                                <h5 class="mb-0 text-info">Planes de Vendedores</h5>
                                            </div>
                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaUsuariosAdmin" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nombre del plan</th>
                                                            <th>Precio</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploUsuario</td>
                                                            <td>ejemplo@empresa.com</td>
                                                            <td>
                                                                <div class="text-center">
                                                                    
                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showUserModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de editar con modal -->
                                                                    <button class="btn btn-warning btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editarUsuarioModal">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    {{-- Botón de eliminar --}}
                                                                    <button class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarUsuarioModal">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>
                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showUserModal" tabindex="-1"
                                                                    aria-labelledby="showUserModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showUserModalLabel">
                                                                                    Visualizar el Plan</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="mb-3">
                                                                                        <label for="showNombreUsuario"
                                                                                            class="form-label">Nombre
                                                                                            del Plan:</label>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="showCorreoEmpresarial"
                                                                                            class="form-label">Precio:</label>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar</button>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Modal de edición -->
                                                                <div class="modal fade" id="editarUsuarioModal"
                                                                    tabindex="-1" aria-labelledby="editarUsuarioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarUsuarioModalLabel">
                                                                                    Editar Plan</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="mb-3">
                                                                                        <label for="editNombre"
                                                                                            class="form-label">Nombre:</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="nombre">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="editPrecio"
                                                                                            class="form-label">Precio:</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="precio">
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
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

                                                                {{-- Modal Eliminar --}}
                                                                <div class="modal fade" id="eliminarUsuarioModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="eliminarUsuarioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="eliminarUsuarioModalLabel">
                                                                                    Confirmar
                                                                                    eliminación</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar
                                                                                este plan?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-bs-dismiss="modal"
                                                                                    data-bs-toggle="modal"
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

                            <div class="tab-pane fade" id="tab-registro">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-7 p-3">
                                        <div class="border p-4 rounded">
                                            <div class="card-title d-flex align-items-center">
                                                <div><i class="lni lni-user me-2 font-22 text-info"></i></div>
                                                <h5 class="mb-0 text-info">Registrar el Plan</h5>
                                            </div>
                                            <hr />
                                            <form>
                                                <div class="row mb-3">
                                                    <label for="nombre_completo" class="col-sm-4 col-form-label">Nombre del Plan:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="nombre_completo"
                                                            placeholder="Nombre del Plan">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="precio" class="col-sm-4 col-form-label">Precio:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="precio"
                                                            placeholder="Precio">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label"></label>
                                                    <div class="col-sm-9 text-end">
                                                        <button type="button" class="btn btn-info text-white"
                                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                                            <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                            Guardar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
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
