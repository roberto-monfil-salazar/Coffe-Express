<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade;
use App\Entities\Datos_usuaModel;
use Illuminate\Http\Request;
use App\Exports\datos_usuariosExport;

use Maatwebsite\Excel\Facades\Excel;

class Datos_usuaController extends Controller
{
    public function index(Request $request)
    {
        $datosusua = Datos_usuaModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $datosusua = $datosusua->where('Nombre_Completo', 'like', '%' . $request->search . '%')
                ->orWhere('Edad', 'like', '%' . $request->search . '%')
                ->orWhere('Usuario', 'like', '%' . $request->search . '%');
        }
        $datosusua = $datosusua->paginate($limit)->appends($request->all());
        return view('Datos_usua.index', compact('datosusua'));
    }
    public function exportPDF()
  {
    $datos_usua = Datos_usuaModel::get();
    $pdf = Facade::loadView('Datos_usua.exportPDF', compact('datos_usua'));
    //línea para descargar PDF directamente
    //return $pdf->download('proveedores.pdf');
    $pdf->setPaper('x4', 'landscape');
    //linea para descargar PDF con autorización del usuario
    return $pdf->stream();

    //para cambiar a horizontal la hoja
    //$pdf->setPaper('x4','landscape');
    //return $pdf->stream(); 

  }
  public function export(){
    return Excel::download(new datos_usuariosExport, 'Reporte_datos_usuarios.xlsx');
  }

}
