<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Productos_ventasModel extends model {
	protected $table='productos_ventas';
    protected $primaryKey = 'ID_Productos_Ventas';
    protected $foreingKey = 'ID_Productos';
    public $timestamps=false;
    protected $fillable = ["id_venta", "descripcion", "codigo_barras", "precio", "cantidad"];


    public function Nombre_Categoria_Pro(){
        return $this->belongTo('App\Entities\ProductosModel','ID_Productos'.'ID_Productos');
    }

    public function Nombre_Ventas(){
        return $this->belongTo('App\Entities\VentasModel','ID_Ventas'.'ID_Ventas');
    }
 
} 