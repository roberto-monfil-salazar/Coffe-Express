<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ventas_realizadaModel extends model {
	protected $table='ventas_realizada';
    protected $primaryKey = '';
    public $timestamps=false;
    protected $fillable=[
    	'Nombre_Productos',
    	'Precio_Producto',
    	'Cantidad_Producto',
    	'Importe',
    	'fecha_venta',
    	'hora_venta'
    ];

} 