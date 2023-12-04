@extends('plantilla')

@section('gestion_nombre', 'Perfil')

@section('contenido')

    <section class="content">
        @if (session('success') == 'true')
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#PassModal").modal("show");
                });
            </script>
        @endif
        <div class="container" id="container_perfil">
            <div class="card col-sm-8 mx-auto mt-4 border-top border-0 border-4 border-info" id="card_perfil">
                <div class="card-body" id="cardbody_perfil">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="../assets/images/avatars/logo-marketitco-avatar-adminuser.png" alt="Admin" class="rounded-circle p-1"
                            width="110" style="background-color: #04D9B2;">
                        <div class="mt-3 profile-info">
                            <h4>{{ Auth::user()->nombre_completo }}</h4>
                            <p class="text-secondary mb-1">{{ Auth::user()->roles->nombre }}</p>
                        </div>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Rol:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="id_rol">{{ Auth::user()->roles->nombre }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Estado:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="id_estado">{{ Auth::user()->estados->nombre }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nombre completo:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="nombre_completo">{{ Auth::user()->nombre_completo }}</span>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Correo empresarial:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="correo_empresarial">{{ Auth::user()->correo_empresarial }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Número telefónico:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="numero_telefonico">{{ Auth::user()->numero_telefonico }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Fecha y hora:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="fecha_hora">{{ Auth::user()->fecha_hora }}</span>
                        </div>
                    </div>

                    <div class="row mb-3 password-container">
                        <div class="col-sm-3 text-secondary">
                        </div>
                    </div>

                    <div class="row mb-1 password-container">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Contraseña:</h6>
                        </div>
                        <div class="col-sm-6 col-8 text-secondary">
                            <input type="password" value="{{ Auth::user()->password }}" class="form-control" id="passwordInput" readonly disabled>
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
                                    <form action="{{ route('contrasena.actual') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="mb-3">
                                            <label for="VerificarContraLabel" class="form-label">Digite su contraseña
                                                actual:</label>
                                            <input type="text" class="form-control" id="password" name="password">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                Verificar
                                            </button>

                                        </div>
                                    </form>
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

                                {{-- Form cambiar contraseña --}}
                                <form action="{{ route('actualizar.password') }}" method="POST">
                                    @method('POST')
                                    @csrf

                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="passwordLabel" class="form-label">Contraseña nueva:</label>
                                            <input type="text" class="form-control" id="password" name="password">
                                        </div>


                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-info text-white"
                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                            <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                            Guardar
                                        </button>
                                    </div>
                                </form>
                                {{-- Fin Form cambiar contraseña --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
