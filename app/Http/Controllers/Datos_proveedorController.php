<?php

namespace App\Http\Controllers;

use App\Entities\Datos_proveedorModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use App\Exports\proveedorExport;
use Maatwebsite\Excel\Facades\Excel;
class Datos_proveedorController extends Controller
{
    public function index(Request $request)
    {
        $datosproveedor = Datos_proveedorModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $datosproveedor = $datosproveedor->where('Nombre', 'like', '%' . $request->search . '%')
                ->orWhere('Correo_Electronico', 'like', '%' . $request->search . '%')
                ->orWhere('Municipio', 'like', '%' . $request->search . '%');
        }
        $datosproveedor = $datosproveedor->paginate($limit)->appends($request->all());
        return view('Datos_proveedor.index', compact('datosproveedor'));
    }
   
    public function exportPDF()
    {
      $datos_proveedor = Datos_proveedorModel::get();
      $pdf = Facade::loadView('Datos_proveedor.exportPDF', compact('datos_proveedor'));
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
        return Excel::download(new proveedorExport, 'Reporte_datos_proveedor.xlsx');
      }
}
