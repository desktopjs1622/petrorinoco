<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><h4><strong>Datos Personales e Institucionales</strong></h4></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="col-md-6 col-lg-12">
            @foreach($consultarRegistros as $consulta)
            <ul>
                <li><strong>Nombre y Apellido</strong>: {{$consulta->primer_nombre}} {{$consulta->primer_apellido}} </li>
                <li><strong>Fecha de Nacimiento</strong>:{{$consulta->fecha_nacimiento}} </li>
                <li><strong>Email</strong>: {{$consulta->correo_email}} </li>
                <li><strong>Institución Universitaria</strong>: {{$consulta->instituciones}}</li>
                <li><strong>Núcleo</strong>: {{$consulta->nombre}}</li>
                <li><strong>Estado</strong>: {{$consulta->nombre_estado}}</li>
                <li><strong>Tipo</strong>: {{$consulta->tipo_personal}}</li>
                <li><strong>Condición de Ingreso</strong>: {{$consulta->condicion}}</li>
                <li><strong>Fecha de Ingreso</strong>: {{$consulta->fecha_ingreso}}</li>
                <li><strong>Fecha de Egreso</strong>: {{$consulta->fecha_egreso}}</li>
            </ul>
            @endforeach
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>