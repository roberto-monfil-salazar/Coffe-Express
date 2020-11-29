<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Direcciones_proveedoresModel extends model {
	protected $table='direcciones_proveedores';
    protected $primaryKey = 'ID_Direccion_Proveedor';
    protected $foreinKey = 'ID_Proveedores';
    public $timestamps=false;
    protected $fillable=[
    	'Estado_Repu',
    	'Municipio',
        'Colonia',
        'NombreCalle_Direccion',
        'NumeroExterior_Direccion',
        'NumeroInterior_Direccion',
        'CodigoPostal_Direccion',
    	'ID_Proveedores '
    ];

    public function Nombre_Proveedor(){
        return $this->belongTo('App\Entities\ProveedoresModel','ID_Proveedores'.'ID_Proveedores');
    }
 
} 