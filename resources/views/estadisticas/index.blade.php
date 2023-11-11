@extends('plantilla')

@section('gestion_nombre', 'Gestión de Estadisticas')

@section('contenido')


                
 <section class="content">

 

<div class="page-content">

<div class="row">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card radius-10 overflow-hidden">
                <div class="card-body">
                    <p>Ingresos Mensuales</p>
                    <h4 class="mb-0">7,493 <small class="font-13">1.4% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
                </div>
                <div class="chart-container-2">
                    <canvas id="chart4" width="245" height="210" style="display: block; width: 245px; height: 210px;" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
        <div class="container">
    <div class="row">
        <!-- Primera tarjeta a la izquierda en pantallas grandes -->
        <div class="col-lg-6">
            <div class="card radius-10 bg-gradient-ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">1000</h5>
                        <div class="ms-auto">
                            <i class="bx bx-group fs-3 text-white"></i>
                        </div>
                    </div>
                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center text-white">
                        <p class="mb-0">Usuarios Registrados</p>
                        <p class="mb-0 ms-auto"><span><i class=""></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Segunda tarjeta a la derecha en pantallas grandes -->
        <div class="col-lg-6">
            <div class="card radius-10 bg-gradient-orange">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">$8323</h5>
                        <div class="ms-auto">
                            <i class="bx bx-dollar fs-3 text-white"></i>
                        </div>
                    </div>
                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center text-white">
                        <p class="mb-0">Ventas por planes</p>
                        <p class="mb-0 ms-auto"><span><i class=""></i></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tercera tarjeta abajo ocupando todo el ancho -->
        <div class="col-12">
            <div class="card radius-10 bg-gradient-ohhappiness">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-white">620</h5>
                        <div class="ms-auto">
                            <i class="bx bx-group fs-3 text-white"></i>
                        </div>
                    </div>
                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center text-white">
                        <p class="mb-0">Vendedores Suspendidos</p>
                        <p class="mb-0 ms-auto"><span><i class=""></i></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>



                   
					
					</div><!--end row-->














				
				<div class="row">
					<div class="col-12 col-lg-8 col-xl-8 d-flex">
					   <div class="card radius-10 w-100" hidden>
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Site Traffic</h6>
								</div>
								<div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>New Visitor</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ade2f9"></i>Old Visitor</span>
							</div>
						   <div class="chart-container-1"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
							 <canvas id="chart1" width="661" height="260" style="display: block; width: 661px; height: 260px;" class="chartjs-render-monitor"></canvas>
						   </div>
						</div>
						<div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">45.87M</h5>
							  <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">15:48</h5>
							  <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
							</div>
						  </div>
						  <div class="col">
							<div class="p-3">
							  <h5 class="mb-0">245.65</h5>
							  <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
							</div>
						  </div>
						</div>
					   </div>
					</div>
			   
					<div class="col-12 col-lg-4 col-xl-4 d-flex " >
					   <div class="card radius-10 overflow-hidden w-100" hidden>
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Weekly sales</h6>
								</div>
								<div class="font-22 ms-auto text-white"><i class="bx bx-dots-horizontal-rounded"></i>
								</div>
							</div>
							<div class="chart-container-2 my-3"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
							  <canvas id="chart2" width="302" height="210" style="display: block; width: 302px; height: 210px;" class="chartjs-render-monitor"></canvas>
							 </div>
						  </div>
						  <div class="table-responsive">
							<table class="table align-items-center mb-0">
							  <tbody>
								<tr>
								  <td><i class="bx bxs-circle me-2" style="color: #14abef"></i> Direct</td>
								  <td>$5856</td>
								  <td>+55%</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle me-2" style="color: #02ba5a"></i>Affiliate</td>
								  <td>$2602</td>
								  <td>+25%</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle me-2" style="color: #d13adf"></i>E-mail</td>
								  <td>$1802</td>
								  <td>+15%</td>
								</tr>
								<tr>
								  <td><i class="bx bxs-circle me-2" style="color: #fba540"></i>Other</td>
								  <td>$1105</td>
								  <td>+5%</td>
								</tr>
							  </tbody>
							</table>
						  </div>
						</div>
					</div>
				   </div><!--End Row-->
						
						

                             
							 
					 </div><!--End Row-->

					 <div class="row">
						<div class="col-12 col-lg-6 col-xl-4 d-flex">
						  <div class="card radius-10 overflow-hidden w-100" hidden>
							 <div class="card-body">
							   <p>Total Earning</p>
							   <h4 class="mb-0">$287,493</h4>
							   <small>1.4% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
							   <hr>
							   <p>Total Sales</p>
							   <h4 class="mb-0">$87,493</h4>
							   <small>5.43% <i class="zmdi zmdi-long-arrow-up"></i> Since Last Month</small>
							   <div class="mt-5">
							   <div class="chart-container-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
								 <canvas id="chart5" width="302" height="162" style="display: block; width: 302px; height: 162px;" class="chartjs-render-monitor"></canvas>
								</div>
							  </div>
							 </div>
						  </div>
						</div>
				  

                        <!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/jquery-knob/excanvas.js"></script>
	<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>



    <div class="col-12 col-lg-6 " hidden>
							   <div class="card radius-10 overflow-hidden">
								<div class="card-body">
								   <p>Page Views</p>
								   <h4 class="mb-0">8,293 <small class="font-13">5.2% <i class="zmdi zmdi-long-arrow-up"></i></small></h4>
								</div>
								<div class="chart-container-2"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
								  <canvas id="chart3" width="245" height="210" style="display: block; width: 245px; height: 210px;" class="chartjs-render-monitor"></canvas>
								</div>
							  </div>
							 </div>
					  
            </section>  
@endsection