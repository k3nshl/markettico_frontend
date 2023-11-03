@extends('plantilla')

@section('gestion_nombre', 'Estados/Roles')

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
                                                                    <label>Nombre del Estado</label>
                
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

<section class="content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                <div class="card-body text-center">

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <div class="border p-3 rounded">
                                <div class="card-title d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                        <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de Estados</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <h5 class="m-0">Registrar</h5>
                                        </div>
                                        <div class="me-2">
                                            <button type="button" class="btn btn-info text-white"
                                                data-bs-toggle="modal" data-bs-target="#modalAgregarEstado"
                                                style="background-color: #04D9B2; border-color: #04D9D9;"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Agregar Nuevo Estado">+</button>
                                        </div>

                                        <div class="modal fade" id="modalAgregarEstado" tabindex="-1"
                                            aria-labelledby="modalAgregarEstadoLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalAgregarEstadoLabel">
                                                            Agregar Nuevo Estado</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row mb-3">
                                                                <label for="nombre"
                                                                    class="col-sm-4 col-form-label">Nombre del Estado:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        id="nombre" name="nombre"
                                                                        placeholder="Ingrese el nombre del Estado">
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-info text-white"
                                                            style="background-color: #04D9D9; border-color: #04D9D9;">
                                                            <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                            Guardar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="table-responsive">
                                    <table id="tablaEstados" class="table table-bordered">
                                        <thead class="theadEstados">
                                            <tr>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Nombre</th>
                                                <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Activo</td>
                                                <td>
                                                    
                                                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#showEstadoModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Visualizar Estado">
                                                        <div class="text-center">
                                                            <i class="lni lni-eye"
                                                            style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>

                                                    <!-- Modal de visaualizacion -->
                                                    <div class="modal fade" id="showEstadoModal" tabindex="-1"
                                                        aria-labelledby="showEstadoModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="showEstadoModalLabel">Visualizar Estado</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Nombre del estado</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Regresar</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Botón de editar con modal -->
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#editarEstadoModal" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Editar Estado">
                                                        <div class="text-center">
                                                            <i class="lni lni-pencil-alt"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>


                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editarEstadoModal" tabindex="-1"
                                                        aria-labelledby="editarEstadoModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="editarUsuarioModalLabel">
                                                                        Editar Estado</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-placement="top"
                                                                        title="Cerrar"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="editarNombreEstado"
                                                                                class="form-label">Nombre del Estado</label>
                                                                            <input type="text" class="form-control"
                                                                                id="editarNombreEstado">
                                                                        </div>

                                                                    </form>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button"
                                                                        class="btn btn-info text-white"
                                                                        style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                        <i class="bx bx-save"
                                                                            style="color: #F2F2F2;"></i>
                                                                        Guardar
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#eliminarEstadoModal">
                                                        <i class="lni lni-trash"
                                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                    </button>

                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="eliminarEstadoModal" tabindex="-1"
                                                        aria-labelledby="eliminarEstadoModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="eliminarEstadoModalLabel">Confirmar
                                                                        eliminación</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar este estado?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal" data-bs-toggle="modal"
                                                                        data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
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
    </div>
</section>



    
@endsection
    
