<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function productos()
    {
        return $this->hasMany("App\Entities\ProductoVendido", "id_venta");
    }

    public function cliente()
    {
        return $this->belongsTo("App\Entities\Cliente", "id_cliente");
    }
}
