<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class proveedorExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Nombre',
            'Correo_Electronico',
            'Municipio',
            'Direccion',
            'Codigo_Postal',
            'Tipo_de_Telefono',
            'Numero_de_Telefono'
        ];
    }
    public function collection()
    {
        $users = DB::table('datos_proveedor')->get();
        return $users;
    }
}
