<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $connection = 'pgsql';

    protected $table = 'municipios';

    protected $fillable = ['nombre_municipio', 'id_estado'];

    public static function municipios($id)
    {
        return Municipios::where('id_estado', '=', $id)->get();
    }


}
