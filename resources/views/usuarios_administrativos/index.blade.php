@extends('plantilla')

@section('gestion_nombre', 'Usuarios Administrativos')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-listaUsuarios">
                                    <i class="bx bx-notepad me-2"></i> Usuarios

                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-bloqueados">
                                    <i class="bx bx-notepad me-2"></i> Usuarios Bloqueados
                                </button>
                            </li>
                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="tab-listaUsuarios">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de Usuarios
                                                        Administrativos</h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <h5 class="m-0">Registrar</h5>
                                                    </div>
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-info text-white"
                                                            data-bs-toggle="modal" data-bs-target="#modalAgregarUsuario"
                                                            style="background-color: #04D9B2; border-color: #04D9D9;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Agregar Usuario Administrativo">+</button>
                                                    </div>

                                                    <div class="modal fade" id="modalAgregarUsuario" tabindex="-1"
                                                        aria-labelledby="modalAgregarUsuarioLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalAgregarUsuarioLabel">
                                                                        Agregar Usuario Administrativo</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="row mb-3">
                                                                            <label for="nombre_completo"
                                                                                class="col-sm-4 col-form-label">Nombre de
                                                                                Usuario:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                    id="nombre_completo"
                                                                                    placeholder="Nombre de Usuario">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="password"
                                                                                class="col-sm-4 col-form-label">Contraseña:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="password" class="form-control"
                                                                                    id="password" placeholder="Contraseña">
                                                                            </div>
                                                                        </div>


                                                                        <div class="row mb-3">
                                                                            <label for="correo_empresarial"
                                                                                class="col-sm-4 col-form-label">Correo
                                                                                Empresarial:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="email" class="form-control"
                                                                                    id="correo_empresarial"
                                                                                    placeholder="Correo Empresarial">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="numero_telefonico"
                                                                                class="col-sm-4 col-form-label">Número
                                                                                Telefónico:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                    id="numero_telefonico"
                                                                                    placeholder="Número Telefónico">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="id_rol"
                                                                                class="col-sm-4 col-form-label">Rol del
                                                                                Usuario:</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-select" id="id_rol">
                                                                                    <option value="superadmin">Superadmin
                                                                                    </option>
                                                                                    <option value="administrador">
                                                                                        Administrador</option>
                                                                                    <option value="moderador">Moderador
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="id_estado"
                                                                                class="col-sm-4 col-form-label">Estado
                                                                                del
                                                                                Usuario:</label>
                                                                            <div class="col-sm-8">

                                                                                <select class="form-select"
                                                                                    id="id_estado">
                                                                                    <option value="activo">Activo</option>
                                                                                    <option value="inactivo">Inactivo
                                                                                    </option>
                                                                                </select>
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
                                                <table id="tablaUsuariosAdmin" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Rol
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Estado
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploUsuario</td>
                                                            <td>

                                                                <p class="">Administrador</p>

                                                            </td>
                                                            <td>
                                                                <p class="badge bg-success">Activo</p>
                                                            </td>
                                                            <td>
                                                                <div class="text-center">

                                                                    <!-- Botón de visualizar -->
                                                                    <button class="btn btn-primary btn-sm btn-block"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showUserModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar Estado">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de editar con modal -->
                                                                    <button class="btn btn-warning btn-sm btn-block"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editarUsuarioModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Editar Usuario Administrativo">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de eliminar -->
                                                                    <button class="btn btn-danger btn-sm btn-block"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarUsuarioModal">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>


                                                                    <!-- Botón de bloquear -->
                                                                    <button class="btn btn-sm btn-block"
                                                                        style="background-color: #05f29d"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#bloquearUsuarioModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Bloquear Usuario Administrativo">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-lock"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>



                                                                </div>





                                                                <!-- Modal de visaualizacion -->
                                                                <div class="modal fade" id="showUserModal" tabindex="-1"
                                                                    aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showUserModalLabel">
                                                                                    Visualizar Usuario Administrativo</h5>
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
                                                                                            class="form-label">Nombre:
                                                                                            <span>Acá</span>
                                                                                        </label>

                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="showCorreoEmpresarial"
                                                                                            class="form-label">Correo
                                                                                            Empresarial:
                                                                                            <span>Acá</span></label>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="showNumeroTelefonico"
                                                                                            class="form-label">Número
                                                                                            Telefónico:
                                                                                            <span>Acá</span></label>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="showRolUsuario"
                                                                                            class="form-label">Rol:
                                                                                            <span>Acá</span></label>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="showEstadoUsuario"
                                                                                            class="form-label">Estado:
                                                                                            <span>Acá</span></label>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="showEstadoUsuario"
                                                                                            class="form-label">Fecha de
                                                                                            registro: <span>Acá</span>
                                                                                        </label>
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
                                                                    tabindex="-1"
                                                                    aria-labelledby="editarUsuarioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarUsuarioModalLabel">
                                                                                    Editar Usuario Administrativo</h5>
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
                                                                                        <label for="editNombreUsuario"
                                                                                            class="col-sm-4 col-form-label">Nombre</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="editNombreUsuario"
                                                                                            placeholder="Nombre de usuario">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="editCorreoEmpresarial"
                                                                                            class="form-label">Correo
                                                                                            empresarial</label>
                                                                                        <input type="email"
                                                                                            class="form-control"
                                                                                            id="editCorreoEmpresarial"
                                                                                            placeholder="Correo empresarial">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="editNumeroTelefonico"
                                                                                            class="form-label">Número
                                                                                            telefónico</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="editNumeroTelefonico"
                                                                                            placeholder="Número telefónico">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="editRolUsuario"
                                                                                            class="form-label">Rol
                                                                                        </label>
                                                                                        <select class="form-select"
                                                                                            id="editRolUsuario">
                                                                                            <option value="superadmin">
                                                                                                Superadmin
                                                                                            </option>
                                                                                            <option value="administrador">
                                                                                                Administrador
                                                                                            </option>
                                                                                            <option value="moderador">
                                                                                                Moderador</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="editEstadoUsuario"
                                                                                            class="form-label">Estado
                                                                                        </label>
                                                                                        <select class="form-select"
                                                                                            id="editEstadoUsuario">
                                                                                            <option value="activo">
                                                                                                Activo</option>
                                                                                            <option value="inactivo">
                                                                                                Inactivo</option>
                                                                                        </select>
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

                                                                {{-- Modal de eliminar --}}
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
                                                                                ¿Estás seguro de que deseas eliminar este
                                                                                usuario
                                                                                administrativo?
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

                                                                <!-- Modal de bloquear  -->
                                                                <div class="modal fade" id="bloquearUsuarioModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="bloquearUsuarioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="bloquearUsuarioModalLabel">
                                                                                    Confirmar
                                                                                    bloqueo</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas bloquear este
                                                                                usuario?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-bs-dismiss="modal"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#bloqueoCorrectoModal">Bloquear</button>
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

                            <div class="tab-pane fade" id="tab-bloqueados">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Lista de Usuarios
                                                        Bloqueados</h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaUsuariosBloqueados" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Usuario
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Descripción
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Tipo
                                                                Usuario
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Vendedor
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Juanito Perez</td>
                                                            <td>Bloqueado por falta de datos</td>
                                                            <td>Un usuario</td>
                                                            <td>Nanami Kento</td>
                                                            <td>

                                                                <div class="text-center">

                                                                    {{-- Botón de visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showUserBloqueadoModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Ver Bloqueados">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de editar con modal -->
                                                                    <button class="btn btn-warning btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editarUsuarioBloqueadoModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Editar Usuario Bloqueados">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    {{-- Botón de eliminar --}}
                                                                    <button class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarUsuarioBloqueadoModal">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>

                                                                    <!-- Botón de bloquear -->
                                                                    <button class="btn btn-sm btn-block"
                                                                        style="background-color: #05f29d"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#DesbloquearUsuarioModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Desbloquear Usuario Administrativo">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-unlock"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>
                                                                </div>


                                                                <!-- Modal de bloquear  -->
                                                                <div class="modal fade" id="DesbloquearUsuarioModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="DesbloquearUsuarioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="DesbloquearUsuarioModalLabel">
                                                                                    Confirmar
                                                                                    desbloqueo</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas desbloquear este
                                                                                usuario?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cancelar</button>
                                                                                <button type="button"
                                                                                    class="btn btn-danger"
                                                                                    data-bs-dismiss="modal"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#bloqueoCorrectoModal">Bloquear</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!-- Modal de visaualizacion -->
                                                                <div class="modal fade" id="showUserBloqueadoModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="showUserBloqueadoModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showUserBloqueadoModalLabel">
                                                                                    Visualizar usuarios bloqueados</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row mb-3">
                                                                                        <label for="id_usuario"
                                                                                            class="col-sm-4 col-form-label">Usuario:
                                                                                            <span>Acá</span></label>

                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="descripcion"
                                                                                            class="col-sm-4 col-form-label">Descripción:
                                                                                            <span>Acá</span></label>

                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo_usuario"
                                                                                            class="col-sm-4 col-form-label">Tipo
                                                                                            de usuario:
                                                                                            <span>Acá</span></label>

                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="id_vendedor"
                                                                                            class="col-sm-4 col-form-label">Vendedor:
                                                                                            <span>Acá</span></label>

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
                                                                <div class="modal fade" id="editarUsuarioBloqueadoModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="editarUsuarioBloqueadoModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarUsuarioBloqueadoModalLabel">
                                                                                    Editar usuario bloqueado</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="id_usuario"
                                                                                                class="form-label">Usuario:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="id_usuario"
                                                                                                placeholder="Nombre de Usuario">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="descripcion"
                                                                                                class="form-label">Descripción:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="descripcion"
                                                                                                placeholder="Descripción">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="tipo_usuario"
                                                                                                class="form-label">Tipo de
                                                                                                usuario:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="tipo_usuario"
                                                                                                placeholder="Tipo de usuario">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="id_vendedor"
                                                                                                class="form-label">Vendedor:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="id_vendedor"
                                                                                                placeholder="Nombre del Vendedor">
                                                                                        </div>
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

                                                                {{-- Modal de eliminar --}}
                                                                <div class="modal fade" id="eliminarUsuarioBloqueadoModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="eliminarUsuarioBloqueadoModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="eliminarUsuarioBloqueadoModalLabel">
                                                                                    Confirmar eliminación</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar este
                                                                                usuario bloqueado?
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

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
