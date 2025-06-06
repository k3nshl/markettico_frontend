@extends('plantilla')

@section('gestion_nombre', 'Gestión de Planes')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-info">
                                    <i class="bx bx-notepad me-2"></i>Planes

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

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="bx bxs-user me-2 font-22 text-info"></i>Lista de Planes</h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaPlanes" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Costo</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>
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
                                                                        data-bs-target="#showPlanModal"
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
                                                                        data-bs-target="#editarPlanModal">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-pencil-alt"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                    {{-- Botón de eliminar --}}
                                                                    <button class="btn btn-danger btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#eliminarPlanModal">
                                                                        <i class="lni lni-trash"
                                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                    </button>
                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showPlanModal" tabindex="-1"
                                                                    aria-labelledby="showUserModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar el plan</h5>
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
                                                                                        <label for="nombre"
                                                                                            class="col-sm-4 col-form-label">Nombre
                                                                                            del plan:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Tipo:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Costo:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="cantidad_productos"
                                                                                            class="col-sm-4 col-form-label">Límite
                                                                                            máximo de venta de
                                                                                            productos:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label
                                                                                            class="col-sm-4 col-form-label">¿Es
                                                                                            multitienda?</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="duracion"
                                                                                            class="col-sm-4 col-form-label">Duración
                                                                                            del plan (en meses):</label>
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
                                                                <div class="modal fade" id="editarPlanModal"
                                                                    tabindex="-1" aria-labelledby="editarPlanModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editarPlanModalLabel">
                                                                                    Editar plan
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                {{-- Form Editar --}}
                                                                                <form
                                                                                    action="{{ route('planes.update', 1) }}"
                                                                                    method="POST">
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    <div class="mb-3">
                                                                                        <label for="nombre"
                                                                                            class="form-label">Nombre del
                                                                                            plan:</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="nombre"
                                                                                            placeholder="Nombre del plan">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="tipo"
                                                                                            class="form-label">Tipo:</label>
                                                                                        <select class="form-select"
                                                                                            id="tipo">
                                                                                            <option value="opcion1">Plan
                                                                                                básico</option>
                                                                                            <option value="opcion2">Plan
                                                                                                empresarial</option>
                                                                                            <option value="opcion3">Plan
                                                                                                premium</option>
                                                                                            <option value="opcion4">Plan
                                                                                                deluxe</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="costo"
                                                                                            class="form-label">Costo:</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            id="costo"
                                                                                            placeholder="Costo">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="cantidad_productos"
                                                                                            class="form-label">Límite
                                                                                            máximo de venta de
                                                                                            productos:</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            id="cantidad_productos"
                                                                                            placeholder="Límite máximo de venta de productos">
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label class="form-label">¿Es
                                                                                            multitienda?</label>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                name="multitienda"
                                                                                                id="multitienda-si"
                                                                                                value="si">
                                                                                            <label class="form-check-label"
                                                                                                for="multitienda-si">Sí</label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                name="multitienda"
                                                                                                id="multitienda-no"
                                                                                                value="no">
                                                                                            <label class="form-check-label"
                                                                                                for="multitienda-no">No</label>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="mb-3">
                                                                                        <label for="duracion"
                                                                                            class="form-label">Duración del
                                                                                            plan (en meses):</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="duracion"
                                                                                            placeholder="Duración del plan">
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


                                                                {{-- Modal Eliminar --}}
                                                                <div class="modal fade" id="eliminarPlanModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="eliminarPlanModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="eliminarPlanModalLabel">
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
                                                                                {{-- form de eliminar --}}
                                                                                <form
                                                                                    action="{{ route('planes.destroy', 1) }}">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger">Eliminar
                                                                                    </button>
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

                            <div class="tab-pane fade" id="tab-registro">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md p-3">
                                        <div class="border p-4 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="bx bx-user-plus me-2 font-22 text-info"></i>Registrar plan
                                                </h5>

                                            </div>

                                            <hr />
                                            {{-- Form Registrar --}}
                                            <form action="{{ route('planes.store') }}" method="POST">
                                                @method('POST')
                                                @csrf
                                                <div class="row mb-3">
                                                    <label for="nombre" class="col-sm-4 col-form-label">Nombre del
                                                        plan:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="nombre"
                                                            placeholder="Nombre del plan">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="tipo" class="col-sm-4 col-form-label">Tipo:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" id="nombre">
                                                            <option value="opcion1">Plan básico</option>
                                                            <option value="opcion2">Plan empresarial</option>
                                                            <option value="opcion3">Plan premium</option>
                                                            <option value="opcion3">Plan deluxe</option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="row mb-3">
                                                    <label for="costo" class="col-sm-4 col-form-label">Costo:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="costo"
                                                            placeholder="Costo">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="cantidad_productos" class="col-sm-4 col-form-label">Límite
                                                        máximo de venta de productos:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control"
                                                            id="cantidad_productos"
                                                            placeholder="Límite máximo de venta de productos">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-sm-4 col-form-label">¿Es multitienda?</label>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="multitienda" id="multitienda-si" value="si">
                                                            <label class="form-check-label"
                                                                for="multitienda-si">Sí</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="es_multitienda" id="multitienda-no" value="no">
                                                            <label class="form-check-label"
                                                                for="multitienda-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="duracion" class="col-sm-4 col-form-label">Duración del
                                                        plan (en meses):</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="duracion"
                                                            placeholder="Duración del plan">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="contenido"
                                                        class="col-sm-4 col-form-label">Características:</label>
                                                    <textarea id="mytextarea" name="textareaEditarAnuncio" rows="3" placeholder="Escribe las características"></textarea>

                                                </div>

                                                <hr>

                                                <div class="row">
                                                    <label class="col-sm-3 col-form-label"></label>
                                                    <div class="col-sm-9 text-end">
                                                        <button type="submit" class="btn btn-info text-white"
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
