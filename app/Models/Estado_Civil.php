<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado_Civil extends Model
{
    protected $connection = 'pgsql';

    protected $table = 'estado_civil';
}
