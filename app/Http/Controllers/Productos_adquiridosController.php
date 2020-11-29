<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade;
use App\Entities\Productos_adquiridosModel;
use Illuminate\Http\Request;
use App\Exports\productos_adquiridosExport;

use Maatwebsite\Excel\Facades\Excel;

class Productos_adquiridosController extends Controller
{
    public function index(Request $request)
    {
        $productosadquiridos = Productos_adquiridosModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $productosadquiridos = $productosadquiridos->where('Nombre_Productos', 'like', '%' . $request->search . '%')
                ->orWhere('Precio_DeVenta_Productos', 'like', '%' . $request->search . '%')
                ->orWhere('categoria', 'like', '%' . $request->search . '%');
        }
        $productosadquiridos = $productosadquiridos->paginate($limit)->appends($request->all());
        return view('Productos_adquiridos.index', compact('productosadquiridos'));
    }
    public function exportPDF()
    {
      $productos_adquiridos = Productos_adquiridosModel::get();
      $pdf = Facade::loadView('Productos_adquiridos.exportPDF', compact('productos_adquiridos'));
      //línea para descargar PDF directamente
      //return $pdf->download('proveedores.pdf');
      $pdf->setPaper('x4', 'landscape');
      //linea para descargar PDF con autorización del usuario
      return $pdf->stream();
  
      //para cambiar a horizontal la hoja
      //$pdf->setPaper('x4','landscape');
      //return $pdf->stream(); 
  
    }
   public function export()
    {
      return Excel::download(new productos_adquiridosExport, 'Reporte_productos_adquiridos.xlsx');
    }

}
