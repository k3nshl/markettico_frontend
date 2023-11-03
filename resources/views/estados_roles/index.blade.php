@extends('plantilla')

@section('gestion_nombre', 'Estados/Roles')

@section('contenido')


<section class="content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                <div class="card-body text-center">

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <div class="border p-3 rounded">
                                <div class="card-title d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                        <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de Roles</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <h5 class="m-0">Registrar</h5>
                                        </div>
                                        <div class="me-2">
                                            <button type="button" class="btn btn-info text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalAgregarRol"
                                                style="background-color: #04D9B2; border-color: #04D9D9;"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Agregar Nuevo Rol">+</button>
                                        </div>

                                        <div class="modal fade" id="modalAgregarRol" tabindex="-1"
                                            aria-labelledby="modalAgregarRolLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalAgregarEstadoRol">
                                                            Agregar Nuevo Rol</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row mb-3">
                                                                <label for="nombre"
                                                                    class="col-sm-4 col-form-label">Nombre del Rol:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        id="nombre" name="nombre"
                                                                        placeholder="Ingrese el nombre del Rol">
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
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Nombre</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Superadmin</td>
                                                <td>
                                                    
                                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#showRolModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Visualizar Rol">
                                                        <div class="text-center">
                                                            <i class="lni lni-eye"
                                                            style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>

                                                    <!-- Modal de visaualizacion -->
                                                    <div class="modal fade" id="showRolModal" tabindex="-1"
                                                        aria-labelledby="showRolModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="showRolModalLabel">Visualizar Rol</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Nombre del rol</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Regresar</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Botón de editar con modal -->
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editarRolModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Editar Rol">
                                                        <div class="text-center">
                                                            <i class="lni lni-pencil-alt"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>


                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editarRolModal" tabindex="-1"
                                                        aria-labelledby="editarRolModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editarUsuarioModalLabel">
                                                                        Editar Rol</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="Cerrar"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="editarNombreEstado"
                                                                                class="form-label">Nombre del Rol</label>
                                                                            <input type="text" class="form-control"
                                                                                id="editarNombreRol">
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
                                                        data-bs-target="#eliminarRolModal">
                                                        <i class="lni lni-trash"
                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                    </button>

                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="eliminarRolModal" tabindex="-1"
                                                        aria-labelledby="eliminarRolModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="eliminarRolModalLabel">Confirmar
                                                                        eliminación</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar este rol?
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



    


  

<section class="content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                <div class="card-body text-center">

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <div class="border p-3 rounded">
                                <div class="card-title d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                        <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de Estados</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <h5 class="m-0">Registrar</h5>
                                        </div>
                                        <div class="me-2">
                                            <button type="button" class="btn btn-info text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalAgregarEstado"
                                                style="background-color: #04D9B2; border-color: #04D9D9;"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Agregar Nuevo Estado">+</button>
                                        </div>

                                        <div class="modal fade" id="modalAgregarEstado" tabindex="-1"
                                            aria-labelledby="modalAgregarEstadoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalAgregarEstadoLabel">
                                                            Agregar Nuevo Estado</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row mb-3">
                                                                <label for="nombre"
                                                                    class="col-sm-4 col-form-label">Nombre del Estado:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        id="nombre" name="nombre"
                                                                        placeholder="Ingrese el nombre del Estado">
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
                                    <table id="tablaEstados" class="table table-bordered">
                                        <thead class="theadEstados">
                                            <tr>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Nombre</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Activo</td>
                                                <td>
                                                    
                                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#showEstadoModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Visualizar Estado">
                                                        <div class="text-center">
                                                            <i class="lni lni-eye"
                                                            style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>

                                                    <!-- Modal de visaualizacion -->
                                                    <div class="modal fade" id="showEstadoModal" tabindex="-1"
                                                        aria-labelledby="showEstadoModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="showEstadoModalLabel">Visualizar Estado</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Nombre del estado</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Regresar</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Botón de editar con modal -->
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editarEstadoModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Editar Estado">
                                                        <div class="text-center">
                                                            <i class="lni lni-pencil-alt"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>


                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editarEstadoModal" tabindex="-1"
                                                        aria-labelledby="editarEstadoModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editarUsuarioModalLabel">
                                                                        Editar Estado</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="Cerrar"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="editarNombreEstado"
                                                                                class="form-label">Nombre del Estado</label>
                                                                            <input type="text" class="form-control"
                                                                                id="editarNombreEstado">
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
                                                        data-bs-target="#eliminarEstadoModal">
                                                        <i class="lni lni-trash"
                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                    </button>

                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="eliminarEstadoModal" tabindex="-1"
                                                        aria-labelledby="eliminarEstadoModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="eliminarEstadoModalLabel">Confirmar
                                                                        eliminación</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar este estado?
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
    
