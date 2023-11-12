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
    <title>Resultado de Solicitud</title>
</head>

<body class="">
    <!-- wrapper -->
    <div class="wrapper">
        <div class=" d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card">
                        <div class="row g-12">
                            <div class="col-lg-12 border-end">
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
                                        <h2 class="mt-5 font-weight-bold text-center">Resultado de Solicitud</h2>

                                        <!-- Cambia el fondo y el color del texto según sea aprobado o rechazado -->
                                        <div class="mt-5 text-center" style="background-color: #28a745; color: #fff; padding: 15px; border-radius: 10px;">
                                            @if($aprobado)
                                                <h4 class="font-weight-bold">¡Felicidades! Tu solicitud ha sido aprobada</h4>
                                            @else
                                                <h4 class="font-weight-bold">Lo sentimos, tu solicitud ha sido rechazada</h4>
                                            @endif
                                        </div>

                                        <!-- Agrega aquí cualquier información adicional que desees mostrar -->

                                    </div>

                                    <div class="d-grid gap-2 my-5">
                                        <a type="button" class="btn btn-primary" href="{{route('inicio')}}">Volver a la Página Principal</a>
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
