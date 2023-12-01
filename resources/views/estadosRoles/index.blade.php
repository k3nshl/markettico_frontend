@extends('plantilla')

@section('gestion_nombre', 'Estados/Roles')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item" role="presentation">

                                <a class="nav-link active" data-bs-toggle="pill" href="#tab-estados" role="tab"
                                    aria-selected="true">

                                <a class="nav-link active" data-bs-toggle="pill" href="#success-pills-profile"
                                    role="tab" aria-selected="true">

                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                                        </div>
                                        <div class="tab-title">Estados</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="pill" href="#pills-home" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                        </div>
                                        <div class="tab-title">Roles</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            {{-- Inicio estados --}}
                            <div class="tab-pane show active fade" id="success-pills-profile" role="tabpanel">

                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i class="lni lni-clipboard me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Usuario">
                                                        Lista de
                                                        Estados</h5>
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

                                                    <!-- Modal de agregar estado-->
                                                    <div class="modal fade" id="modalAgregarEstado" tabindex="-1"
                                                        aria-labelledby="modalAgregarEstadoLabel" aria-hidden="true">
                                                        <form action="{{ route('estados.store') }}" method="post">
                                                            @csrf
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="modalAgregarEstadoLabel">
                                                                            Agregar Nuevo Estado</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('estados.store') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <div class="row mb-3">
                                                                                <label for="nombre"
                                                                                    class="col-sm-4 col-form-label">Nombre:</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text"
                                                                                        class="form-control" id="nombre"
                                                                                        name="nombre"
                                                                                        placeholder="Ingrese el nombre del Estado">
                                                                                </div>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-info text-white"
                                                                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                    <i class="bx bx-save"
                                                                                        style="color: #F2F2F2;"></i>
                                                                                    Guardar
                                                                                </button>
                                                                            </div>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            {{-- Listado de estados --}}
                                            @if (session('error'))
                                                <div
                                                    class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                                                    <div class="text-white">{{ session('error') }}</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="table-responsive">
                                                <table id="tablaEstados" class="table table-bordered">
                                                    <thead class="theadEstados">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Nombre</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($estados as $item)
                                                            <tr>
                                                                <td>{{ $item->id_estado }}</td>
                                                                <td>{{ $item->nombre }}</td>
                                                                <td>
                                                                
                                                                    <div class="text-center">
                                                                    

                                                                        <!-- Botón de editar con modal -->
                                                                        <button class="btn btn-warning btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editarEstadoModal"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Editar Estado">
                                                                            <div class="text-center">
                                                                                <i class="lni lni-pencil-alt"
                                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                            </div>
                                                                            
                                                                        </button>
                                                                        {{-- Botón de eliminar --}}
                                                                        <button class="btn btn-danger btn-sm"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#eliminarEstadoModal{{ $item->id_estado }}">
                                                                            <i class="lni lni-trash"
                                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                        </button>
                                                                    </div>

                                                                    <!-- Modal de edición -->
                                                                    <div class="modal fade" id="editarEstadoModal"
                                                                        tabindex="-1"
                                                                        aria-labelledby="editarEstadoModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="editarUsuarioModalLabel">
                                                                                        Editar Estado</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-placement="top"
                                                                                        title="Cerrar"></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="{{ route('estados.update', $item->id_estado) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('PUT')

                                                                                        <div class="row mb-3">
                                                                                            <label for="nombre"
                                                                                                class="col-sm-4 col-form-label">Nombre:</label>
                                                                                            <div class="col-sm-8">
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    id="nombre"
                                                                                                    name="nombre"
                                                                                                    placeholder="Ingrese el nombre del Estado">
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary"
                                                                                                data-bs-dismiss="modal">Cerrar</button>
                                                                                            <button type="submit"
                                                                                                class="btn btn-info text-white"
                                                                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                                <i class="bx bx-save"
                                                                                                    style="color: #F2F2F2;"></i>
                                                                                                Guardar 
                                                                                            </button>
                                                                                        </div>

                                                                                    </form>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Modal de eliminar -->
                                                                    <div class="modal fade"
                                                                        id="eliminarEstadoModal{{ $item->id_estado }}"
                                                                        tabindex="-1"
                                                                        aria-labelledby="eliminarEstadoModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="eliminarEstadoModalLabel">
                                                                                        Confirmar
                                                                                        eliminación</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    ¿Estás seguro de que
                                                                                    deseas eliminar
                                                                                    este estado? 
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                                    <form
                                                                                        action="{{ route('estados.destroy', 20) }}"
                                                                                        method="POST">
                                                                                        @csrf
                                                                                        @method('delete')
                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            data-bs-dismiss="modal"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- Fin estados --}}

                            {{-- Inicio roles --}}
                            <div class="tab-pane fade" id="pills-home" role="tabpanel">

                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">
                                            <div class="card-title d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div><i class="lni lni-clipboard me-1 font-22 text-info"></i>
                                                    </div>
                                                    <h5 class="mb-0 text-dark" title="Agregar Usuario">Lista de
                                                        Roles</h5>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <h5 class="m-0">Registrar</h5>
                                                    </div>
                                                    <div class="me-2">
                                                        <button type="button" class="btn btn-info text-white"
                                                            data-bs-toggle="modal" data-bs-target="#modalAgregarRol"
                                                            style="background-color: #04D9B2; border-color: #04D9D9;"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Agregar Nuevo Rol ">+</button>
                                                    </div>

                                                    <!-- Modal de agregar rol-->
                                                    <div class="modal fade" id="modalAgregarRol" tabindex="-1"
                                                        aria-labelledby="modalAgregarRolLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalAgregarEstadoRol">
                                                                        Agregar Nuevo Rol</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('roles.store') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="row mb-3">
                                                                            <label for="nombre"
                                                                                class="col-sm-4 col-form-label">Nombre
                                                                                del Rol:</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control"
                                                                                    id="nombre" name="nombre"
                                                                                    placeholder="Ingrese el nombre del Rol"required>

                                                                                <input type="hidden" class="form-control"
                                                                                    name="id_estado" value="1">

                                                                            </div>
                                                                        </div>


                                                                        <div class="row mb-3">
                                                                            <label for="id_estado"
                                                                                class="col-sm-4 col-form-label">Estado:
                                                                            </label>
                                                                            <div class="col-sm-8">

                                                                                <select class="form-select" id="id_estado"
                                                                                    name="id_estado">
                                                                                    <option value="1">Activo</option>
                                                                                    <option value="0">Inactivo
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>



                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="submit"
                                                                                class="btn btn-info text-white"
                                                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                <i class="bx bx-save"
                                                                                    style="color: #F2F2F2;"></i>
                                                                                Guardar
                                                                            </button>
                                                                        </div>


                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />

                                            {{-- Listado de roles --}}
                                            <div class="table-responsive">
                                                <table id="tablaRoles" class="table table-bordered">
                                                    <thead class="theadRoles">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                ID
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Nombre</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">
                                                                Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @if ($roles)


                                                            @foreach ($roles as $item)
                                                                <tr>
                                                                    <td>{{ $item->id_rol }}</td>
                                                                    <td>{{ $item->nombre }}</td>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <!-- Botón de editar con modal -->
                                                                            <button class="btn btn-warning btn-sm"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#editarRolModal"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Editar Rol">
                                                                                <div class="text-center">
                                                                                    <i class="lni lni-pencil-alt"
                                                                                        style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                                </div>
                                                                            </button>

                                                                            {{-- Botón de eliminar --}}
                                                                            <button class="btn btn-danger btn-sm"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#eliminarRolModal{{ $item->id_rol }}">
                                                                                <i class="lni lni-trash"
                                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                            </button>
                                                                        </div>



                                                                        <!-- Modal de edición -->
                                                                        <div class="modal fade" id="editarRolModal"
                                                                            tabindex="-1"
                                                                            aria-labelledby="editarRolModalLabel"
                                                                            aria-hidden="true">
                                                                            <div
                                                                                class="modal-dialog modal-dialog-scrollable">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="editarUsuarioModalLabel">
                                                                                            Editar Rol</h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-placement="top"
                                                                                            title="Cerrar"></button>
                                                                                    </div>

                                                                                    <div class="modal-body">
                                                                                        {{-- 2 --}}
                                                                                        {{-- + id_rol a editar --}}
                                                                                        <form
                                                                                            action="{{ route('roles.update', $item->id_rol) }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('PUT')
                                                                                            <div class="row mb-3">
                                                                                                <label for="nombre"
                                                                                                    class="col-sm-4 col-form-label">Nombre
                                                                                                    del Rol:</label>
                                                                                                <div class="col-sm-8">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        id="nombre"
                                                                                                        name="nombre"
                                                                                                        placeholder="Ingrese el nombre del Rol">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row mb-3">
                                                                                                <label for="id_estado"
                                                                                                    class="col-sm-4 col-form-label">Estado:
                                                                                                </label>
                                                                                                <div class="col-sm-8">

                                                                                                    <select
                                                                                                        class="form-select"
                                                                                                        id="id_estado"
                                                                                                        name="id_estado">
                                                                                                        <option
                                                                                                            value="1">
                                                                                                            Activo</option>
                                                                                                        <option
                                                                                                            value="0">
                                                                                                            Inactivo
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="modal-footer">
                                                                                                <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-bs-dismiss="modal">Cerrar</button>
                                                                                                <button type="submit"
                                                                                                    class="btn btn-info text-white"
                                                                                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                                                    <i class="bx bx-save"
                                                                                                        style="color: #F2F2F2;"></i>
                                                                                                    Guardar
                                                                                                </button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Modal de eliminar -->
                                                                        <div class="modal fade"
                                                                            id="eliminarRolModal{{ $item->id_rol }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="eliminarRolModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="eliminarRolModalLabel{{ $item->id_rol }}">
                                                                                            Confirmar
                                                                                            eliminación</h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        ¿Estás seguro de que
                                                                                        deseas eliminar
                                                                                        este rol?
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Cancelar</button>
                                                                                        <!-- Form de eliminar -->
                                                                                        <form
                                                                                            action=" {{ route('roles.destroy', $item->id_rol) }} "
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit"
                                                                                                class="btn btn-danger"
                                                                                                {{--  data-bs-dismiss="modal"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#eliminacionCorrectaModal" --}}>Eliminar
                                                                                            </button>
                                                                                        </form>
                                                                                        <!-- Fin Form de eliminar -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Fin roles --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
