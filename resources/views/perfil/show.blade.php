@extends('plantilla')

@section('gestion_nombre', 'Perfil')

@section('contenido')

    <section class="content">

        <div class="container" id="container_perfil">
            <div class="card col-sm-8 mx-auto mt-4 border-top border-0 border-4 border-info" id="card_perfil">
                <div class="card-body" id="cardbody_perfil">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1"
                            width="110" style="background-color: #04D9B2;">
                        <div class="mt-3 profile-info">
                            <h4>Delia Smith</h4>
                            <p class="text-secondary mb-1">Full Stack Developer</p>
                            <p class="text-muted font-size-sm">Limón city</p>
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Rol:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="id_rol">Moderadora</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Estado:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="id_estado">Activo</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nombre completo:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="nombre_completo">Charlotte Rojas Padilla</span>
                        </div>
                    </div>


                    <div class="row mb-1 password-container">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Contraseña:</h6>
                        </div>
                        <div class="col-sm-6 col-8 text-secondary">
                            <input type="password" value="123" class="form-control" id="passwordInput" readonly>
                        </div>
                        <div class="col-sm-3 col-4 text-end">
                            <div class="d-flex flex-column">
                                <button class="btn btn-sm mb-2 mb-sm-0" data-bs-toggle="modal"
                                    data-bs-target="#VerificarContra" style="background-color: #04D9B2; color: #F2F2F2">
                                    Cambiar Contraseña
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de verificar contra actual -->
                    <div class="modal fade" id="VerificarContra" tabindex="-1" aria-labelledby="PassModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="VerificarContraLabel">
                                        Verificar contraseña actual</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>

                                {{-- Modal verificar contraseña actual --}}
                                <div class="modal-body">
                                    <form>

                                        <div class="mb-3">
                                            <label for="VerificarContraLabel" class="form-label">Digite su contraseña
                                                actual:</label>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-info text-white"
                                        style="background-color: #04D9D9; border-color: #04D9D9;" data-bs-toggle="modal"
                                        data-bs-target="#PassModal" data-bs-dismiss="modal">
                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                        Verificar
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de cambiar pass -->
                    <div class="modal fade" id="PassModal" tabindex="-1" aria-labelledby="PassModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="PassModalLabel">
                                        Cambiar Contraseña</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <form>

                                        <div class="mb-3">
                                            <label for="passwordLabel" class="form-label">Contraseña nueva:</label>
                                            <input type="text" class="form-control" id="password">
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

                    <div class="row mb-3 password-container">
                        <div class="col-sm-3 text-secondary">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Correo empresarial:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="correo_empresarial">charrojas@ucr.ac.cr</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Número telefónico:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="numero_telefonico">60020469</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Fecha y hora:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="fecha_hora">10-10-10 8:30</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
