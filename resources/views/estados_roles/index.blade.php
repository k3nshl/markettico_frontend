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
        <div class="col-xl-9 mx-auto">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                <div class="card-body">

                    <div class="row justify-content-center align-items-center">
                        <div class="col">
                            <div class="border p-3 rounded">
                                <div class="card-title d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i></div>
                                        <h5 class="mb-0 text-info" title="Agregar Usuario">Lista de estados</h5>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <h5 class="m-0">Registrar</h5>
                                        </div>
                                        <div class="me-2">
                                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalAgregarUsuario" style="background-color: #04D9B2; border-color: #04D9D9;" data-bs-placement="top" title="Agregar Usuario Administrativo">+</button>
                                        </div>

                                        <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="modalAgregarUsuarioLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalAgregarUsuarioLabel">
                                                            Agregar Usuario Administrativo</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row mb-3">
                                                                <label for="nombre_completo" class="col-sm-4 col-form-label">Nombre de
                                                                    Usuario:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="nombre_completo" placeholder="Nombre de Usuario">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="password" class="col-sm-4 col-form-label">Contraseña:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="correo_empresarial" class="col-sm-4 col-form-label">Correo
                                                                    Empresarial:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control" id="correo_empresarial" placeholder="Correo Empresarial">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="numero_telefonico" class="col-sm-4 col-form-label">Número
                                                                    Telefónico:</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="numero_telefonico" placeholder="Número Telefónico">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="id_rol" class="col-sm-4 col-form-label">Rol del
                                                                    Usuario:</label>
                                                                <div class="col-sm-8">
                                                                    <select class="form-select" id="id_rol">
                                                                        <option value="superadmin">Superadmin
                                                                        </option>
                                                                        <option value="administrador">
                                                                            Administrador</option>
                                                                        <option value="moderador">Moderador
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="id_estado" class="col-sm-4 col-form-label">Estado
                                                                    del
                                                                    Usuario:</label>
                                                                <div class="col-sm-8">

                                                                    <select class="form-select" id="id_estado">
                                                                        <option value="activo">Activo</option>
                                                                        <option value="inactivo">Inactivo
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-info text-white" style="background-color: #04D9D9; border-color: #04D9D9;">
                                                            <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                            Guardar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <div id="tablaUsuariosAdmin_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12"><div id="tablaUsuariosAdmin_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="tablaUsuariosAdmin_length"><label>Show <select name="tablaUsuariosAdmin_length" aria-controls="tablaUsuariosAdmin" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="tablaUsuariosAdmin_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tablaUsuariosAdmin"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="tablaUsuariosAdmin" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="tablaUsuariosAdmin_info">
                                        <thead class="theadUsuariosAdministradores">
                                            <tr role="row"><th class="sweezy-custom-cursor-hover sorting_asc" tabindex="0" aria-controls="tablaUsuariosAdmin" rowspan="1" colspan="1" aria-label="ID: activate to sort column descending" style="width: 60.1406px; cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABU5JREFUWEe9l2tsFFUUx//nzsy23RaKaZnStN3dCQWMaCAQCUFNMBalRqNgiR8sIjF+JNQYIdHEKGh8RB4JGu2GIBoiREQRISomysM14iOIPLQFO9N0+8BdGuhj233MXHN3ZrfLuttKNTvJZHf23rvnd/7n3HPuEPJcHo9nFWPsJSKaCaAdwHO6rn+eb/5kf6dcC71e7wpG7JNqWFjCEzhOMkIgyzTNxq6urqOTNZZrXU4ATdNOVXBr0XEMwc0IAxLhrrgbA6BvDMO4pxAAfQ1IVPmlUUCi5L06WoTvTNZhGIYIyf925VPg8jKWUFtdUYDZAM0RFwKJQgJIptpaEgMk2ACDCgKxQgIoptpaFk+HoPmqjMAoFTAERabaWp4AZJZUoTkkITBSSIBiS22tNMcU6GUIRFBABdxcba2yANlJwiAQGCwkQBlXW2u4rYBMaNaBwAAvnAINU7nq99reJwEuWghc5RxAD+d87/Dw8KZwODz4XwtCZh0oqqmpmd7d3d2jaVpvwzSo/pksHYKt3Rb6LaBtiOOHK5ZgOs85X22aphkMBtsARCcDkwTw+XwtRLQJwBTOeSeA6csqyO2fIzm7QKhg1wMoDAcuW3j61ChkUaTs6xqALbquvwLAuhEQ8nq9jxGjPbe5gYZphH1hoC8GNFQS/HPldAiSyegkpIDYfDaG6ikMikw49GcMv/QmQITdnPMdkUikPRQKDf0bEPL5fD+rLiw8OV+CixEuWYS7T8XROEOCf54yZjRlPAWS+exiWPf1EI78EYNIEiKMWpa10zTNDcFgcGQ8EAEQebiKlWyrlxyJCY0/xVFXSvAvdNkhyDbuJGYqQcV4OAHs/z2KqaUMx9qj+PK8CBFE97wXgJkPIgmwsloq2XKzkBtJY5svmega4fAvLs4dgsxwpGCyFNl+cgjbDl8DgT/Z2dm5Ky+Apmlt88pp9qeLXXbnkwlnI8COthj8d5ZkeC+UcBIxW5VsRSSCWcywYGMQgyP8qK7r942nwG4C1px70A13OskIfQlghtuRP9O7tMeiR2QkZmqOo6LQf60/hGNnIn2GYVTnBfB4PE0gtn/7kmKs8DhJl9PgWFEai73dqK4DcQ4wQskN+/rx8beDcV3XXXkBamtrS2RZ7l6gSjcdaCxLhyEzwXJ6mgsyZdz5bHk/hM+ODUYMwyjNCyAGvF7vGyanZw+vmop5laL4CG9zyJ+W2ZE+8zlt3FHExbDyxSB+bY+267o+ZyKAaiK6dHut4v6oqRxgGcmWGef0d3u3JCFTIcj0XiaMMMLcRy+KuvCBYRhrxgUQg5qmvRw3+fNvPVKOh2YX2QayZc6GyZI8vUsYYd/3g9i4tU9sw6bOzs4DEwKIXFAU5Te3jPqvWlTUlGUVoH8YEwrg+pwRcxghrhCWPtWB3r8SXbqui1N0fEIAMaG2tnaRoign6lW56OB61d6WqTtZI0Ro8sieNA5AIby+9wre2RMWJXmtYRi7xy3F2YM+n+8JAO/N97iwp6UKpS5m//F4Cecc3cWcQz8OYd0LQTAJXxiGcf9EDSnne4HP51sPYJtnukw7n6nGrEqnKybD4CRoZkgEoIvh3YP9eO3tyyCGCwDuMAzj6qQAxCLxcipJ0i5wXta8vByPL5+Geo/LbitJj21VrCKGE6eHsXVXCGcujECS6GQ0Gl3Z09MTnsi4GM+pQGphXV3dTFmWtwN4IBqzUKMquHVWMSqEIkQIheM4fS6C/gETisyucc5fNQzjzfG6XzbUuACpyZqmzbEsq4kxtpRzfgsRVThjIQBnOOdHGGMfdnR0iJPRDV1/A/S02zBdMZSwAAAAAElFTkSuQmCC&quot;) 6 3, pointer !important;" aria-sort="ascending">ID</th><th class="sweezy-custom-cursor-hover sorting" tabindex="0" aria-controls="tablaUsuariosAdmin" rowspan="1" colspan="1" aria-label="Nombre del estado: activate to sort column ascending" style="width: 275.25px; cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABU5JREFUWEe9l2tsFFUUx//nzsy23RaKaZnStN3dCQWMaCAQCUFNMBalRqNgiR8sIjF+JNQYIdHEKGh8RB4JGu2GIBoiREQRISomysM14iOIPLQFO9N0+8BdGuhj233MXHN3ZrfLuttKNTvJZHf23rvnd/7n3HPuEPJcHo9nFWPsJSKaCaAdwHO6rn+eb/5kf6dcC71e7wpG7JNqWFjCEzhOMkIgyzTNxq6urqOTNZZrXU4ATdNOVXBr0XEMwc0IAxLhrrgbA6BvDMO4pxAAfQ1IVPmlUUCi5L06WoTvTNZhGIYIyf925VPg8jKWUFtdUYDZAM0RFwKJQgJIptpaEgMk2ACDCgKxQgIoptpaFk+HoPmqjMAoFTAERabaWp4AZJZUoTkkITBSSIBiS22tNMcU6GUIRFBABdxcba2yANlJwiAQGCwkQBlXW2u4rYBMaNaBwAAvnAINU7nq99reJwEuWghc5RxAD+d87/Dw8KZwODz4XwtCZh0oqqmpmd7d3d2jaVpvwzSo/pksHYKt3Rb6LaBtiOOHK5ZgOs85X22aphkMBtsARCcDkwTw+XwtRLQJwBTOeSeA6csqyO2fIzm7QKhg1wMoDAcuW3j61ChkUaTs6xqALbquvwLAuhEQ8nq9jxGjPbe5gYZphH1hoC8GNFQS/HPldAiSyegkpIDYfDaG6ikMikw49GcMv/QmQITdnPMdkUikPRQKDf0bEPL5fD+rLiw8OV+CixEuWYS7T8XROEOCf54yZjRlPAWS+exiWPf1EI78EYNIEiKMWpa10zTNDcFgcGQ8EAEQebiKlWyrlxyJCY0/xVFXSvAvdNkhyDbuJGYqQcV4OAHs/z2KqaUMx9qj+PK8CBFE97wXgJkPIgmwsloq2XKzkBtJY5svmega4fAvLs4dgsxwpGCyFNl+cgjbDl8DgT/Z2dm5Ky+Apmlt88pp9qeLXXbnkwlnI8COthj8d5ZkeC+UcBIxW5VsRSSCWcywYGMQgyP8qK7r942nwG4C1px70A13OskIfQlghtuRP9O7tMeiR2QkZmqOo6LQf60/hGNnIn2GYVTnBfB4PE0gtn/7kmKs8DhJl9PgWFEai73dqK4DcQ4wQskN+/rx8beDcV3XXXkBamtrS2RZ7l6gSjcdaCxLhyEzwXJ6mgsyZdz5bHk/hM+ODUYMwyjNCyAGvF7vGyanZw+vmop5laL4CG9zyJ+W2ZE+8zlt3FHExbDyxSB+bY+267o+ZyKAaiK6dHut4v6oqRxgGcmWGef0d3u3JCFTIcj0XiaMMMLcRy+KuvCBYRhrxgUQg5qmvRw3+fNvPVKOh2YX2QayZc6GyZI8vUsYYd/3g9i4tU9sw6bOzs4DEwKIXFAU5Te3jPqvWlTUlGUVoH8YEwrg+pwRcxghrhCWPtWB3r8SXbqui1N0fEIAMaG2tnaRoign6lW56OB61d6WqTtZI0Ro8sieNA5AIby+9wre2RMWJXmtYRi7xy3F2YM+n+8JAO/N97iwp6UKpS5m//F4Cecc3cWcQz8OYd0LQTAJXxiGcf9EDSnne4HP51sPYJtnukw7n6nGrEqnKybD4CRoZkgEoIvh3YP9eO3tyyCGCwDuMAzj6qQAxCLxcipJ0i5wXta8vByPL5+Geo/LbitJj21VrCKGE6eHsXVXCGcujECS6GQ0Gl3Z09MTnsi4GM+pQGphXV3dTFmWtwN4IBqzUKMquHVWMSqEIkQIheM4fS6C/gETisyucc5fNQzjzfG6XzbUuACpyZqmzbEsq4kxtpRzfgsRVThjIQBnOOdHGGMfdnR0iJPRDV1/A/S02zBdMZSwAAAAAElFTkSuQmCC&quot;) 6 3, pointer !important;">Nombre del estado</th><th class="sweezy-custom-cursor-hover sorting" tabindex="0" aria-controls="tablaUsuariosAdmin" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 227.734px; cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABU5JREFUWEe9l2tsFFUUx//nzsy23RaKaZnStN3dCQWMaCAQCUFNMBalRqNgiR8sIjF+JNQYIdHEKGh8RB4JGu2GIBoiREQRISomysM14iOIPLQFO9N0+8BdGuhj233MXHN3ZrfLuttKNTvJZHf23rvnd/7n3HPuEPJcHo9nFWPsJSKaCaAdwHO6rn+eb/5kf6dcC71e7wpG7JNqWFjCEzhOMkIgyzTNxq6urqOTNZZrXU4ATdNOVXBr0XEMwc0IAxLhrrgbA6BvDMO4pxAAfQ1IVPmlUUCi5L06WoTvTNZhGIYIyf925VPg8jKWUFtdUYDZAM0RFwKJQgJIptpaEgMk2ACDCgKxQgIoptpaFk+HoPmqjMAoFTAERabaWp4AZJZUoTkkITBSSIBiS22tNMcU6GUIRFBABdxcba2yANlJwiAQGCwkQBlXW2u4rYBMaNaBwAAvnAINU7nq99reJwEuWghc5RxAD+d87/Dw8KZwODz4XwtCZh0oqqmpmd7d3d2jaVpvwzSo/pksHYKt3Rb6LaBtiOOHK5ZgOs85X22aphkMBtsARCcDkwTw+XwtRLQJwBTOeSeA6csqyO2fIzm7QKhg1wMoDAcuW3j61ChkUaTs6xqALbquvwLAuhEQ8nq9jxGjPbe5gYZphH1hoC8GNFQS/HPldAiSyegkpIDYfDaG6ikMikw49GcMv/QmQITdnPMdkUikPRQKDf0bEPL5fD+rLiw8OV+CixEuWYS7T8XROEOCf54yZjRlPAWS+exiWPf1EI78EYNIEiKMWpa10zTNDcFgcGQ8EAEQebiKlWyrlxyJCY0/xVFXSvAvdNkhyDbuJGYqQcV4OAHs/z2KqaUMx9qj+PK8CBFE97wXgJkPIgmwsloq2XKzkBtJY5svmega4fAvLs4dgsxwpGCyFNl+cgjbDl8DgT/Z2dm5Ky+Apmlt88pp9qeLXXbnkwlnI8COthj8d5ZkeC+UcBIxW5VsRSSCWcywYGMQgyP8qK7r942nwG4C1px70A13OskIfQlghtuRP9O7tMeiR2QkZmqOo6LQf60/hGNnIn2GYVTnBfB4PE0gtn/7kmKs8DhJl9PgWFEai73dqK4DcQ4wQskN+/rx8beDcV3XXXkBamtrS2RZ7l6gSjcdaCxLhyEzwXJ6mgsyZdz5bHk/hM+ODUYMwyjNCyAGvF7vGyanZw+vmop5laL4CG9zyJ+W2ZE+8zlt3FHExbDyxSB+bY+267o+ZyKAaiK6dHut4v6oqRxgGcmWGef0d3u3JCFTIcj0XiaMMMLcRy+KuvCBYRhrxgUQg5qmvRw3+fNvPVKOh2YX2QayZc6GyZI8vUsYYd/3g9i4tU9sw6bOzs4DEwKIXFAU5Te3jPqvWlTUlGUVoH8YEwrg+pwRcxghrhCWPtWB3r8SXbqui1N0fEIAMaG2tnaRoign6lW56OB61d6WqTtZI0Ro8sieNA5AIby+9wre2RMWJXmtYRi7xy3F2YM+n+8JAO/N97iwp6UKpS5m//F4Cecc3cWcQz8OYd0LQTAJXxiGcf9EDSnne4HP51sPYJtnukw7n6nGrEqnKybD4CRoZkgEoIvh3YP9eO3tyyCGCwDuMAzj6qQAxCLxcipJ0i5wXta8vByPL5+Geo/LbitJj21VrCKGE6eHsXVXCGcujECS6GQ0Gl3Z09MTnsi4GM+pQGphXV3dTFmWtwN4IBqzUKMquHVWMSqEIkQIheM4fS6C/gETisyucc5fNQzjzfG6XzbUuACpyZqmzbEsq4kxtpRzfgsRVThjIQBnOOdHGGMfdnR0iJPRDV1/A/S02zBdMZSwAAAAAElFTkSuQmCC&quot;) 6 3, pointer !important;">Acciones</th></tr>
                                        </thead>
                                        <tbody>
                                            
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">1</td>
                                                <td class="sorting_1">EjemploUsuario</td>
                                                
                                                
                                                
                                                
                                                
                                                <td>

                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="lni lni-eye" style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                    </button>

                                                    <!-- Botón de editar con modal -->
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal" data-bs-placement="top" title="Editar Usuario Administrativo">
                                                        <div class="text-center">
                                                            <i class="lni lni-pencil-alt" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </div>
                                                    </button>


                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editarUsuarioModal" tabindex="-1" aria-labelledby="editarUsuarioModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editarUsuarioModalLabel">
                                                                        Editar Usuario Administrativo</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Cerrar"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="editNombreUsuario" class="form-label">Nombre de
                                                                                Usuario</label>
                                                                            <input type="text" class="form-control" id="editNombreUsuario">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="editCorreoEmpresarial" class="form-label">Correo
                                                                                Empresarial</label>
                                                                            <input type="email" class="form-control" id="editCorreoEmpresarial">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="editNumeroTelefonico" class="form-label">Número
                                                                                Telefónico</label>
                                                                            <input type="text" class="form-control" id="editNumeroTelefonico">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="editRolUsuario" class="form-label">Rol del
                                                                                Usuario</label>
                                                                            <select class="form-select" id="editRolUsuario">
                                                                                <option value="superadmin">
                                                                                    Superadmin
                                                                                </option>
                                                                                <option value="administrador">
                                                                                    Administrador
                                                                                </option>
                                                                                <option value="moderador">
                                                                                    Moderador</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="editEstadoUsuario" class="form-label">Estado
                                                                                del
                                                                                Usuario</label>
                                                                            <select class="form-select" id="editEstadoUsuario">
                                                                                <option value="activo">
                                                                                    Activo</option>
                                                                                <option value="inactivo">
                                                                                    Inactivo</option>
                                                                            </select>
                                                                        </div>

                                                                    </form>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-info text-white" style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                                        Guardar
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarUsuarioModal">
                                                        <i class="lni lni-trash" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                    </button>
                                                    <div class="modal fade" id="eliminarUsuarioModal" tabindex="-1" aria-labelledby="eliminarUsuarioModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="eliminarUsuarioModalLabel">Confirmar
                                                                        eliminación</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar este usuario
                                                                    administrativo?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="tablaUsuariosAdmin_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="tablaUsuariosAdmin_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="tablaUsuariosAdmin_previous"><a href="#" aria-controls="tablaUsuariosAdmin" data-dt-idx="0" tabindex="0" class="page-link">Prev</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="tablaUsuariosAdmin" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="tablaUsuariosAdmin_next"><a href="#" aria-controls="tablaUsuariosAdmin" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div></div></div><div class="row"></div></div>
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
    
