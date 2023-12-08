<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title>Recuperación de Contraseña</title>
</head>

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <div class="p-5">
                                        <div class="mb-4 text-center">
                                            <div>
                                                <img src="../assets/images/logo-markettico-icono.png" class="logo-icon"
                                                    alt="logo icon">
                                            </div>
                                            <div>
                                                <h4 class="logo-text">MarketTico</h4>
                                            </div>
                                        </div>
                                        
                                        <form class="form-body" action="{{ route('guardarCredenciales') }}" method="POST">
											@csrf
                                            <h4 class="mt-5 font-weight-bold text-center">Crear nueva contraseña</h4>
                                            <p class="text-muted text-center">Puedes reestablecer tu contraseña e iniciar sesión nuevamente.
                                            </p>
                                            <input type="hidden" name="user" value="{{$user}}">
                                            <div class="mb-3 mt-5">
                                                <label class="form-label">Nueva contraseña</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Ingresa la Nueva Contraseña" name="nuevaPassword"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Confirmar contraseña</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirmar Contraseña" name="confirmarPassword"/>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" style="background-color: #04D9D9"
                                                    class="btn text-light">Guardar e iniciar sesión</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="assets/images/login-images/forgot-password-frent-img.jpg"
                                    class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
