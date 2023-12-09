@extends('plantilla')

@section('gestion_nombre', 'Articulo editar')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        {{-- Form de crear --}}
                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                            <h5 class="mb-0 text-dark" title="Agregar Usuario">Editar Articulo</h5>
                                        </div>
                                    </div>
                                    <hr />

                                    <div>
                                        <form action="{{ route('articulos.update', $articulo->id_articulo) }}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <div class="">
                                                <label for="titulo" class="col-form-label">Titulo del
                                                    articulo:</label>

                                                <input type="text" name="titulo" class="form-control" id="titulo"
                                                    value="{{$articulo->titulo}}">

                                            </div>

                                            <div class="mt-3">
                                                <label for="id_estado"
                                                    class="col-sm-4 col-form-label">Estado:
                                                </label>
                                                <div class="">
                                                    <select class="form-select"
                                                        id="id_estado"
                                                        name="id_estado">
                                                        @foreach ($estados as $items)
                                                            <option
                                                                value="{{ $items->id_estado }}"
                                                                {{ $items->id_estado == $articulo->id_estado ? 'selected' : '' }}>
                                                                {{ $items->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-3">

                                                <label for="contenido" class="col-form-label">Contenido:</label>

                                                <textarea id="mytextarea" name="contenido" rows="3" placeholder="Escribe el contenido del artículo">{{$articulo->contenido}}</textarea>

                                            </div>

                                            <div class="text-end">
                                                <hr />

                                                <a href="{{ route('paginasInformacion.show', $articulo->id_pagina_informacion) }}"
                                                    class="btn btn-secondary">Regresar</a>

                                                <button type="submit" class="btn btn-info text-white"
                                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                                    <i class="bx bx-save" style="color: #F2F2F2;"></i>Actualizar
                                                </button>
                                            </div>

                                        </form>

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