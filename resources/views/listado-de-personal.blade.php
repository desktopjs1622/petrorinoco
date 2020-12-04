
<input type="hidden" id="myurl" value="{{ route('listado')}}" />

            <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Institución</th>
                            <th scope="col">Núcleo</th>
                            <th scope="col">Condición de Ingreso</th>
                            <th scope="col">Tipo de Personal</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td>13/02/20</td>
                            <td>13/02/20</td>
                            <td>Ingreso</td>
                            <td>

                            <!-- Enlace para Actualizar -->
                            <a href="" type="button" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                         
                            <!-- <button return onclick="abrir_modal('{{ url('editar') }}')" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-eye"></i></button> -->
                            <!-- <a href="javascript:void(0)" role="button" class="btn btn-primary btn-xs" title="Editar"><i class="fas fa-pencil-alt"></i></a>
                            <a href="javascript:void(0)" role="button" class="btn btn-warning btn-xs" title="Prestaciones"><i class="fas fa-calculator"></i></span></a>
                            <a href="javascript:void(0)" role="button" class="btn btn-danger btn-xs" title="Eliminar registro"><i class="fas fa-trash"></i></span></a> -->
                            </td>
                        </tr>
                   
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Institución</th>
                            <th scope="col">Núcleo</th>
                            <th scope="col">Condición de Ingreso</th>
                            <th scope="col">Tipo de Personal</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </tfoot>
                </table>