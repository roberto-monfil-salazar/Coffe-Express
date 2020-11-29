<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ventas_realizadasExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Nombre_Productos',
            'Precio_Producto',
            'Cantidad_Producto',
            'Importe',
            'fecha_venta',
            'hora_venta'
        ];
    }
    public function collection()
    {
         $users = DB::table('ventas_realizada')->get();
         return $users;

    }
}
