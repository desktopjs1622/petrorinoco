@if (count($errors)>0)
    <div id="errorsMessage" class="alert alert-danger" roles="alert">
        <strong>Errores:</strong>
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif



@if (Session::has('save'))
        <div id="mensajeSuccess" class="alert alert-success" role="alert">
            <strong>{{Session::get("save")}}</strong>
        </div> 
@endif