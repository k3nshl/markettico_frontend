<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="stylesheet" href="{{ asset('../assets/images/logo-markettico-icono.png') }}">
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <title></title>
</head>

<body class="">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-12">
                            <div class="col-lg-12">
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
                                        <h4 class="mt-5 font-weight-bold text-center">Cambio Contraseña</h4>

                                        <p class="text-muted"><h6 class="text-center">Ariana Hernández</h6>Este correo ha sido generado porque se hizo una solicitud de receuperación de contraseña, para tu cuenta!</p>
                                        
                                        <div class="d-grid gap-2 my-5">
                                            <a type="button" class="btn btn-primary" href="">Recuperar Contraseña</a>
                                        </div>
                                        <p>{{$codigo}}</p>

                                        <p class="">Si no realizaste esta solicitud, no se requiere realizar ninguna otra acción.</p>
                                        
                                    </div>
                                </div>
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
