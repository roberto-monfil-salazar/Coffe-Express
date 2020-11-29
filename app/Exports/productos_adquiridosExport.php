<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class productos_adquiridosExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Nombre_Productos',
            'Precio_DeVenta_Productos',
            'categoria',
            'Nombre_proveedor',
            'CorreoElectronico_proveedor',
            'Numero_Telefono'
        ];
    }
    public function collection()
    {
        $users = DB::table('productos_adquiridos')->get();
        return $users;
    }
}
