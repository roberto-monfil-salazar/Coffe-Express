<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Direcciones_usuariosModel extends model {
	protected $table='direcciones_usuarios';
    protected $primaryKey = 'ID_Direccion_Usuario';
    protected $foreinKey = 'id';
    public $timestamps=false;
    protected $fillable=[
    	'Estado_Repu',
    	'Municipio',
    	'Colonia',
    	'NombreCalle_Direccion',
    	'NumeroExterior_Direccion',
    	'NumeroInterior_Direccion',
    	'CodigoPostal_Direccion',    	
    	'id'
    ];

    public function Nombre_Usuario(){
        return $this->belongTo('App\Entities\Usuarios','id'.'id');
    }
 
} 