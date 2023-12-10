@extends('plantilla')

@section('gestion_nombre', 'Historiales')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-md mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-gestionEstados">
                                    <i class="bx bx-notepad me-2"></i> Estados
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-gestionRoles">
                                    <i class="bx bx-notepad me-2"></i> Roles
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-gestionCuentas">
                                    <i class="bx bx-notepad me-2"></i> Cuentas
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-suspencion">
                                    <i class="bx bx-notepad me-2"></i> Suspenciones
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-gestionPaginas">
                                    <i class="bx bx-notepad me-2"></i> Páginas
                                </button>
                            </li>
                        </ul>


                        <div class="tab-content">

                            {{-- Historial Estados --}}
                            <div class="tab-pane  show active fade" id="tab-gestionEstados">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Historial rol">Historial de gestión
                                                        estados
                                                    </h5>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID Estado
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Estado
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Usuario
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha y
                                                                hora
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($historial_estados as $item)
                                                            <tr>
                                                                <td>{{ $item->id_estado }}</td>
                                                                <td>{{ $item->nombre_estado }}</td>
                                                                <td>{{ $item->usuario->correo_empresarial }}</td>
                                                                <td>{{ $item->fecha_hora }}</td>
                                                                <td>{{ $item->accion }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Historial Roles --}}
                            <div class="tab-pane fade" id="tab-gestionRoles">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Historial rol">Historial de gestión de
                                                        roles
                                                    </h5>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID Rol
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Rol
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Usuario
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha y
                                                                hora
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acción
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($historial_roles as $item)
                                                            <tr>
                                                                <td>{{ $item->id_rol }}</td>
                                                                <td>{{ $item->nombre_rol }}</td>
                                                                <td>{{ $item->usuario->correo_empresarial }}</td>
                                                                <td>{{ $item->fecha_hora }}</td>
                                                                <td>{{ $item->accion }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Historial Cuentas --}}
                            <div class="tab-pane fade" id="tab-gestionCuentas">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Historial de
                                                        gestión de cuentas</h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID Cuenta
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Correo
                                                                Cuenta
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha y
                                                                hora
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acción
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        @foreach ($historial_cuentas as $item)
                                                            <tr>
                                                                <td>{{ $item->id_usuario }}</td>
                                                                <td>{{ $item->email_usuario }}</td>
                                                                <td>{{ $item->fecha_hora }}</td>
                                                                <td>{{ $item->accion }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Historial Suspenciones --}}
                            <div class="tab-pane fade" id="tab-suspencion">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Historial de suspenciones de
                                                        suscripciones
                                                    </h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID
                                                                Suscripcion</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Descripción
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha de
                                                                suspención
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acciones
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        @foreach ($historial_suspenciones as $item)
                                                            <tr>
                                                                <td>{{ $item->id_suscripcion }}</td>
                                                                <td>{{ $item->descripcion }}</td>
                                                                <td>{{ $item->fecha_suspencion }}</td>
                                                                <td>

                                                                    <div class="text-center">
                                                                        {{-- Botón de visualizar --}}
                                                                        <button class="btn btn-primary btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#showHistorialSuspencionesModal{{ $item->id_historial }}"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top"
                                                                            title="Visualizar historial de suspención">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-eye"
                                                                                    style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                        </button>
                                                                    </div>

                                                                    <!-- Modal de visualizacion -->
                                                                    <div class="modal fade"
                                                                        id="showHistorialSuspencionesModal" tabindex="-1"
                                                                        aria-labelledby="showHistorialSuspencionesModal{{ $item->id_historial }}"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="showHistorialSuspencionesModalLabel">
                                                                                        Visualizar historial de suspención
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <div class="row mb-3">
                                                                                        <label for="Labelsuscripcion"
                                                                                            class="col-sm-4 col-form-label">Subscripción:
                                                                                            <span>Acá</span></label>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="labelDescripcion"
                                                                                            class="col-sm-4 col-form-label">Descripción:
                                                                                            <span>Acá</span></label>

                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <label for="Suspencion_fecha"
                                                                                            class="col-sm-4 col-form-label">Fecha:
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

                            {{-- Historial Páginas --}}
                            <div class="tab-pane fade" id="tab-gestionPaginas">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Historial de
                                                        gestión de páginas</h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table class="tablas table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID Página
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Título
                                                                Página
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2"> Fecha y
                                                                hora
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($historial_paginas as $item)
                                                            <tr>
                                                                <td>{{ $item->id_pagina_informacion }}</td>
                                                                <td>{{ $item->titulo_pagina_informacion }}</td>
                                                                <td>{{ $item->fecha_hora }}</td>
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
