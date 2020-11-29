<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\ProductosModel;
use App\Entities\categorias_proModel;
use App\Entities\ProveedoresModel;
use Illuminate\Support\Facades\DB;
class ProductosController extends Controller
{
    public function index(Request $request)
    {
   $categoriaspro = categorias_proModel::select('*')->get();
        $Proveedor=ProveedoresModel::select('*')->get();
        
        $productosss = DB::table('productos')
        ->join('categorias_pro', 'categorias_pro.ID_Categorias_Pro', '=', 'productos.ID_Categorias_Pro')
       ->join('proveedores', 'proveedores.ID_Proveedores', '=', 'productos.ID_Proveedores');
        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $productosss = $productosss->where('Nombre_Productos', 'like', '%' . $request->search . '%')
                ->orWhere('Precio_DeVenta_Productos', 'like', '%' . $request->search . '%')
                ->orWhere('Fecha_Entrada ', 'like', '%' . $request->search . '%');
        }
        $productosss = $productosss->paginate($limit)->appends($request->all());
        return view('Productos.index', compact('productosss', 'categoriaspro','Proveedor'));
    }
    public function create()
    {
        $categoriaspro = categorias_proModel::select('*')->get();
        $Proveedor=ProveedoresModel::select('*')->get();
        return view('Productos.create', compact('categoriaspro','Proveedor'));
    }
    public function store(Request $request)
    {
        $productosss = new ProductosModel();
        $productosss = $this->createUpdateproductosss($request, $productosss);

        return redirect()
            ->route('Productos.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdateproductosss(Request $request, $productosss)
    {
        $productosss->Nombre_Productos = $request->Nombre_Productos;
        $productosss->Precio_DeVenta_Productos = $request->Precio_DeVenta_Productos;
        $productosss->Fecha_Entrada = $request->Fecha_Entrada;
        $productosss->Fecha_Salida = $request->Fecha_Salida;
        $productosss->ID_Categorias_Pro  = $request->ID_Categorias_Pro;
        $productosss->ID_Proveedores = $request->ID_Proveedores;
        $productosss->save();
        return $productosss;
    }
    public function show($productosss)
    {
        $productosss = ProductosModel::where('ID_Productos', $productosss)->firstOrFail();
        return view('Productos.show', compact('productosss'));
    }
    public function edit($productosss)
    {
        $categoriaspro = categorias_proModel::select('*')->get();
        $Proveedor=ProveedoresModel::select('*')->get();
        $productosss = ProductosModel::where('ID_Productos', $productosss)->firstOrFail();
        return view('Productos.edit', compact('productosss', 'categoriaspro','Proveedor'));
    }
    public function update(Request $request, $productosss)
    {
        $productosss = ProductosModel::where('ID_Productos', $productosss)->firstOrFail();
        $productosss = $this->createUpdateproductosss($request, $productosss);
        return redirect()
            ->route('Productos.show', $productosss)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($productosss)
    {
        $productosss = ProductosModel::findOrFail($productosss);
        $productosss->delete();
        return redirect()
            ->route('Productos.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
