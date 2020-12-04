@extends("layouts.base")

@section('title')
| Actualización de Registro
@endsection

@section('page')
Registro de Usuario
@endsection

@section('ruta')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{url('home')}}" title="Dashboard|Home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registro-de-usuario</li>
        
    </ol>
</nav>
@endsection

@section('contenido')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

            @include('alerts.messages')
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-2">
                        <div class="card">

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Historial Laboral</h5>
                                <form name="fcpersonal" id="fcpersonal" class="form-horizontal" action="" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h4 class="card-title">Institución Ministerial</h4>                            
                                    <div class="form-group row">
                                    <label for="selectone" class="col-sm-3 text-right control-label col-form-label">Inst. Ministerial</label>
                                        <div class="col-md-9">
                                            <select name="institucion" id="selectone" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                                <optgroup>
                                                    <option value="">-----</option>
                                                
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                    <label for="estado" class="col-sm-3 text-right control-label col-form-label">Estado</label>
                                    <div class="col-md-3">
                                        <select name="estado" id="estado" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option disabled selected>Selecciona una opción</option>
                                            <optgroup>
                                                <option value="" >-----</option>
                                            
                                            </optgroup>
                                        </select>
                                    </div>
                                    <label for="municipio" class="col-sm-2 text-right control-label col-form-label">Municipio</label>
                                        <div class="col-md-4">
                                            <select name="municipio" id="municipio" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="parroquia" class="col-sm-3 text-right control-label col-form-label">Parroquia</label>
                                    <div class="col-md-3">
                                        <select name="parroquia" id="parroquia" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option disabled selected>Selecciona una opción</option>
                                        </select>
                                    </div>
                                    <label for="nucleo" class="col-sm-2 text-right control-label col-form-label">Núcleo</label>
                                        <div class="col-md-4">
                                            <select name="nucleo" id="nucleo" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                                <optgroup>
                                                
                                                    <option value="" >------</option>
                                               
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                <h4 class="card-title">Datos Personales</h4>
                                    <div class="form-group row">
                                    <label for="tipo_personal" class="col-sm-3 text-right control-label col-form-label">Tipo de Personal</label>
                                        <div class="col-md-3">
                                            <select name="tipo_personal" id="tipo_personal" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                                <optgroup>
                                                
                                                    <option value="" >------</option>
                                               
                                                </optgroup>
                                            </select>
                                        </div>
                                        <label for="condegreso" class="col-sm-2 text-right control-label col-form-label">Condición de Egreso</label>
                                        <div class="col-md-4">
                                            <select name="condegreso" id="condegreso" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                                <optgroup>
                                                
                                                    <option value="" >------</option>
                                                
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Primer Nombre</label>
                                        <div class="col-sm-3">
                                            <input name="nombre" type="text" class="form-control" id="nombre" value="" placeholder="Escriba su Primer Nombre">
                                        </div>
                                        <label for="segnombre" class="col-sm-2 text-right control-label col-form-label">Segundo Nombre</label>
                                        <div class="col-sm-4">
                                            <input name="segnombre" type="text" class="form-control" id="segnombre" value="" placeholder="Escriba su Segundo Nombre">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="apellido" class="col-sm-3 text-right control-label col-form-label">Primer Apellido</label>
                                        <div class="col-sm-3">
                                            <input name="apellido" type="text" class="form-control" id="apellido" value="" placeholder="Escriba su Primer Apellido">
                                        </div>
                                        <label for="sgap" class="col-sm-2 text-right control-label col-form-label">Segundo Apellido</label>
                                        <div class="col-sm-4">
                                            <input name="sgap" type="text" class="form-control" id="sgap" value="" placeholder="Escriba su Segundo Apellido">
                                        </div>
                                    </div>

                                   

                                    <div class="form-group row">
                                        <label for="cedula" class="col-sm-3 text-right control-label col-form-label">Cédula de Identidad</label>
                                        <div class="col-sm-3">
                                            <input name="cedulapersonal" onkeyUp="validarCedula(this.value);" type="text" class="form-control" id="cedula" placeholder="Cédula de Identidad" title="completar con cero cuando sea inferior a 10">
                                        </div>

                                        <label for="fnacimiento" class="col-sm-2 text-right control-label col-form-label">F. Nacimiento</label>
                                        <div class="col-sm-4 input-group">
                                            <input name="fnacimiento" type="text" class="form-control" id="fnacimiento" value="" placeholder="dd/mm/yyyy">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="sexo" class="col-sm-3 text-right control-label col-form-label">Sexo</label>
                                    <div class="col-md-3">
                                        <select name="sexo" id="sexo" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option disabled selected>Selecciona una opción</option>
                                            <optgroup>
                                            
                                                <option value="" >------</option>
                                            
                                            </optgroup>
                                        </select>
                                    </div>
                                    <label for="estcivil" class="col-sm-2 text-right control-label col-form-label">Estado Civil</label>
                                        <div class="col-md-4">
                                            <select name="estcivil" id="estcivil" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                <option disabled selected>Selecciona una opción</option>
                                                <optgroup>
                                                
                                                    <option value="" >--------</option>
                                                
                                                </optgroup>
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="fingreso" class="col-sm-3 text-right control-label col-form-label">Fecha de Ingreso</label>
                                        <div class="col-sm-3 input-group">
                                            <input name="fingreso" type="text" class="form-control" id="fingreso" value="" placeholder="dd/mm/yyyy">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>

                                        <label class="col-sm-2 text-right control-label col-form-label">Fecha de Egreso</label>
                                        <div class="col-sm-4 input-group">
                                            <input name="fegreso" type="text" class="form-control" id="fegreso" value="" placeholder="dd/mm/yyyy">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userEmail" class="col-sm-3 text-right control-label col-form-label">Correo Electronico</label>
                                        <div class="col-sm-9">
                                            <input name="userEmail" type="email" class="form-control" id="userEmail" value="" placeholder="Escriba el Correo Electronico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button id="frp" type="submit" class="btn btn-primary">Enviar</button>
                                    <!-- <button type="" class="btn btn-danger">Borrar</button> -->
                                </div>
                            </div>
                            </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        @endsection