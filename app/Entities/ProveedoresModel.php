<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProveedoresModel extends model {
	protected $table='proveedores';
    protected $primaryKey = 'ID_Proveedores';
    public $timestamps=false;
    protected $fillable=[
    	'Nombre_proveedor',
    	'CorreoElectronico_proveedor',
    	'RazonSocual_Proveedor'
    ];


    function direcciones() {
        return $this->hasOne('direcciones_proveedores', 'ID_Proveedores');
    }
    function telefonos() {
        return $this->hasOne('telefonos_proveedores', 'ID_Proveedores');
    }
    function producto() {
        return $this->hasOne('productos', 'ID_Proveedores');
    }

} 
