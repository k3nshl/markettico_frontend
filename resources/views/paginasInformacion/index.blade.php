@extends('plantilla')


@section('gestion_nombre', 'Páginas estáticas')

@section('contenido')

{{-- {{$data_paginas}} --}}

    <section class="content">

        <div class="container">
            <div class="card border-top border-0 border-4 border-info" style="margin: 5%">

                <div class="card-body">
                    <div class="row">


                        <div class="col-md-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="text-dark"><i class="bx bx-notepad me-2 font-22  text-info"></i>Agregar Página
                                </h5>
                            </div>

                            <hr>

                            <form action="{{ route('paginasInformacion.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <input type="hidden">

                                <div class="mb-3">
                                    <label for="titulo" class="form-label">Título:</label>
                                    <input type="text" name="titulo" class="form-control" id="titulo"
                                        placeholder="Título de página">
                                </div>
                                <div class="mb-3">
                                    <label for="descripcion" class="form-label">Descripción:</label>
                                    <input type="text" name="descripcion" class="form-control" id="descripcion"
                                        placeholder="Descripción">
                                </div>
                                <div class="mb-3">
                                    <label for="icono" class="form-label">Icono:</label>
                                    <input type="file" class="form-control" id="icono" name="icono">
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-info"
                                        style="background-color: #04D9D9; border-color: #04D9D9; color: #F2F2F2;">
                                        <i class="bx bx-save" style="color: #F2F2F2;"></i> Guardar
                                    </button>
                                </div>
                            </form>

                        </div>



                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-end mb-3">
                                <h5 class="text-dark"><i class="bx bx-notepad me-2 font-22 text-info"></i>Lista de
                                    Páginas</h5>

                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table id="tablaColeccion" class="table table-bordered">
                                    <thead class="theadUsuariosAdministradores">
                                        <tr>

                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                ID</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Nombre</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Descripción</th>
                                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">
                                                Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp

                                        @foreach ($data_paginas as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->nombre }}</td>
                                                <td>{{ $item->descripcion }}</td>
                                                <td>
                                                    <div class="text-center">

                                                        <a href="{{ route('paginasInformacion.show', $item->id_pagina_informacion) }}"
                                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Visualizar Artículo">
                                                            <div class="text-center">
                                                                <i class="lni lni-eye"
                                                                    style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                            </div>
                                                        </a>

                                                        <!-- Botón de editar con modal -->
                                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#editarColeccionModal{{$item->id_pagina_informacion}}" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Editar Colección">
                                                            <div class="text-center">
                                                                <i class="lni lni-pencil-alt"
                                                                    style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                            </div>
                                                        </button>

                                                        {{-- Botón eliminar --}}
                                                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                            data-bs-target="#eliminarPaginaModal{{$item->id_pagina_informacion}}">
                                                            <i class="lni lni-trash"
                                                                style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                                        </button>
                                                    </div>

                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editarColeccionModal{{$item->id_pagina_informacion}}" tabindex="-1"
                                                        aria-labelledby="editarColeccionModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editarColeccionModalLabel{{$item->id_pagina_informacion}}">
                                                                        Editar Colección</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Cerrar"></button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('paginasInformacion.update', $item->id_pagina_informacion) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="titulo"
                                                                                class="form-label">Título:</label>
                                                                            <input type="text" name="titulo"
                                                                                class="form-control" id="titulo"
                                                                                placeholder="Título de página" value="{{$item->titulo}}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="descripcion"
                                                                                class="form-label">Descripción:</label>
                                                                            <input type="text" name="descripcion"
                                                                                class="form-control" id="descripcion"
                                                                                placeholder="Descripción" value="{{$item->descripcion}}">
                                                                        </div>
                                                                        
                                                                        <div class="mb-3">
                                                                            <h3>FALTA JALAR EL ICONO</h3>
                                                                            <label for="icono"
                                                                                class="form-label">Icono:</label>
                                                                            <input type="file" class="form-control"
                                                                                id="icono" name="icono">
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

                                                    {{-- Modal eliminar --}}
                                                    <div class="modal fade" id="eliminarPaginaModal{{$item->id_pagina_informacion}}" tabindex="-1"
                                                        aria-labelledby="eliminarPaginaModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="eliminarPaginaModalLabel{{$item->id_pagina_informacion}}">
                                                                        Confirmar
                                                                        eliminación</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de que deseas eliminar esta colección?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancelar</button>
                                                                    <form
                                                                        action="{{ route('paginasInformacion.destroy', $item->id_pagina_informacion) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger"
                                                                            {{-- data-bs-dismiss="modal" data-bs-toggle="modal"
                                                                            data-bs-target="#eliminacionCorrectaModal" --}}
                                                                            >Eliminar</button>
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
        </div>
    </section>

@endsection
