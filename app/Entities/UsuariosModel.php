<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends model {
	protected $table='users';
    protected $primaryKey = 'id';
    protected $fillable=[
    	'Nombre_Usuario',
    	'Apellido_Pa_Usuario',
    	'Apellido_Ma_Usuario',
    	'Edad',
    	'Sexo',
    	'email',
    	'password'
    ];
	function direcciones() {
        return $this->hasOne('Telefonos_usuarios', 'ID_Telefonos_Usuarioss');
	}
} 
