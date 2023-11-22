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

                            {{-- Anuncios --}}
                            <div class="tab-pane show active fade" id="tab-anuncios">
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
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('anuncios.store') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="titulo"
                                                                                class="col-sm-4 col-form-label">Titulo:</label>

                                                                            <input type="titulo" name="titulo"
                                                                                class="form-control" id="titulo"
                                                                                placeholder="Titulo">

                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="otroInput"
                                                                                class="col-sm-4 col-form-label">Imagen de
                                                                                portada:</label>
                                                                            <input type="file"
                                                                                class="form-control input-imagen"
                                                                                id="portada" name="img_portada">
                                                                            <div class="text-center p-3">
                                                                                <img src="#"
                                                                                    id="imagen-preview-portada"
                                                                                    alt="Vista previa de la imagen"
                                                                                    class="rounded-3 imagen-preview"
                                                                                    style="width:300px; height: 200px; object-fit: cover; display: none;">
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-3">
                                                                            <label for="etiqueta"
                                                                                class="col-sm-4 col-form-label">Etiqueta:
                                                                                </label>
                                                                            <div class="col-sm-8">

                                                                                <select class="form-select" id="etiqueta"
                                                                                    name="etiqueta">
                                                                                    <option value="1">Nuevo</option>
                                                                                    <option value="2">Mejora
                                                                                    </option>
                                                                                    <option value="3">Beta</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3 row">
                                                                            <div class="col">
                                                                                <label>Fecha incio:</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_inicio">
                                                                            </div>

                                                                            <div class="col">
                                                                                <label>Fecha final:</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_final">
                                                                            </div>

                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="contenido"
                                                                                class="col-sm-4 col-form-label">Contenido:</label>

                                                                            <textarea id="mytextarea" name="contenido" rows="3" placeholder="Contenido"></textarea>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="submit"
                                                                                class="btn btn-info text-white"
                                                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                <i class="bx bx-save"
                                                                                    style="color: #F2F2F2;"></i>
                                                                                Guardar
                                                                            </button>
                                                                        </div>

                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />

                                            {{-- Listado de anuncios --}}
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
                                                                incio
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha fin
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
                                                            <td>11/11/2024</td>
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
                                                                                            class="form-label">Fecha inicio: <span>Acá</span></label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <div class="col-sm">
                                                                                        <label for="fecha"
                                                                                            class="form-label">Fecha final: <span>Acá</span></label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <label for="id_vendedor"
                                                                                        class="col-sm-4 col-form-label">Contenido:
                                                                                        <span>Acá</span></label>
                                                                                </div>
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
                                                                                <form
                                                                                    action="{{ route('anuncios.update', 1) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('PUT')

                                                                                    <div class="mb-3">
                                                                                        <label for="titulo"
                                                                                            class="col-sm-4 col-form-label">Titulo:</label>

                                                                                        <input type="titulo"
                                                                                            name="titulo"
                                                                                            class="form-control"
                                                                                            id="titulo"
                                                                                            placeholder="Titulo">

                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="otroInput"
                                                                                            class="col-sm-4 col-form-label">Imagen
                                                                                            de
                                                                                            portada:</label>
                                                                                        <input type="file"
                                                                                            class="form-control input-imagen"
                                                                                            id="portada"
                                                                                            name="img_portada">
                                                                                        <div class="text-center p-3">
                                                                                            <img src="#"
                                                                                                id="imagen-preview-portada"
                                                                                                alt="Vista previa de la imagen"
                                                                                                class="rounded-3 imagen-preview"
                                                                                                style="width:300px; height: 200px; object-fit: cover; display: none;">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="etiqueta"
                                                                                            class="col-sm-4 col-form-label">Etiqueta:
                                                                                            </label>
                                                                                        <div class="col-sm-8">
            
                                                                                            <select class="form-select" id="etiqueta"
                                                                                                name="etiqueta">
                                                                                                <option value="1">Nuevo</option>
                                                                                                <option value="2">Mejora
                                                                                                </option>
                                                                                                <option value="3">Beta</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3 row">
                                                                                        <div class="col">
                                                                                            <label>Fecha incio:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                name="fecha_inicio">
                                                                                        </div>

                                                                                        <div class="col">
                                                                                            <label>Fecha final:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                name="fecha_final">
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="contenido"
                                                                                            class="col-sm-4 col-form-label">Contenido:</label>

                                                                                        <textarea id="mytextarea" name="contenido" rows="3" placeholder="Contenido"></textarea>
                                                                                    </div>

                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-info text-white"
                                                                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                            <i class="bx bx-save"
                                                                                                style="color: #F2F2F2;"></i>
                                                                                            Guardar
                                                                                        </button>
                                                                                    </div>

                                                                                </form>
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
                                                                                {{-- Form de eliminar --}}
                                                                                <form
                                                                                    action="{{ route('anuncios.destroy', 1) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"
                                                                                        data-bs-dismiss="modal"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#eliminacionCorrectaModal">Eliminar
                                                                                    </button>
                                                                                </form>
                                                                                {{-- Fin form de eliminar --}}
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
                                                    <h5 class="mb-0 text-dark" title="Agregar Alerta">Lista de Alertas
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
                                                                    <form action="{{ route('alertas.store') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="titulo"
                                                                                class="col-sm-4 col-form-label">Titulo:</label>

                                                                            <input type="text" name="titulo"
                                                                                class="form-control" id="titulo"
                                                                                placeholder="Titulo">

                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="descripción"
                                                                                class="col-sm-4 col-form-label">Descripción:</label>

                                                                            <input type="text" name="descripcion"
                                                                                class="form-control" id="descripción"
                                                                                placeholder="Escribe una pequeña descripción">

                                                                        </div>

                                                                        
                                                                        <div class="row mb-3">
                                                                            <label for="tipo_destinatario"
                                                                                class="col-sm-4 col-form-label">Tipo de destinatario:
                                                                                </label>
                                                                            <div class="col-sm-8">

                                                                                <select class="form-select" id="tipo_destinatario"
                                                                                    name="tipo_destinatario">
                                                                                    <option value="1">Compradores</option>
                                                                                    <option value="2">Vendedores
                                                                                    </option>
                                                                                    <option value="3">Todos</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3 row">
                                                                            <div class="col">
                                                                                <label>Fecha incio:</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_inicio">
                                                                            </div>

                                                                            <div class="col">
                                                                                <label>Fecha final:</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_final">
                                                                            </div>

                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="submit"
                                                                                class="btn btn-info text-white"
                                                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                <i class="bx bx-save"
                                                                                    style="color: #F2F2F2;"></i>
                                                                                Guardar
                                                                            </button>
                                                                        </div>


                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr />
                                            {{-- Listado de alertas --}}
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
                                                                incio
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha fin
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
                                                            <td>11/11/2024</td>

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
                                                                                <div class="row mb-3">
                                                                                    <label for="id_vendedor"
                                                                                        class="col-sm-4 col-form-label">Titulo:
                                                                                        <span>Acá</span></label>

                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <label for="id_vendedor"
                                                                                        class="col-sm-4 col-form-label">Descripción:
                                                                                        <span>Acá</span></label>
                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <div class="col-sm">
                                                                                        <label for="fecha"
                                                                                            class="form-label">Fecha incio: <span>Acá</span></label>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <div class="col-sm">
                                                                                        <label for="fecha"
                                                                                            class="form-label">Fecha final: <span>Acá</span></label>
                                                                                    </div>
                                                                                </div>

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
                                                                                <form
                                                                                    action="{{ route('alertas.update', 1) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('PUT')

                                                                                    <div class="mb-3">
                                                                                        <label for="titulo"
                                                                                            class="col-sm-4 col-form-label">Titulo:</label>

                                                                                        <input type="text"
                                                                                            name="titulo"
                                                                                            class="form-control"
                                                                                            id="titulo"
                                                                                            placeholder="Titulo">

                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="descripción"
                                                                                            class="col-sm-4 col-form-label">Descripción:</label>

                                                                                        <input type="text"
                                                                                            name="descripcion"
                                                                                            class="form-control"
                                                                                            id="descripción"
                                                                                            placeholder="Escribe una pequeña descripción">

                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo_destinatario"
                                                                                            class="col-sm-4 col-form-label">Tipo de destinatario:
                                                                                            </label>
                                                                                        <div class="col-sm-8">
            
                                                                                            <select class="form-select" id="tipo_destinatario"
                                                                                                name="tipo_destinatario">
                                                                                                <option value="1">Compradores</option>
                                                                                                <option value="2">Vendedores
                                                                                                </option>
                                                                                                <option value="3">Todos</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3 row">
                                                                                        <div class="col">
                                                                                            <label>Fecha incio:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                name="fecha_inicio">
                                                                                        </div>

                                                                                        <div class="col">
                                                                                            <label>Fecha final:</label>
                                                                                            <input type="date"
                                                                                                class="form-control"
                                                                                                name="fecha_final">
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-info text-white"
                                                                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                            <i class="bx bx-save"
                                                                                                style="color: #F2F2F2;"></i>
                                                                                            Guardar
                                                                                        </button>
                                                                                    </div>

                                                                                </form>
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
                                                                                <form action="{{ route('alertas.destroy', 1) }}"
                                                                                    method="POST">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="button"
                                                                                        class="btn btn-danger"
                                                                                        data-bs-dismiss="modal"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
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
    </section>

@endsection
