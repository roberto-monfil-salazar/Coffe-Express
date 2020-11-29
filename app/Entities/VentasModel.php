<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends model {
	protected $table='ventas';
    protected $primaryKey = 'ID_Ventas';
    protected $foreinKey = 'ID_Usuarios';
    public $timestamps=false;
    protected $fillable=[
    	'fecha_venta',
    	'hora_venta',
        'Total_ven',
    	'ID_Usuarios'
    ];

    public function Nombre_Usuario(){
        return $this->belongTo('App\Entities\Usuarios','ID_Usuarios'.'ID_Usuarios');
    }
 
} 