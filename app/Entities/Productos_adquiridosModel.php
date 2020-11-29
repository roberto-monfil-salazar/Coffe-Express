<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Productos_adquiridosModel extends model {
	protected $table='productos_adquiridos';
    protected $primaryKey = '';
    public $timestamps=false;
    protected $fillable=[
    	'Nombre_Productos',
    	'Precio_DeVenta_Productos',
    	'categoria',
    	'Nombre_proveedor',
    	'CorreoElectronico_proveedor',
    	'Numero_Telefono'
    ];

} 