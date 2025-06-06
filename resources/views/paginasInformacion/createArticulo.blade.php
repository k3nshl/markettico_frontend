@extends('plantilla')

@section('gestion_nombre', 'Articulo')


@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col">
                                <div class="border p-3 rounded">
                                    <div class="card-title d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div><i class="lni lni-clipboard me-1 font-22 text-info"></i></div>
                                            <h5 class="mb-0 text-dark" title="Agregar Usuario">Registrar Articulo</h5>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row mb-3">
                                        <form action="{{ route('articulos.store') }}" method="post">
                                            @csrf

                                            <div class="">
                                                <label for="titulo" class="col-form-label">Titulo del
                                                    articulo:</label>

                                                <input type="text" name="titulo" class="form-control" id="titulo"
                                                    placeholder="Titulo del articulo">

                                            </div>

                                            <div class="mt-3">

                                                <label for="contenido" class="col-form-label">Contenido:</label>

                                                <textarea id="mytextarea" name="contenido" rows="3" placeholder="Escribe el contenido del artículo"></textarea>

                                            </div>

                                            <div class="text-end">
                                                <hr />

                                                <a href="{{ route('paginasInformacion.show', 1) }}"
                                                    class="btn btn-secondary">Regresar</a>

                                                <button type="submit" class="btn btn-info text-white"
                                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                                    <i class="bx bx-save" style="color: #F2F2F2;"></i>Guardar
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
