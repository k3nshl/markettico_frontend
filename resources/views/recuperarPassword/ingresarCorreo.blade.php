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
    <title>MarketTico - ¿Olvidaste tu contraseña?</title>
</head>

<body class="bg-login">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 py-3">
                                <div class="mb-4 text-center">
                                    <div>
                                        <img src="../assets/images/logo-markettico-icono.png" class="logo-icon"
                                            alt="logo icon">
                                    </div>
                                    <div>
                                        <h4 class="logo-text">MarketTico</h4>
                                    </div>
                                </div>
                                <h4 class="font-weight-bold">Correo de la cuenta</h4>
                                <p class="text-muted">Escribe la dirección de correo electrónico asociado a tu cuenta.
                                </p>
                                <form action="{{ route('validarLogin') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 mt-4">
                                        <label class="form-label">Correo electrónico</label>
                                        <input type="email" name="correo_empresarial" class="form-control"
                                            placeholder="Ingresar correo" />
                                            <input type="hidden" name="type" value="2">
                                            <input type="hidden" name="emisor" value="markettico23@gmail.com">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Verificar</button>
                                        <a href="{{ route('login') }}" class="btn btn-secondary"></i>Regresar</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
