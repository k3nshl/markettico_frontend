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
    <title>Resultado de Solicitud</title>
</head>

<body class="bg-light">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div>
                                <img src="../assets/images/logo-markettico-icono.png" class="logo-icon" alt="logo icon"> <h4 class="">MarkeTtico</h4>
                            </div>
                        </div>
                        <h2 class="mt-4 font-weight-bold text-center">Resultado de Solicitud</h2>
                        <!-- Cambia el fondo y el color del texto según sea aprobado o rechazado -->
                        <div class="mt-4 text-center">
                            <!-- if aprobado muestra esto -->
                            <h4 class="font-weight-bold">¡Felicidades! Tu solicitud ha sido <span class="badge bg-success">aprobada</span></h4>
                            <hr>
                            <span>A partir de este momento formas parte de los vendedores de Markettico, te invitamos a adquirir el plan que se ajuste a tus necesidades para poder crear tu tienda y vender productos en nuestra marketplace.</span>
                            <div class="d-grid gap-2 my-2">
                                <a type="button" class="btn btn-primary" href="#">Ir a comprar un plan</a>
                            </div>
                            <!-- if rechazado muestra esto -->
                            <h4 class="font-weight-bold">Lo sentimos, tu solicitud ha sido <span class="badge bg-danger">rechazada</span></h4>
                            <span>Motivo aquí</span>
                            <hr>
                            <span>Te invitamos a enviar nuevamente la solicitud con los datos corregidos y actualizados para poder revisar y valorar nuevamente tu solicitud para formar parte de nuestra marketplace como vendedor.</span>
                            <div class="d-grid gap-2 my-2">
                                <a type="button" class="btn btn-primary" href="#">Enviar nueva solicitud</a>
                            </div>
                            <!-- fin if -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
