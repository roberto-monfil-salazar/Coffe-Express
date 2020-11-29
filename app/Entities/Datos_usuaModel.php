<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Datos_usuaModel extends model {
	protected $table='datos_usua';
    protected $primaryKey = '';
    public $timestamps=false;
    protected $fillable=[
    	'Nombre_Completo',
    	'Direccion',
    	'Edad',
    	'Sexo',
    	'Usuario',
    	'Contraseña',
    	'tipoDe_Telefono',
        'Numero_Telefonico',
    ];

} 
