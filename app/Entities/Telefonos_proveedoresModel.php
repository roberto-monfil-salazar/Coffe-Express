<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefonos_proveedoresModel extends model {
	protected $table='telefonos_proveedores';
    protected $primaryKey = 'ID_Telefonos_Proveedores';
    protected $foreinKey = 'ID_Proveedores';
    public $timestamps=false;
    protected $fillable=[
    	'tipoDe_Telefono',
    	'Numero_Telefono',
      	'ID_Proveedores'
    ];

} 