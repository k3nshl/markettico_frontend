@extends('plantilla')

@section('gestion_nombre', 'Notificaciones')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-correos">
                                    <i class="lni lni-envelope"></i> Correos

                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-anuncios">
                                    <i class="lni lni-alarm"></i> Anuncios

                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab" data-bs-target="#tab-alertas">
                                    <i class="fadeIn animated bx bx-comment-error"></i> Alertas

                                </button>
                            </li>
                        </ul>


                        <div class="tab-content">

                            {{-- Correos o --}}
                            <div class="tab-pane  show active fade" id="tab-correos">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de Correos</h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <h5 class="m-0">Redactar</h5>
                                                    </div>
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-info text-white"
                                                            data-bs-toggle="modal" data-bs-target="#modalRedactarCorreo"
                                                            style="background-color: #04D9B2; border-color: #04D9D9;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Agregar Usuario Administrativo">+</button>
                                                    </div>

                                                    {{-- Modal Registrar --}}
                                                    <div class="modal fade" id="modalRedactarCorreo" tabindex="-1"
                                                        aria-labelledby="modalRedactarCorreoLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalAgregarUsuarioLabel">
                                                                        Redactar Correo</h5>
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
                                                <table id="tablaCorreos" class="table table-bordered">
                                                    <thead class="theadtablaCorreos">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Titulo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha
                                                            </th>

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Necesito beca</td>
                                                            <td>
                                                                11/11/23
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




                                                                    <!-- Botón de eliminar -->
                                                                    <button class="btn btn-danger btn-sm btn-block"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarUsuarioModal">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
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
                                                                                    Visualizar Datos del Correo</h5>
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

                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Anuncios --}}
                            <div class="tab-pane fade" id="tab-anuncios">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Anuncio">Lista de Anuncios
                                                    </h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <h5 class="m-0">Registrar</h5>
                                                    </div>
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-info text-white"
                                                            data-bs-toggle="modal" data-bs-target="#modalAgregarAnuncio"
                                                            style="background-color: #04D9B2; border-color: #04D9D9;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Agregar Anuncio">+</button>
                                                    </div>

                                                    {{-- Modal Registrar --}}
                                                    <div class="modal fade" id="modalAgregarAnuncio" tabindex="-1"
                                                        aria-labelledby="modalAgregarAnuncioLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalAgregarAnuncioLabel">
                                                                        Registrar</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>

                                                                        <div class="mb-3">
                                                                            <label for="titulo"
                                                                                class="col-sm-4 col-form-label">Titulo:</label>

                                                                            <input type="titulo" class="form-control"
                                                                                id="titulo" placeholder="Titulo">

                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="otroInput"
                                                                                class="col-sm-4 col-form-label">Imagen de
                                                                                portada:</label>
                                                                            <input type="file"
                                                                                class="form-control input-imagen"
                                                                                id="portada" name="portada">
                                                                            <div class="text-center p-3">
                                                                                <img src="#" id="imagen-preview-portada"
                                                                                    alt="Vista previa de la imagen"
                                                                                    class="rounded-3 imagen-preview"
                                                                                    style="width:300px; height: 200px; object-fit: cover; display: none;">
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="contenido"
                                                                                class="col-sm-4 col-form-label">Contenido:</label>

                                                                            <textarea id="mytextarea" name="textareaRegistrarAnuncio" rows="3" placeholder="Contenido"></textarea>

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
                                                <table id="tablaAnuncios" class="table table-bordered">
                                                    <thead class="theadAnuncios">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Titulo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Iphone gratis para el que se coma un moco</td>
                                                            <td>11/11/2023</td>


                                                            <td>

                                                                <div class="text-center">

                                                                    {{-- Botón de visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showUserAnuncioModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Ver Anuncios">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de editar con modal -->
                                                                    <button class="btn btn-warning btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editarAnuncios"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Editar Anuncio">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    {{-- Botón de eliminar --}}
                                                                    <button class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarAnuncio">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>
                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showUserAnuncioModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="showUserAnuncioModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showUserAnuncioModal">
                                                                                    Visualizar anuncios</h5>
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
                                                                                        <label for="id_vendedor"
                                                                                            class="col-sm-4 col-form-label">Titulo:
                                                                                            <span>Acá</span></label>

                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="id_vendedor"
                                                                                            class="col-sm-4 col-form-label">Imagen
                                                                                            de portada:
                                                                                            <span>Acá</span></label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                id="fecha"
                                                                                                placeholder="Fecha">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="id_vendedor"
                                                                                            class="col-sm-4 col-form-label">Contenido:
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
                                                                <div class="modal fade" id="editarAnuncios"
                                                                    tabindex="-1" aria-labelledby="editarAnuncioLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarAnuncioLabel">
                                                                                    Editar Anuncio</h5>
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
                                                                                            <label for="titulo"
                                                                                                class="form-label">Título:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="titulo"
                                                                                                placeholder="Titulo">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                id="fecha"
                                                                                                placeholder="Fecha">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="portada"
                                                                                            class="col-sm-4 col-form-label">Imagen
                                                                                            de portada:</label>
                                                                                        <input type="file"
                                                                                            class="form-control input-imagen"
                                                                                            id="otroInput" name="otroInput">
                                                                                        <div class="text-center p-3">
                                                                                            <img src="#" id="imagen-preview-otroInput"
                                                                                                alt="Vista previa de la imagen"
                                                                                                class="rounded-3 imagen-preview"
                                                                                                style="width:300px; height: 200px; object-fit: cover; display: none;">
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="mb-3">
                                                                                        <label for="contenido"
                                                                                            class="col-sm-4 col-form-label">Contenido:</label>
                                                                                        <textarea id="mytextarea" name="textareaEditarAnuncio" rows="3" placeholder="Contenido"></textarea>
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
                                                                <div class="modal fade" id="eliminarAnuncio"
                                                                    tabindex="-1" aria-labelledby="eliminarAnuncioLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="eliminarAnuncioLabel">
                                                                                    Confirmar eliminación</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar este
                                                                                anuncio?
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

                            {{-- Alertas --}}
                            <div class="tab-pane fade" id="tab-alertas">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Alerta">Lista de alertas
                                                    </h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <h5 class="m-0">Registrar</h5>
                                                    </div>
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-info text-white"
                                                            data-bs-toggle="modal" data-bs-target="#modalAgregarAlerta"
                                                            style="background-color: #04D9B2; border-color: #04D9D9;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Agregar Alerta">+</button>
                                                    </div>

                                                    {{-- Modal Registrar --}}
                                                    <div class="modal fade" id="modalAgregarAlerta" tabindex="-1"
                                                        aria-labelledby="modalAgregarAlertaLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalAgregarAlertaLabel">
                                                                        Registrar</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>

                                                                        <div class="mb-3">
                                                                            <label for="titulo"
                                                                                class="col-sm-4 col-form-label">Titulo:</label>

                                                                            <input type="titulo" class="form-control"
                                                                                id="titulo" placeholder="Titulo">

                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="contenido"
                                                                                class="col-sm-4 col-form-label">Contenido:</label>

                                                                            <input type="titulo" class="form-control"
                                                                                id="contenido" placeholder="Contenido">

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
                                                <table id="tablaAlertas" class="table table-bordered">
                                                    <thead class="theadAlertas">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Titulo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Iphone gratis para el que se coma un moco</td>
                                                            <td>11/11/2023</td>

                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showUserAlertaModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Ver alertas">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    <!-- Botón de editar con modal -->
                                                                    <button class="btn btn-warning btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#editarAlerta"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Editar Alerta">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    {{-- Botón de eliminar --}}
                                                                    <button class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarAlerta">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>
                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showUserAlertaModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="showUserAlertaModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showUserAlertaModal">
                                                                                    Visualizar alertas</h5>
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
                                                                                        <label for="titulo"
                                                                                            class="col-sm-4 col-form-label">Titulo:
                                                                                            <span>Acá</span></label>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="contenido"
                                                                                            class="col-sm-4 col-form-label">Contenido:
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
                                                                <div class="modal fade" id="editarAlerta" tabindex="-1"
                                                                    aria-labelledby="editarAlertaLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarAlertaLabel">
                                                                                    Editar Alerta</h5>
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
                                                                                        <label for="titulo"
                                                                                            class="col-sm-4 col-form-label">Titulo:</label>

                                                                                        <input type="titulo"
                                                                                            class="form-control"
                                                                                            id="titulo"
                                                                                            placeholder="Titulo">

                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="contenido"
                                                                                            class="col-sm-4 col-form-label">Contenido:</label>

                                                                                        <input type="titulo"
                                                                                            class="form-control"
                                                                                            id="contenido"
                                                                                            placeholder="Contenido">

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
                                                                <div class="modal fade" id="eliminarAlerta"
                                                                    tabindex="-1" aria-labelledby="eliminarAlertaLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="eliminarAlertaLabel">
                                                                                    Confirmar eliminación</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar esta
                                                                                alerta?
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
