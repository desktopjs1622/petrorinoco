<?php

namespace App\Http\Controllers;


use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Validated\FormRegistroPersonalCreateRequest;
use App\Models\Condicion_Ingreso;
use App\Models\Estado_Civil;
use App\Models\Estado;
use App\Models\Municipios;
use App\Models\Parroquias;
use App\Models\Instituciones;
use App\Models\Nucleos;
use App\Models\Tipo_Genero;
use App\Models\Tipo_Personal;
use App\Models\Registro_Personal;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function registroLaboral()
    {
        $condicion_ingreso = Condicion_Ingreso::all();
        $estado_civil = Estado_Civil::all();
        $estados = Estado::all();
        $institucion = Instituciones::all();
        $tipo_nucleo = Nucleos::all();
        $tipo_genero = Tipo_Genero::all();
        $tipo_personal = Tipo_Personal::all();

        return view(
            'registro', 
            compact(
                'condicion_ingreso',
                'estado_civil',
                'institucion', 
                'estados', 
                'tipo_nucleo',
                'tipo_genero',
                'tipo_personal'
            )
        );
    }

    public function getMunicipios(Request $request, $id) 
    {
        if($request->ajax()) {
            $municipio = Municipios::municipios($id);
            return response()->json($municipio);
        }
    }

    public function getParroquias(Request $request, $id) 
    {
        if($request->ajax()) {
            $parroquia = Parroquias::parroquias($id);
            return response()->json($parroquia);
        }
    }

    public function registroDePersonal(FormRegistroPersonalCreateRequest $request)
    {
        
        $id_usuario = Auth::user()->id; // aqui capturo el id del usuario logeado
        
        $personal = new Registro_Personal; //instanciando la tabla en donde se va a almacenar el registro
        $personal->id_usuario = $id_usuario; // asigno a la variable id_usuario el valor que trae el usuario de la sesion
        $personal->id_instituciones = implode(',',$request->institucion);
        $personal->id_estado = implode(',', $request->estado);
        $personal->id_municipio = $request->municipio;
        $personal->id_parroquia = $request->parroquia;
        $personal->id_nucleo = implode(',', $request->nucleo);
        $personal->id_tipo_personal = implode(',', $request->tipo_personal);
        $personal->id_condicion_ingreso = implode(',', $request->condegreso);
        $personal->primer_nombre = $request->nombre;
        $personal->segundo_nombre = $request->segnombre;
        $personal->primer_apellido = $request->apellido;
        $personal->segundo_apellido = $request->sgap;
        $personal->cedula = $request->cedulapersonal;
        $personal->fecha_nacimiento = $request->fnacimiento;
        $personal->id_sexualidad = implode(',', $request->sexo);
        $personal->id_estado_civil = implode(',', $request->estcivil);
        $personal->fecha_ingreso = $request->fingreso;
        $personal->fecha_egreso = $request->fegreso;
        $personal->correo_email = $request->userEmail;

        if($personal == true) {
            $personal->save();
            Session::flash('save', 'Se ha Creado el Registro de '.$personal->primer_nombre.' '.$personal->primer_apellido.' Correctamente');
            return redirect('/home');
        }else {
            return redirect('/registro-de-personal'); 
        }
    }

    public function listarRegistro() {

        $listarRegistros = Registro_Personal::
            select(
                'registro_personal.id',
                'registro_personal.primer_nombre',
                'registro_personal.primer_apellido',
                'instituciones.instituciones',
                'tipo_personal.tipo_personal'
            )
            ->join('instituciones', 'registro_personal.id_instituciones', '=', 'instituciones.id')
            ->join('tipo_personal', 'registro_personal.id_tipo_personal', '=', 'tipo_personal.id')
            ->orderBy('registro_personal.id','DESC')
            ->get();
        return view('home', compact('listarRegistros'));
    }

    public function consultarRegistro($id) {

        $consultarRegistros = Registro_Personal::
            select(
                'registro_personal.id',
                'registro_personal.primer_nombre',
                'registro_personal.segundo_nombre',
                'registro_personal.primer_apellido',
                'registro_personal.segundo_apellido',
                'registro_personal.fecha_nacimiento',
                'registro_personal.correo_email',
                'instituciones.instituciones',
                'nucleos.nombre',
                'estado.nombre_estado',
                'parroquias.nombre_parroquia',
                'municipios.nombre_municipio',
                'tipo_personal.tipo_personal',
                'condicion_ingresos.condicion',
                'registro_personal.fecha_ingreso',
                'registro_personal.fecha_egreso'
            )
            ->join('instituciones', 'registro_personal.id_instituciones', '=', 'instituciones.id')
            ->join('nucleos', 'registro_personal.id_nucleo', '=', 'nucleos.id')
            ->join('estado', 'registro_personal.id_estado', '=', 'estado.id')
            ->join('municipios', 'registro_personal.id_municipio', '=', 'municipios.id')
            ->join('parroquias', 'registro_personal.id_parroquia', '=', 'parroquias.id')
            ->join('tipo_personal', 'registro_personal.id_tipo_personal', '=', 'tipo_personal.id')
            ->join('condicion_ingresos', 'registro_personal.id_condicion_ingreso', '=', 'condicion_ingresos.id')
            ->where('registro_personal.id', '=', $id)
            ->orderBy('registro_personal.id','DESC')
            ->get();
        return view('consultar', compact('consultarRegistros'));
        
    }

    public function actualizarRegistro() {
        
        return view('actualizar');
    }

    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

}