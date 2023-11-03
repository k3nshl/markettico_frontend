@extends('plantilla')

@section('contenido')

<div class="row">


    <div class="col-xxl-12 col-xl-12">
       
        

            
                <div class="row">

                  

                    <hr class="mb-4">

                    <div class="col-xxl-12 col-xl-12">

                        
                        <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">



                                    <div class="col-xxl-12 col-xl-12">

                                        <div class="float-end">
                
                                            <h5 class="card-title card-antecendentes">Registrar
                                                <button class="btn btn-sm btnEstandar" style="background-color: #04D9D9;  
                                                color: #F2F2F2;" data-bs-toggle="modal" data-bs-target="#registrar"
                                                >
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                               
                                                
                                            </h5>
                
                                            <div class="modal fade" id="registrar">
                                                <div class="modal-dialog modal-dialog-centered modal-None">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">
                                                                Registrar Estado</h5>
                                                            <button class="btn btn-outline-danger"
                                                                data-bs-dismiss="modal">X</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="px-5 py-2">
                
                                                                <div class=" mb-2">
                                                                    <label for="">Nombre del Estado</label>
                
                                                                    <input type="text" class="form-control"
                                                                        name="nombre" value="" required>
                
                                                                </div>
                
                                                            </div>
                                                        </div>
                
                                                        <div class="modal-footer">
                                                            <button  type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancelar</button>
                
                                                            <button  style="background-color: #04D9D9;  
                                                            color: #F2F2F2;" class="btn">Registrar</button>
                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                        </div>
                
                                    </div>


									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Registar Estados</h5>
                                    
									</div>
									<hr>
									
                                    <table id="example" class="table table-striped table-bordered table-hover" style="border-top: 2px solid #05C7F2;">
                         


                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th class="text-center" style="background-color: #05C7F2;">Id</th>
                                                <th class="text-center" style="background-color: #05C7F2;">Nombre</th>
                                                <th class="text-center" style="background-color: #05C7F2; width: 300px;">Acciones</th>
                                            </tr>
                                        </thead>
            
                                        <tbody>
            
                                            <tr>
                                                <td class="text-center">1</td>
            
                                                <td class="text-center">Activo</td>
            
                                                <td class="text-center">
            
                                                    <a class="btn btn-sm btn-primary" href="" data-bs-toggle="modal"
                                                        data-bs-target="#ver" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
            
                                                    <div class="modal fade" id="ver">
                                                        <div class="modal-dialog modal-dialog-centered modal-None">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Ver Estado</h5>
                                                                    <button class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">X</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="px-5 py-2">
            
                                                                        <div class=" mb-2">
                                                                            
                                                                            <h3>Informacion del Estado</h3>
            
                                                                        </div>
            
                                                                    </div>
                                                                </div>
            
                                                                <div class="modal-footer">
            
                                                                    <button class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <a class="btn btn-sm btn-warning" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editar" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
            
                                                    <div class="modal fade" id="editar">
                                                        <div class="modal-dialog modal-dialog-centered modal-None">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Editar Estado</h5>
                                                                    <button class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">X</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="px-5 py-2" style="text-align: left">
            
                                                                        <div class="mb-2">
                                                                            <label>Nombre del Estado</label>
            
                                                                            <input type="text"
                                                                                class="form-control" name="nombre"
                                                                                value="" required>
            
                                                                        </div>
            
                                                                    </div>
                                                                </div>
            
                                                                <div class="modal-footer">
            
                                                                    <button class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
            
                                                                    <button type="button"
                                                                        class="btn btn-warning">Actualizar</button>
            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#eliminar" style="width: 40px; height: 40px;">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
            
            
                                                    <div class="modal fade" id="eliminar">
                                                        <div class="modal-dialog modal-dialog-centered modal-None">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title colorTitulos">
                                                                       Eliminar Estado</h5>
                                                                    <button class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">X</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="px-5 py-2">
            
                                                                        <div class="text-center mb-2">
            
                                                                            <h5><b>¿Deseas eliminar este estado?</b></h5>
                                                                            <p><b>Nota:</b> Todos los datos relacionados serán
                                                                                eliminados</p>
            
                                                                        </div>
            
                                                                    </div>
                                                                </div>
            
                                                                <div class="modal-footer">
            
                                                                    <button class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
            
                                                                    <form action="" method="POST">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="button"
                                                                            class="btn btn-danger">Eliminar</button>
                                                                    </form>
            
            
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                </td>
            
            
                                            </tr>
            
                                        </tbody>
            
                                    </table>
								
									
								
									
									
								</div>
							</div>
						</div>
                        

                        
                        
                        
                       

                    </div>

                </div>

      

    </div>


</div>
    
@endsection
    
