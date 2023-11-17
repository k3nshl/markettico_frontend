@extends('plantilla')

@section('gestion_nombre', 'Moderador/Contenido')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">

                                    <div class="d-flex justify-content-between align-items-end mb-3">
                                        <h5 class="text-dark"><i class="lni lni-radio-button me-2 font-22 text-info"></i>
                                            Reseñas
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
                                                        style="background-color: #05C7F2; color: #F2F2F2">Comprador</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Producto-Servicio
                                                    </th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Vendedor</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>EjemploComprador</td>
                                                    <td>NombreProducto-Servicio</td>
                                                    <td>EjemploVendedor</td>
                                                    <td>
                                                        <div class="text-center">

                                                            {{-- Botón de Visualizar --}}
                                                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#showModal" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Visualizar">
                                                                <div class="text-center">
                                                                    <i class="lni lni-eye"
                                                                        style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                </div>
                                                            </button>

                                                            {{-- Botón de eliminar --}}
                                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#eliminarModal">
                                                                <i class="lni lni-trash"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </button>

                                                        </div>

                                                        <!-- Modal de visualizacion -->
                                                        <div class="modal fade" id="showModal" data-backdrop="static"
                                                            data-keyboard="false" tabindex="-1"
                                                            aria-labelledby="showUserModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="showPlanModalLabel">
                                                                            Visualizar Reseña</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"
                                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Cerrar"></button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="row mb-3">
                                                                                <label for="nombre"
                                                                                    class="col-sm-4 col-form-label">Comprador:</label>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label for="tipo"
                                                                                    class="col-sm-4 col-form-label">Producto-Servicio:</label>
                                                                            </div>


                                                                            <div class="row mb-3">
                                                                                <label for="costo"
                                                                                    class="col-sm-4 col-form-label">Vendedor:</label>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label for="costo"
                                                                                    class="col-sm-4 col-form-label">Mensaje:</label>
                                                                            </div>

                                                                            <div class="row mb-3">
                                                                                <label for="costo"
                                                                                    class="col-sm-4 col-form-label">Puntuación:</label>
                                                                            </div>

                                                                        </form>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Regresar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal de eliminar -->
                                                        <div class="modal fade" id="eliminarModal" tabindex="-1"
                                                            aria-labelledby="eliminarRolModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="eliminarModalLabel">
                                                                            Confirmar
                                                                            eliminación</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        ¿Estás seguro de que deseas eliminar
                                                                        esta reseña?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                        <!-- Form de eliminar -->
                                                                        <form action="">
                                                                            <button type="button" class="btn btn-danger"
                                                                                data-bs-dismiss="modal"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#eliminacionCorrectaModal">Eliminar
                                                                            </button>
                                                                        </form>
                                                                        <!-- Fin form de eliminar -->
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
    </section>

@endsection
