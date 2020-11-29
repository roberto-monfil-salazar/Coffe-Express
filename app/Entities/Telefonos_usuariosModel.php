<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefonos_usuariosModel extends model {
	protected $table='Telefonos_usuarios';
    protected $primaryKey = 'ID_Telefonos_Usuarios';
    protected $foreinKey = 'ID_Usuarios ';
    public $timestamps=false;
    protected $fillable=[
    	'tipoDe_Telefono',
    	'Numero_Telefono',
    	'ID_Usuarios '
    ];

    public function Nombre_Usuario(){
        return $this->belongTo('App\Entities\Usuarios','ID_Usuarios'.'ID_Usuarios');
    }
 
} 