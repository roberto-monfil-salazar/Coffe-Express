<?php

namespace App\Http\Controllers;

use App\Entities\Ventas_realizadaModel;
use App\Entities\VentasModel;
use Barryvdh\DomPDF\Facade;
use App\Exports\ventas_realizadasExport;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class Ventas_realizadaController extends Controller
{
    public function index(Request $request)
    {
        $ventasrealizada = Ventas_realizadaModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $ventasrealizada = $ventasrealizada->where('Nombre_Productos', 'like', '%' . $request->search . '%')
                ->orWhere('Precio_Producto', 'like', '%' . $request->search . '%')
                ->orWhere('Cantidad_Producto', 'like', '%' . $request->search . '%');
        }
        $ventasrealizada = $ventasrealizada->paginate($limit)->appends($request->all());
        return view('Ventas_realizada.index', compact('ventasrealizada'));
    }
   


public function exportPDF(){
    $ventas_realizada = Ventas_realizadaModel::get();
    $pdf = Facade::loadView('Ventas_realizada.exportPDF', compact('ventas_realizada'));
    //línea para descargar PDF directamente
    //return $pdf->download('proveedores.pdf');
    $pdf->setPaper('x4','landscape');
    //linea para descargar PDF con autorización del usuario
    return $pdf->stream();

    //para cambiar a horizontal la hoja
    //$pdf->setPaper('x4','landscape');
    //return $pdf->stream(); 

}
public function export(){
  return Excel::download(new ventas_realizadasExport, 'Reportes_ventas_realizada.xlsx');
}

}
