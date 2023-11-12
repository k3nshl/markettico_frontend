@extends('plantilla')

@section('gestion_nombre', 'Historiales')

@section('contenido')
    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
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
                                    data-bs-target="#tab-acciones">
                                    <i class="bx bx-notepad me-2"></i> Acciones
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
                            <div class="tab-pane  show active fade" id="tab-gestionRoles">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Historial rol">Historial de Roles
                                                    </h5>
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="table-responsive">
                                                <table id="tablaHistorialRoles" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <p class="badge bg-primary">Administrador</p>
                                                            </td>
                                                            <td>Pedrito</td>
                                                            <td>lunes</td>
                                                            <td>No sé</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                <table id="tablaHistorialGestionCuentas" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha y
                                                                Hora
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Acción
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Usuario
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Martes</td>
                                                            <td>No sé</td>
                                                            <td>Nanami Kento</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-acciones">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Historia de
                                                        Acciones</h5>
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="table-responsive">
                                                <table id="tablaHistorialAcciones" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Fauricio</td>
                                                            <td>Jueves</td>
                                                            <td>No sé</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-suspencion">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i
                                                            class="fadeIn animated bx bx-notepad me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="">Historial de Suspenciones
                                                    </h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaHistorialSuspenciones" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">

                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Subscripción
                                                            </th>
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
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>holiholi</td>
                                                            <td>20-20-21</td>
                                                            <td>

                                                                <div class="text-center">

                                                                    {{-- Botón de visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showHistorialSuspencionesModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
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
                                                                    aria-labelledby="showHistorialSuspencionesModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showHistorialSuspencionesModalLabel">
                                                                                    Visualizar historial de suspención</h5>
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



                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                        gestión de página</h5>
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaHistorialPaginas" class="table table-bordered">
                                                    <thead class="theadUsuariosAdministradores">
                                                        <tr class="text-center">
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Página de
                                                                Información
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2"> Fecha y
                                                                hora
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>10-10-10</td>
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
