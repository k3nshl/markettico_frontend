@extends('plantilla')

@section('gestion_nombre', 'Notificaciones')

@section('contenido')



@if(session('error'))
<div class="alert alert-danger" role="alert">
    <h3>{{session('error')}}  </h3>
</div>
@endif

@if(session('success'))
<div class="alert alert-success" role="alert">
 <h3>{{session('success')}}  </h3>
</div>
@endif

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
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-9">
                                                                                <label for="titulo">Titulo:</label>
                                                                                <input type="text" name="titulo"
                                                                                    class="form-control" id="titulo"
                                                                                    placeholder="Titulo">
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label for="etiqueta">
                                                                                    Etiqueta:
                                                                                </label>
                                                                                <select class="form-select w-auto"
                                                                                    id="etiqueta" name="etiqueta">
                                                                                    <option value="Nuevo">Nuevo</option>
                                                                                    <option value="Mejora">Mejora
                                                                                    </option>
                                                                                    <option value="Beta">Beta</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="otroInput"
                                                                                class="col-sm-4 col-form-label">Imagen de
                                                                                portada:</label>
                                                                            <input type="file"
                                                                                class="form-control input-imagen"
                                                                                name="img_portada" id="portada">
                                                                            <div class="text-center p-3">
                                                                                <img src="#"
                                                                                    id="imagen-preview-portada"
                                                                                    alt="Vista previa de la imagen"
                                                                                    class="rounded-3 imagen-preview"
                                                                                    style="width:300px; height: 200px; object-fit: cover; display: none;">
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
                                                        @foreach ($anuncios as $item)
                                                            <tr>
                                                                <td>{{ $item->id_anuncio }}</td>
                                                                <td>{{ $item->titulo }}</td>
                                                                <td>{{ $item->fecha_inicio }}</td>
                                                                <td>{{ $item->fecha_final }}</td>
                                                                <td>
                                                                    <div class="text-center">

                                                                        {{-- Botón de visualizar --}}
                                                                        <button class="btn btn-primary btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#showUserAnuncioModal{{ $item->id_anuncio }}"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Ver Anuncios">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-eye"
                                                                                    style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>

                                                                        <!-- Botón de editar con modal -->
                                                                        <button class="btn btn-warning btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editarAnuncios{{ $item->id_anuncio }}"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Editar Anuncio">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-pencil-alt"
                                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>

                                                                        {{-- Botón de eliminar --}}
                                                                        <button class="btn btn-danger btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#eliminarAnuncio{{ $item->id_anuncio }}">
                                                                            <i class="lni lni-trash"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </button>
                                                                    </div>

                                                                    <!-- Modal de visualizacion -->
                                                                    <div class="modal fade" style="overflow-y: scroll;"
                                                                        id="showUserAnuncioModal{{ $item->id_anuncio }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="showUserAnuncioModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="showUserAnuncioModal">
                                                                                        Visualizar anuncios</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <div
                                                                                        class="mb-3 d-flex align-items-center justify-content-between">
                                                                                        <div class="me-2"
                                                                                            style="white-space: pre-line;">
                                                                                            <label>Titulo:</label>
                                                                                            <span>{{ $item->titulo }}</span>
                                                                                        </div>

                                                                                        <span
                                                                                            class="badge bg-info ms-3">{{ $item->etiqueta }}</span>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label>Portada:</label>
                                                                                        <div class="text-center p-3">
                                                                                            <img src="/img/anuncios/{{ $item->img_portada }}"
                                                                                                alt="Vista previa de la imagen"
                                                                                                class="rounded-3"
                                                                                                style="width:300px; height: 200px; object-fit: cover;">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3 row">
                                                                                        <div class="col-md">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha
                                                                                                inicio:
                                                                                                <span>{{ $item->fecha_inicio }}</span></label>
                                                                                        </div>
                                                                                        <div class="col-md">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha
                                                                                                final:
                                                                                                <span>{{ $item->fecha_final }}</span></label>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label>Contenido:</label>
                                                                                        <span
                                                                                            style="white-space: pre-line;">{!! $item->contenido !!}</span>
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
                                                                    <div class="modal fade"
                                                                        id="editarAnuncios{{ $item->id_anuncio }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="editarAnuncioLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="editarAnuncioLabel">
                                                                                        Editar Anuncio</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{{ route('anuncios.update', $item->id_anuncio) }}"
                                                                                        method="POST"
                                                                                        enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        @method('PUT')

                                                                                        <input type="hidden"
                                                                                            name="id_estado"
                                                                                            value="{{ $item->id_estado }}">

                                                                                        <div class="row mb-3">
                                                                                            <div class="col-md-9">
                                                                                                <label
                                                                                                    for="titulo">Titulo:</label>
                                                                                                <input type="text"
                                                                                                    name="titulo"
                                                                                                    class="form-control"
                                                                                                    id="titulo"
                                                                                                    placeholder="Titulo"
                                                                                                    value="{{ $item->titulo }}">
                                                                                            </div>

                                                                                            <div class="col-md-3">
                                                                                                <label for="etiqueta">
                                                                                                    Etiqueta:
                                                                                                </label>
                                                                                                <select
                                                                                                    class="form-select w-auto"
                                                                                                    id="etiqueta"
                                                                                                    name="etiqueta">
                                                                                                    <option value="Nuevo"
                                                                                                        {{ $item->etiqueta == 'Nuevo' ? 'selected' : '' }}>
                                                                                                        Nuevo</option>
                                                                                                    <option value="Mejora"
                                                                                                        {{ $item->etiqueta == 'Mejora' ? 'selected' : '' }}>
                                                                                                        Mejora
                                                                                                    </option>
                                                                                                    <option value="Beta"
                                                                                                        {{ $item->etiqueta == 'Beta' ? 'selected' : '' }}>
                                                                                                        Beta</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label>Imagen de
                                                                                                portada:</label>
                                                                                            <input type="file"
                                                                                                class="form-control input-imagen"
                                                                                                id="portada-edit"
                                                                                                name="img_portada">
                                                                                            <div class="text-center p-3">
                                                                                                <img src="/img/anuncios/{{ $item->img_portada }}"
                                                                                                    id="imagen-preview-portada-edit"
                                                                                                    alt="Vista previa de la imagen"
                                                                                                    class="rounded-3 imagen-preview"
                                                                                                    style="width:300px; height: 200px; object-fit: cover;">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="mb-3 row">
                                                                                            <div class="col-md">
                                                                                                <label>Fecha incio:</label>
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    name="fecha_inicio"
                                                                                                    value="{{ $item->fecha_inicio }}">
                                                                                            </div>

                                                                                            <div class="col-md">
                                                                                                <label>Fecha final:</label>
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    name="fecha_final"
                                                                                                    value="{{ $item->fecha_final }}">
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label for="contenido"
                                                                                                class="col-sm-4 col-form-label">Contenido:</label>

                                                                                            <textarea id="mytextarea" name="contenido" rows="3" placeholder="Contenido">{{ $item->contenido }}</textarea>
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
                                                                    <div class="modal fade"
                                                                        id="eliminarAnuncio{{ $item->id_anuncio }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="eliminarAnuncioLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="eliminarAnuncioLabel">
                                                                                        Confirmar eliminación</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    ¿Estás seguro de que deseas eliminar
                                                                                    este
                                                                                    anuncio?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                                    {{-- Form de eliminar --}}
                                                                                    <form
                                                                                        action="{{ route('anuncios.destroy', $item->id_anuncio) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger">
                                                                                            Eliminar
                                                                                        </button>
                                                                                    </form>
                                                                                    {{-- Fin form de eliminar --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
                                                                        <div class="row mb-3">
                                                                            <div class="col-md-8">
                                                                                <label for="titulo">Título:</label>

                                                                                <input type="text" name="titulo"
                                                                                    class="form-control" id="titulo"
                                                                                    placeholder="Titulo">
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <label
                                                                                    for="tipo_destinatario">Destinatarios:
                                                                                </label>
                                                                                <select class="form-select"
                                                                                    id="tipo_destinatario"
                                                                                    name="tipo_destinatario">
                                                                                    <option value="Todos">Todos</option>
                                                                                    <option value="Compradores">Compradores
                                                                                    </option>
                                                                                    <option value="Vendedores">Vendedores
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="descripcion"
                                                                                class="col-sm-4 col-form-label">Descripción:</label>
                                                                            <input type="text" name="descripcion"
                                                                                class="form-control" id="descripcion"
                                                                                placeholder="Escribe una pequeña descripcion">
                                                                        </div>

                                                                        <div class="mb-3 row">
                                                                            <div class="col-md">
                                                                                <label>Fecha incio:</label>
                                                                                <input type="date" class="form-control"
                                                                                    name="fecha_inicio">
                                                                            </div>
                                                                            <div class="col-md">
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
                                                        @foreach ($alertas as $item)
                                                            <tr>
                                                                <td>{{ $item->id_alerta }}</td>
                                                                <td>{{ $item->titulo }}</td>
                                                                <td>{{ $item->fecha_inicio }}</td>
                                                                <td>{{ $item->fecha_final }}</td>

                                                                <td>
                                                                    <div class="text-center">

                                                                        {{-- Botón de visualizar --}}
                                                                        <button class="btn btn-primary btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#showUserAlertaModal{{ $item->id_alerta }}"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Ver alertas">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-eye"
                                                                                    style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>

                                                                        <!-- Botón de editar con modal -->
                                                                        <button class="btn btn-warning btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editarAlerta{{ $item->id_alerta }}"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Editar Alerta">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-pencil-alt"
                                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>

                                                                        {{-- Botón de eliminar --}}
                                                                        <button class="btn btn-danger btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#eliminarAlerta{{ $item->id_alerta }}">
                                                                            <i class="lni lni-trash"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </button>
                                                                    </div>

                                                                    <!-- Modal de visualizacion -->
                                                                    <div class="modal fade"
                                                                        id="showUserAlertaModal{{ $item->id_alerta }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="showUserAlertaModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="showUserAlertaModal">
                                                                                        Visualizar alertas</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">

                                                                                    <div class="mb-3">
                                                                                        <label>Titulo:</label>
                                                                                        <span
                                                                                            style="white-space: pre-line;">{{ $item->titulo }}</span>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label>Descripción:</label>
                                                                                        <span
                                                                                            style="white-space: pre-line;">{{ $item->descripcion }}</span>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label>Destinatarios:</label>
                                                                                        <span>{{ $item->tipo_destinatario }}</span>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha
                                                                                                incio:
                                                                                                <span>{{ $item->fecha_inicio }}</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm">
                                                                                            <label for="fecha"
                                                                                                class="form-label">Fecha
                                                                                                final:
                                                                                                <span>{{ $item->fecha_final }}</span></label>
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
                                                                    <div class="modal fade"
                                                                        id="editarAlerta{{ $item->id_alerta }}"
                                                                        tabindex="-1" aria-labelledby="editarAlertaLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="editarAlertaLabel">
                                                                                        Editar Alerta</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{{ route('alertas.update', $item->id_alerta) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('PUT')

                                                                                        <input type="hidden"
                                                                                            value="{{ $item->id_estado }}"
                                                                                            name="id_estado">

                                                                                        <div class="row mb-3">
                                                                                            <div class="col-md-8">
                                                                                                <label
                                                                                                    for="titulo">Titulo:</label>

                                                                                                <input type="text"
                                                                                                    name="titulo"
                                                                                                    class="form-control"
                                                                                                    id="titulo"
                                                                                                    placeholder="Titulo"
                                                                                                    value="{{ $item->titulo }}">
                                                                                            </div>

                                                                                            <div class="col-md-4">
                                                                                                <label
                                                                                                    for="tipo_destinatario">Destinatarios:
                                                                                                </label>
                                                                                                <select class="form-select"
                                                                                                    id="tipo_destinatario"
                                                                                                    name="tipo_destinatario">
                                                                                                    <option value="Todos"
                                                                                                        {{ $item->tipo_destinatario == 'Todos' ? 'selected' : '' }}>
                                                                                                        Todos</option>
                                                                                                    <option
                                                                                                        value="Compradores"
                                                                                                        {{ $item->tipo_destinatario == 'Compradores' ? 'selected' : '' }}>
                                                                                                        Compradores</option>
                                                                                                    <option
                                                                                                        value="Vendedores"
                                                                                                        {{ $item->tipo_destinatario == 'Vendedores' ? 'selected' : '' }}>
                                                                                                        Vendedores
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label
                                                                                                for="descripción">Descripción:</label>
                                                                                            <input type="text"
                                                                                                name="descripcion"
                                                                                                class="form-control"
                                                                                                id="descripción"
                                                                                                placeholder="Escribe una pequeña descripción"
                                                                                                value="{{ $item->descripcion }}">
                                                                                        </div>

                                                                                        <div class="mb-3 row">
                                                                                            <div class="col-md">
                                                                                                <label>Fecha incio:</label>
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    name="fecha_inicio"
                                                                                                    value="{{ $item->fecha_inicio }}">
                                                                                            </div>

                                                                                            <div class="col-md">
                                                                                                <label>Fecha final:</label>
                                                                                                <input type="date"
                                                                                                    class="form-control"
                                                                                                    name="fecha_final"
                                                                                                    value="{{ $item->fecha_final }}">
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
                                                                    <div class="modal fade"
                                                                        id="eliminarAlerta{{ $item->id_alerta }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="eliminarAlertaLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="eliminarAlertaLabel">
                                                                                        Confirmar eliminación</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    ¿Estás seguro de que deseas eliminar
                                                                                    esta
                                                                                    alerta?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                                    <form
                                                                                        action="{{ route('alertas.destroy', $item->id_alerta) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger">Eliminar</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
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
