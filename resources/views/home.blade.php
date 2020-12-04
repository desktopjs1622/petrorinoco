@extends("layouts.base")

@section('title')
| Home
@endsection


@section('ruta')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
@endsection

@section('contenido')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" id="card-title">Listado de Usuarios</h5>
            <div class="box-header">
                <div class="container-fluid">
                    
                    <div class=" row col-md-6 col-lg-12" >
                    <a href="{{ route('registro') }}" class="btn btn-success" id="btn__agregar" title="Agregar"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <br />
            <div class=" row col-sm-3 col-md-6 col-lg-12" >
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col-md-2">Nombre y Apellido</th>
                                <th scope="col-md-3">Institución</th>
                                <th scope="col-md-1">Tipo de Personal</th>
                                <th scope="col-md-4">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listarRegistros as $listado)
                            <tr elementId="{{$listado->id}}">
                                <td scope="row">{{$listado->primer_nombre}} {{$listado->primer_apellido}}</td>
                                <td>{{$listado->instituciones}}</td>
                                <td>{{$listado->tipo_personal}}</td>
                                <td>
                                    <a href="{{ url('/registro-de-personal/actualizar-registro/'.$listado->id) }}" type="button" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                   
                                    
                               <!-- Modal para Visualizar-->
                                    <a href="{{ url('/home/consultar/'.$listado->id) }}" onclick="return modalConsulta({{ url('home/consultar/'.$listado->id)" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                      <i class="fas fa-eye"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col-md-2">Nombre y Apellido</th>
                                <th scope="col-md-3">Institución</th>
                                <th scope="col-md-1">Tipo de Personal</th>
                                <th scope="col-md-4">Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
