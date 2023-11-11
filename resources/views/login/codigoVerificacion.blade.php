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
	<title>MarketTico-iniciar Sesión</title>
</head>

<body class="bg-login">
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
										<h4 class="mt-5 font-weight-bold">Código Verificación</h4>
										<p class="text-muted">Has recibido un código de verificación a tu correo empresarial!</p>
										<div class="mb-3 mt-5">
											<label class="form-label">Código</label>
											<input type="text" class="form-control" placeholder="Ingresar Código de Verificación" />
										</div>  
										<div class="d-grid gap-2">
											<button type="button" class="btn btn-primary">Verificar</button> 
                                            <a href="{{route("login.index")}}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Regresar al Login</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="assets/images/login-images/Autenticacion-en-dos-pasos.jpg" class="card-img login-img h-100" alt="...">
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