<?php

namespace App\Exports;

use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class datos_usuariosExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Nombre_Completo',
            'Direccion',
            'Edad',
            'Sexo',
            'Usuario',
            'Contraseña',
            'tipoDe_Telefono',
            'Numero_Telefonico',
        ];
    }
    public function collection()
    {
        $users = DB::table('datos_usua')->get();
        return $users;
    }
}
