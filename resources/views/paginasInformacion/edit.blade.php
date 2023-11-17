@extends('plantilla')

@section('gestion_nombre', 'Articulo editar')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">
    
                            {{-- Form de crear --}}
                        <form action="">
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

                                            <div class="row mb-3">
                                                <div class="">

                                                    <label for="nombre_completo" class="col-sm-4 col-form-label">Titulo del
                                                        articulo:</label>

                                                    <input type="text" class="form-control" id="nombre_completo"
                                                        placeholder="Titulo del articulo">

                                                </div>


                                                <div class="mt-3">

                                                    <label for="nombre_completo"
                                                        class="col-sm-4 col-form-label">Contenido:</label>

                                                    <form method="post">
                                                        <textarea id="mytextarea" name="mytextarea" rows="3"></textarea>
                                                    </form>

                                                </div>

                                                <div class="mt-3">

                                                    <button type="button" class="btn btn-info float-end text-white"
                                                        style="background-color: #04D9D9; border-color: #04D9D9;">
                                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                        Actualizar
                                                    </button>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- Fin Form de crear --}}
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
