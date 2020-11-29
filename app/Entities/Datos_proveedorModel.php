<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Datos_proveedorModel extends model {
	protected $table='datos_proveedor';
    protected $primaryKey = '';
    public $timestamps=false;
    protected $fillable=[
    	'Nombre',
    	'Correo_Electronico',
    	'Municipio',
    	'Direccion',
    	'Codigo_Postal',
    	'Tipo_de_Telefono',
    	'Numero_de_Telefono',
    ];

} 