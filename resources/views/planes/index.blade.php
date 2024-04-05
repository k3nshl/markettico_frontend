@extends('plantilla')

@section('gestion_nombre', 'Gestión de Planes')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-md mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab" data-bs-target="#tab-info"
                                    id="btn_tab_info">
                                    <i class="bx bx-notepad me-2"></i>Planes

                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab" data-bs-target="#tab-registro"
                                    id="btn_tab_registro">
                                    <i class="bx bx-user-plus"></i> Registro de planes
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade" id="tab-info">
                                @if (session('success'))
                                    <div class="alert alert-success border-0 alert-dismissible fade show mt-3">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif (session('mistake'))
                                    <div class="alert alert-danger border-0 alert-dismissible fade show mt-3">
                                        <ul>
                                            @foreach (session('mistake')->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="bx bxs-user me-2 font-22 text-info"></i>Lista de Planes</h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
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
                                                        @foreach ($planes as $item)
                                                            <tr>
                                                                <td>{{ $item->id_plan }}</td>
                                                                <td>{{ $item->nombre }}</td>
                                                                <td>{{ $item->costo }}</td>
                                                                <td>
                                                                    <div class="text-center">

                                                                        {{-- Botón de Visualizar --}}
                                                                        <button class="btn btn-primary btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#showPlanModal{{ $item->id_plan }}"
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
                                                                            data-bs-target="#editarPlanModal{{ $item->id_plan }}">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-pencil-alt"
                                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>

                                                                        {{-- Botón de eliminar --}}
                                                                        <button class="btn btn-danger btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#eliminarPlanModal{{ $item->id_plan }}">
                                                                            <i class="lni lni-trash"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </button>
                                                                    </div>


                                                                    <!-- Modal de visaualizacion -->
                                                                    <div class="modal fade"
                                                                        id="showPlanModal{{ $item->id_plan }}"
                                                                        tabindex="-1" aria-labelledby="showPlanModalLabel"
                                                                        aria-hidden="true">
                                                                        <div
                                                                            class="modal-dialog modal-dialog-scrollable modal-fullscreen-lg-down">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="showUserModalLabel">
                                                                                        Visualizar el plan
                                                                                    </h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body mt-2">
                                                                                    <form class="row g-3">
                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="showNombreUsuario"
                                                                                                class="form-label h6">Nombre
                                                                                                del plan:</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->nombre }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label
                                                                                                for="showCorreoEmpresarial"
                                                                                                class="form-label h6">Tipo:</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->tipo }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label
                                                                                                for="showNumeroTelefonico"
                                                                                                class="form-label h6">Costo:</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->costo }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="showRolUsuario"
                                                                                                class="form-label h6" style="word-wrap: break-word">Cantidad de productos:</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->cantidad_productos }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="showEstadoUsuario"
                                                                                                class="form-label h6">¿Es
                                                                                                multitienda?</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->multitienda == 1 ? 'Sí' : 'No' }}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-6 mb-3">
                                                                                            <label for="showEstadoUsuario"
                                                                                                class="form-label h6">Duración
                                                                                                del plan (en meses):</label>
                                                                                            <div class=" p-2 rounded">
                                                                                                <p
                                                                                                    class="form-control-plaintext m-0">
                                                                                                    {{ $item->duracion }}
                                                                                                </p>
                                                                                            </div>
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
                                                                    <div class="modal fade"
                                                                        id="editarPlanModal{{ $item->id_plan }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="editarPlanModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="editarPlanModalLabel">
                                                                                        Editar plan
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    {{-- FOOOOOORM EDIIIIIIIIT --}}

                                                                                    <form
                                                                                        action="{{ route('planes.update', $item->id_plan) }}"
                                                                                        method="POST">
                                                                                        @method('PUT')
                                                                                        @csrf

                                                                                        <div class="mb-3">
                                                                                            <label for="nombre"
                                                                                                class="form-label">Nombre
                                                                                                del plan:</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="nombre"
                                                                                                name="nombre"
                                                                                                placeholder="Nombre del plan"
                                                                                                value="{{ old('nombre', $item->nombre) }}">
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label for="tipo"
                                                                                                class="form-label">Tipo:</label>
                                                                                            <select class="form-select"
                                                                                                id="tipo"
                                                                                                name="tipo">
                                                                                                <option
                                                                                                    value="Plan vendedor"
                                                                                                    {{ $item->tipo == 'Plan vendedor' ? 'selected' : '' }}>
                                                                                                    Plan vendedor</option>
                                                                                                <option
                                                                                                    value="Plan publicista"
                                                                                                    {{ $item->tipo == 'Plan publicista' ? 'selected' : '' }}>
                                                                                                    Plan publicista</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label for="costo"
                                                                                                class="form-label">Costo:</label>
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                id="costo"
                                                                                                name="costo"
                                                                                                placeholder="Costo"
                                                                                                value="{{ old('costo', $item->costo) }}">
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label for="cantidad_productos"
                                                                                                class="form-label">Límite
                                                                                                máximo de venta de
                                                                                                productos:</label>
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                id="cantidad_productos"
                                                                                                name="cantidad_productos"
                                                                                                placeholder="Límite máximo de venta de productos"
                                                                                                value="{{ old('cantidad_productos', $item->cantidad_productos) }}">
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label class="form-label">¿Es
                                                                                                multitienda?</label>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="multitienda"
                                                                                                    id="multitienda-si"
                                                                                                    value="si"
                                                                                                    {{ $item->multitienda == 1 ? 'checked' : '' }}>
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="multitienda-si">Sí</label>
                                                                                            </div>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    type="radio"
                                                                                                    name="multitienda"
                                                                                                    id="multitienda-no"
                                                                                                    value="no"
                                                                                                    {{ $item->multitienda == 0 ? 'checked' : '' }}>
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="multitienda-no">No</label>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="mb-3">
                                                                                            <label for="duracion"
                                                                                                class="form-label">Duración
                                                                                                del plan (en meses):</label>
                                                                                            <input type="number"
                                                                                                class="form-control"
                                                                                                id="duracion"
                                                                                                name="duracion"
                                                                                                placeholder="Duración del plan"
                                                                                                value="{{ old('duracion', $item->duracion) }}">
                                                                                        </div>

                                                                                        <div class="row mb-3">
                                                                                            <label for="contenido"
                                                                                                class="col-sm-4 col-form-label">Características:</label>
                                                                                            <textarea class="summernoteTextarea" name="descripcion" rows="3"
                                                                                                placeholder="Escribe las características del plan">{{ old('descripcion', $item->descripcion) }}</textarea>
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


                                                                    {{-- Modal Eliminar --}}
                                                                    <div class="modal fade"
                                                                        id="eliminarPlanModal{{ $item->id_plan }}"
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
                                                                                    <button type="button"
                                                                                        class="btn-close"
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
                                                                                    {{-- FOOOOOORM ELIMINAAAR --}}
                                                                                    <form
                                                                                        action="{{ route('planes.destroy', $item->id_plan) }}"
                                                                                        method="POST">
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
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-registro">
                                @if (session('successStore'))
                                    <div class="alert alert-success border-0 alert-dismissible fade show mt-3">
                                        {{ session('successStore') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif (session('mistakeStore'))
                                    <div class="alert alert-danger border-0 alert-dismissible fade show mt-3">
                                        <ul>
                                            @foreach (session('mistakeStore')->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md p-3">
                                        <div class="border p-4 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="bx bx-user-plus me-2 font-22 text-info"></i>Registrar plan
                                                </h5>

                                            </div>

                                            <hr />
                                            <!--  FOOOORM REGISTROOOOOOOOOOOOOOOOO -->
                                            <form action="{{ route('planes.store') }}" method="POST">
                                                @method('POST')
                                                @csrf

                                                <div class="row mb-3">
                                                    <label for="nombre" class="col-sm-4 col-form-label">Nombre del
                                                        plan:</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="nombre"
                                                            name="nombre" placeholder="Nombre del plan"
                                                            value="{{ old('nombre') }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="tipo" class="col-sm-4 col-form-label">Tipo:</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" id="tipo" name="tipo">
                                                            <option value="Plan vendedor">Plan vendedor</option>
                                                            <option value="Plan publicista">Plan publicista</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="costo" class="col-sm-4 col-form-label">Costo:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="costo"
                                                            name="costo" placeholder="Costo"
                                                            value="{{ old('costo') }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="cantidad_productos" class="col-sm-4 col-form-label">Cantidad de productos limite a publicar:</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control"
                                                            id="cantidad_productos" name="cantidad_productos"
                                                            placeholder="Límite máximo de venta de productos"
                                                            value="{{ old('cantidad_productos') }}">
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
                                                                name="multitienda" id="multitienda-no" value="no">
                                                            <label class="form-check-label"
                                                                for="multitienda-no">No</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="duracion" class="col-sm-4 col-form-label">Duración del
                                                        plan (en meses):</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="duracion"
                                                            name="duracion" placeholder="Duración del plan"
                                                            value="{{ old('duracion') }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3"></div>
                                                <label for="contenido"
                                                    class="col-sm-4 col-form-label">Características:</label>
                                                <textarea class="summernoteTextarea" name="descripcion" rows="3"
                                                    placeholder="Escribe las características del plan">{{ old('textareaEditarAnuncio') }}</textarea>
                                        </div>

                                        <hr>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
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
            </div>
        </div>
    </section>
@endsection

@section('js')

    <script>
        $(document).ready(function() {
            setTab();
        });

        // Tabs de info y registro
        $('#btn_tab_info').click(function() {
            localStorage.setItem('tabActivo', 'info');
        });

        $('#btn_tab_registro').click(function() {
            localStorage.setItem('tabActivo', 'registro');
        });

        function setTab() {
            var tabActivo = localStorage.getItem('tabActivo');
            if (tabActivo == 'info') {
                $('#btn_tab_info').addClass('active');
                $('#tab-info').addClass('show');
                $('#tab-info').addClass('active');
            } else if (tabActivo == 'registro') {
                $('#btn_tab_registro').addClass('active');
                $('#tab-registro').addClass('show');
                $('#tab-registro').addClass('active');
            } else {
                $('#btn_tab_info').addClass('active');
                $('#tab-info').addClass('show');
                $('#tab-info').addClass('active');
            }
        }
    </script>

@endsection
