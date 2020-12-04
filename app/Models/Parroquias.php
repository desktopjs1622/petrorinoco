<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parroquias extends Model
{
    protected $connection = 'pgsql';

    protected $table = 'parroquias';
    
    protected $fillable = ['nombre_parroquia', 'id_municipio'];

    public static function parroquias($id)
    {
        return Parroquias::where('id_municipio', '=', $id)->get();

    }

}
