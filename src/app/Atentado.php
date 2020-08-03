<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atentado extends Model
{
     protected $fillable = [
    	'FechaMaquina',
    	'FechaVence',
    	'FechaVenceNueva',
    	'ClienteId',
    	'HashId',
    	'Exitoso',
    	'locationhref'
    ];
}
