@extends('plantilla')

@section('gestion_nombre', 'Gestión de Subcategorías')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                @if (session('success'))
                                    <div class="alert alert-success border-0 alert-dismissible fade show mt-3">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif (session('mistake'))
                                    <div class="alert alert-danger border-0 alert-dismissible fade show mt-3">
                                        <ul>
                                            @foreach (session('mistake')->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                            <h5 class="mb-0 text-dark" title="Agregar SubCategoría">Lista de Subcategorias
                                                de {{ $itemCategoria->nombre }}
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h5 class="m-0">Registrar</h5>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-info text-white"
                                                    data-bs-toggle="modal" data-bs-target="#modalAgregarSubCategoria"
                                                    style="background-color: #04D9B2; border-color: #04D9D9;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Agregar Nueva Subcategoria">+</button>
                                            </div>

                                            <!-- Modal de agregar -->
                                            <div class="modal fade" id="modalAgregarSubCategoria" tabindex="-1"
                                                aria-labelledby="modalAgregarSubCategoriaLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalAgregarSubCategoria">
                                                                Agregar Nueva subcategoría</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action=" {{ route('subcategorias.store') }}"
                                                                method="POST">
                                                                @csrf

                                                                <input type="hidden" name="id_estado" value="1">
                                                                <div class="row mb-3">
                                                                    <input type="text" class="form-control"
                                                                        name="id_categoria"
                                                                        value="{{ $itemCategoria->id_categoria }}" hidden>
                                                                    <label for="nombre"
                                                                        class="col-sm-4 col-form-label">Nombre:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            id="nombre" name="nombre"
                                                                            placeholder="Ingrese el nombre">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="descripcion"
                                                                        class="col-sm-4 col-form-label">Descripción:</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            id="descripcion" name="descripcion"
                                                                            placeholder="Ingrese la descripción">
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-info text-white"
                                                                        style="background-color: #04D9D9; border-color: #04D9D9;">
                                                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
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
                                    {{-- Lista de subcategorías --}}
                                    <div class="table-responsive">
                                        <table class="tablas table table-bordered">
                                            <thead class="theadRoles">
                                                <tr>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Nombre</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Descripción</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Estado</th>
                                                    <th class="bg_datatable"
                                                        style="background-color: #05C7F2; color: #F2F2F2">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                @foreach ($subcategorias as $item)
                                                    <tr>
                                                        <td>{{ $item->id_subcategoria }}</td>
                                                        <td>{{ $item->nombre }}</td>
                                                        <td>{{ $item->descripcion }}</td>
                                                        <td>
                                                            @if ($item->estado->id_estado == 1)
                                                                <span
                                                                    class="badge bg-success">{{ $item->estado->nombre }}</span>
                                                            @elseif ($item->estado->id_estado == 2)
                                                                <span
                                                                    class="badge bg-danger">{{ $item->estado->nombre }}</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <!-- Botón de editar con modal -->
                                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#editarCategoriaModal{{ $item->id_subcategoria }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Editar Categoria">
                                                                <div class="text-center">
                                                                    <i class="lni lni-pencil-alt"
                                                                        style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                                </div>
                                                            </button>

                                                            <!-- Modal de edición -->
                                                            <div class="modal fade"
                                                                id="editarCategoriaModal{{ $item->id_subcategoria }}"
                                                                tabindex="-1" aria-labelledby="editarCategoriaModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="editarCategoriaModalLabel">
                                                                                Editar Categoría</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Cerrar"></button>
                                                                        </div>

                                                                        <div class="modal-body">
                                                                            <form
                                                                                action=" {{ route('subcategorias.update', $item->id_subcategoria) }}"
                                                                                method="POST">
                                                                                @method('PUT')
                                                                                @csrf
                                                                                <div class="row mb-3">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="id_categoria"
                                                                                        value="{{ $itemCategoria->id_categoria }}"
                                                                                        hidden>
                                                                                    <label for="nombre"
                                                                                        class="col-sm-4 col-form-label">Nombre:</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="nombre" name="nombre"
                                                                                            value="{{ $item->nombre }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <label for="descripcion"
                                                                                        class="col-sm-4 col-form-label">Descripción:</label>
                                                                                    <div class="col-sm-8">
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="descripcion"
                                                                                            name="descripcion"
                                                                                            value="{{ $item->descripcion }}">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row mb-3">
                                                                                    <label for="id_estado"
                                                                                        class="col-sm-4 col-form-label">Estado:
                                                                                    </label>
                                                                                    <div class="col-sm-8">

                                                                                        <select class="form-select"
                                                                                            id="id_estado"
                                                                                            name="id_estado">
                                                                                            @foreach ($estados as $items)
                                                                                                <option
                                                                                                    value="{{ $items->id_estado }}"
                                                                                                    {{ $items->id_estado == $item->id_estado ? 'selected' : '' }}>
                                                                                                    {{ $items->nombre }}
                                                                                                </option>
                                                                                            @endforeach


                                                                                        </select>
                                                                                    </div>
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

                                                            <!-- Boton eliminar -->
                                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                                data-bs-target="#eliminarCategoriaModal{{ $item->id_subcategoria }}">
                                                                <i class="lni lni-trash"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </button>

                                                            <!-- Modal de eliminación -->
                                                            <div class="modal fade"
                                                                id="eliminarCategoriaModal{{ $item->id_subcategoria }}"
                                                                tabindex="-1"
                                                                aria-labelledby="eliminarCategoriaModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="eliminarCategoriaModalLabel">Confirmar
                                                                                eliminación</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            ¿Estás seguro de que deseas eliminar esta
                                                                            subcategoría?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Cancelar</button>
                                                                            <!-- Form de eliminación -->
                                                                            <form
                                                                                action="{{ route('subcategorias.destroy', $item->id_subcategoria) }}"
                                                                                method="POST">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                                <button class="btn btn-danger"
                                                                                    data-bs-target="#eliminacionCorrectaModal">Eliminar
                                                                                </button>
                                                                            </form>
                                                                            <!-- Form de eliminación -->
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
                                    <hr>
                                    <div class="text-end">
                                        <a href="{{ route('categorias.index') }}"
                                            class="btn btn-secondary">Regresar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        </div>
        </div>




    @endsection
