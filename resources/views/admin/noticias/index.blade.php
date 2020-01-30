@extends('layouts.admin')

@section('titulo','Administración | Titulo')
@section('titulo2', 'Texto del título')

@section('breadcrumbs')
@endsection

@section('contenido')

<div class="container.fluid">

    <div class="row">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">

                    <h3>

                </div>




                <div clas="card-body">

                    <table class="table">

                        <thead>

                            <tr>
                                <th> Noticias </th>
                                <th> Acciones </th>
                            </tr>

                        </thead>

                        <tbody>

                            <!-- Aqui van las Noticias -->

                            @foreach($noticias as $noticia)

                            <tr>

                                <td>
                                    {{noticia -> titulo}}
                                </td>

                                <td>
                                    <button class="btn btn-primary">

                                        <i class="far fa-eye"> </i>

                                    </button>
                                    <button class="btn btn-success">

                                        <i class="far fa-edit"> </i>

                                    </button>
                                    <button class="btn btn-danger">

                                        <i class="far fa-times"> </i>

                                    </button>
                                </td>

                                <td>
                                    {{noticia -> titulo}}
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

@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection