<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    {{-- Estilos propios del proyecto --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}">

    <title>MarketTico-iniciar Sesión</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <div>
                                        <img src="../assets/images/logo-markettico-icono.png" class="logo-icon"
                                            alt="logo icon">
                                    </div>
                                    <div>
                                        <h4 class="logo-text">MarketTico</h4>
                                    </div>
                                </div>

                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Inicia sesión</h3>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>INICA SESIÓN CON TU CORREO
                                            EMPRESARIAL Y
                                            CONTRASEÑA</span>
                                        <hr />
                                    </div>
                                    @if (session('error'))
                                        <div class="alert alert-danger border-0 alert-dismissible fade show mt-3">
                                            <div class="text-dark">{{ session('error') }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning border-0 alert-dismissible fade show mt-3">
                                            <div class="text-dark">{{ session('warning') }}</div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="form-body">
                                        <form action="{{ route('validarLogin') }}" class="row g-3" method="POST">
                                            @csrf
                                            <input type="hidden" name="emisor" value="markettico23@gmail.com">
                                            <input type="hidden" name="type" value="1">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Correo
                                                    Empresarial</label>
                                                <input type="user" name="correo_empresarial" class="form-control"
                                                    id="inputUser" placeholder="Correo Empresarial">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Contraseña</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password"
                                                        class="form-control border-end-0" id="inputPassword"
                                                        value="" placeholder="Ingresa Contraseña"> <a
                                                        href="javascript:;" class="input-group-text bg-transparent"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                            </div>
                                            <div class="col-md-6 text-end">

                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bx bxs-lock-open"></i>Inicia Sesión</button>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-4 text-center">
                                                <a href="{{ route('recuperarPassword') }}">¿Olvidaste tu
                                                    contraseña?</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
