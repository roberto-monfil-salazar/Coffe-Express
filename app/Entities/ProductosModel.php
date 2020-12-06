<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends model {
	protected $table='productos';
    protected $primaryKey = 'ID_Productos';
    protected $foreinKey = 'ID_Categorias_Pro';

    public $timestamps=false;
    protected $fillable=[
    	'Nombre_Productos',
    	'Precio_DeVenta_Productos',
        'Fecha_Entrada',
        'Fecha_Salida',
    	'ID_Categorias_Pro',
        'ID_Proveedores ',
        "descripcion", 
        "precio_compra",
        "existencia",
    ];

    public function Nombre_Categoria_Pro(){
        return $this->belongTo('App\Entities\categorias_proModel','ID_Categorias_Pro'.'ID_Categorias_Pro');
    }

    public function Nombre_Proveedores(){
        return $this->belongTo('App\Entities\ProveedoresModel','ID_Proveedores'.'ID_Proveedores');
    }
    function direcciones() {
        return $this->hasOne('Telefonos_usuarios', 'ID_Telefonos_Usuarioss');
	}
 
} 