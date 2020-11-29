<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class categorias_proModel extends Model
{
    protected $table='categorias_pro';
    protected $primaryKey = 'ID_Categorias_Pro';
    public $timestamps=false;
    protected $fillable=[
        'categoria',
        'Nombre',
        'condicion'
    ];
    function direcciones() {
        return $this->hasOne('productos', 'ID_Categorias_Pro');
	}
}
