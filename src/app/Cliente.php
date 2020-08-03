<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    	'Nombre',
    	'HashId',
    	'HashId2',
    	'Telefono',
    	'Email',
    	'FechaVence',
    	'HostURL'
    ];
}
