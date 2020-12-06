<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends model {
	protected $table='ventas';
    protected $primaryKey = 'ID_Ventas';
    protected $foreinKey = 'id_cliente';
    public $timestamps=false;
    protected $fillable=[
    	'id_cliente'
    ];

    public function Nombre_Usuario(){
        return $this->belongTo('App\Entities\Cliente','id_cliente'.'id_cliente');
    }
 
} 