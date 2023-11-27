@extends('plantilla')

@section('gestion_nombre', 'Solicitud/Vendedor')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-espera">
                                    <i class="lni lni-alarm-clock"></i> Espera

                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-aprobados">
                                    <i class="fadeIn animated bx bx-check-double"></i> Aprobados
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-rechazados">
                                    <i class="fadeIn animated bx bx-message-alt-x"></i> Rechazados
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- tab-Espera -->

                            <div class="tab-pane  show active fade" id="tab-espera">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="lni lni-alarm-clock me-2 font-22 text-info"></i>Solicitudes
                                                    en Espera
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaSolicitudEspera" class="table table-bordered">
                                                    <thead class="theadSolicitudEspera">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre del
                                                                usuario</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Correo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha de
                                                                solicitud</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploUsuario</td>
                                                            <td>ejemplo@empresa.com</td>
                                                            <td>08/11/2023</td>
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showEsperaModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showEsperaModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar solicitud en espera</h5>
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
                                                                                            completo
                                                                                            :</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Cedula:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Correo
                                                                                            electrónico:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Número
                                                                                            telefónico:</label>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">

                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar
                                                                                </button>
                                                                                </form>
                                                                                <form action="" method="POST">
                                                                                    <button type="button"
                                                                                        class="btn btn-success"
                                                                                        data-bs-dismiss="modal">Aprobar
                                                                                    </button>
                                                                                </form>
                                                                                <form action="" method="POST">
                                                                                    @csrf
                                                                                    <button type="button"
                                                                                        class="btn btn-danger"
                                                                                        data-bs-dismiss="modal"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#showAfirmacionModal">Rechazar
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Modal de confirmacion de Rechazo -->
                                                                <div class="modal fade" id="showAfirmacionModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Motivo de rechazo</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form action="" method="POST">
                                                                                    @method('POST')
                                                                                    @csrf


                                                                                    <div class="mb-3 ">
                                                                                        <label for="nombre_completo"
                                                                                            class="col-sm-4 col-form-label">Motivo
                                                                                            de rechazo:</label>

                                                                                        <form method="post">
                                                                                            <textarea class="form-control" name="cotenido" rows="5" placeholder="Ingrese el motivo aqui"></textarea>
                                                                                        </form>
                                                                                    </div>


                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#showEsperaModal">Regresar</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-success">Confirmar</button>

                                                                            </div>
                                                                            </form>
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

                            <!-- tab-Aprobados -->

                            <div class="tab-pane fade" id="tab-aprobados">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="fadeIn animated bx bx-check-double me-2 font-22 text-info"></i>Solicitudes
                                                    Aprobadas
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaSolicitudAprobados" class="table table-bordered">
                                                    <thead class="theadSolicitudAprobados">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre
                                                                del
                                                                usuario</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Correo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha de
                                                                solicitud</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploUsuario</td>
                                                            <td>ejemplo@empresa.com</td>
                                                            <td>08/11/2023</td>
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showAprobadosModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showAprobadosModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar solicitud aprobada</h5>
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
                                                                                            completo
                                                                                            :</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Cedula:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Correo
                                                                                            electrónico:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Número
                                                                                            telefónico:</label>
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

                            <!-- tab-Rechazados -->

                            <div class="tab-pane fade" id="tab-rechazados">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="fadeIn animated bx bx-message-alt-x me-2 font-22 text-info"></i>Solicitudes
                                                    Rechazadas
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaSolicitudRechazados" class="table table-bordered">
                                                    <thead class="theadSolicitudRechazados">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre
                                                                del
                                                                usuario</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Correo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha de
                                                                solicitud</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploUsuario</td>
                                                            <td>ejemplo@empresa.com</td>
                                                            <td>08/11/2023</td>
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showRechazadosModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showRechazadosModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar solicitud rechazada</h5>
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
                                                                                            completo
                                                                                            :</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Cedula:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Correo
                                                                                            electrónico:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Número
                                                                                            telefónico:</label>
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

                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
