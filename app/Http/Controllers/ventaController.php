<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\ProductosModel;
use App\Entities\Productos_ventasModel;
use App\Entities\categorias_pro;
use App\Entities\UsuariosModel;
use App\Entities\VentasModel;

class ventaController extends Controller
{
    public function index(Request $request)
    {
        $Producto=ProductosModel::select('*')->get();
        $Usuarios = UsuariosModel::select('*')->get();
        $venta = VentasModel::select('*');
        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $venta = $venta->where('fecha_venta', 'like', '%' . $request->search . '%')
                ->orWhere('hora_venta', 'like', '%' . $request->search . '%')
                ->orWhere('Total_ven', 'like', '%' . $request->search . '%')
                ->orWhere('ID_Usuarios', 'like', '%' . $request->search . '%');
        }
        $venta = $venta->paginate($limit)->appends($request->all());
        return view('ventas.index', compact('venta', 'Usuarios','Producto'));
    }
    public function create()
    {
        $Producto=ProductosModel::select('*')->get();
        $Usuarios = UsuariosModel::select('*')->get();
        return view('ventas.create', compact('Usuarios','Producto'));
    }
    public function store(Request $request)
    {
        $venta = new VentasModel();
        $venta = $this->createUpdateventa($request, $venta);

        return redirect()
            ->route('ventas.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdateventa(Request $request, $venta)
    {
        $venta->ID_Ventas = $request->ID_Ventas;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->hora_venta = $request->hora_venta;
        $venta->Total_ven = $request->Total_ven;
        $venta->ID_Usuarios = $request->ID_Usuarios;
        $venta->save();
        return $venta;
    }
    public function show($venta)
    {
        $venta = VentasModel::where('ID_Ventas', $venta)->firstOrFail();
        return view('ventas.show', compact('venta'));
    }
    public function edit($venta)
    {
        $Usuarios = UsuariosModel::select('*')->get();
        $venta = VentasModel::where('ID_Ventas', $venta)->firstOrFail();
        return view('ventas.edit', compact('venta', 'Usuarios'));
    }
    public function update(Request $request, $venta)
    {
        $venta = VentasModel::where('ID_Ventas', $venta)->firstOrFail();
        $venta = $this->createUpdateventa($request, $venta);
        return redirect()
            ->route('ventas.show', $venta)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($venta)
    {
        $venta = VentasModel::findOrFail($venta);
        $venta->delete();
        return redirect()
            ->route('ventas.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
