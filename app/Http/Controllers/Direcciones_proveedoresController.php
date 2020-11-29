<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\Direcciones_proveedoresModel;
use App\Entities\ProveedoresModel;
use Illuminate\Support\Facades\DB;

class Direcciones_proveedoresController extends Controller
{
    public function index(Request $request)
    {
        $proveedor = ProveedoresModel::select('*')->get();
        //$direccionesproveedores = Direcciones_proveedoresModel::select('*');
        // COnsulta entre dos tablas
        $direccionesproveedores = DB::table('direcciones_proveedores')
            ->join('proveedores', 'proveedores.ID_Proveedores', '=', 'direcciones_proveedores.ID_Proveedores');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $direccionesproveedores = $direccionesproveedores->where('Estado_Repu', 'like', '%' . $request->search . '%')
                ->orWhere('Municipio', 'like', '%' . $request->search . '%')
                ->orWhere('Colonia', 'like', '%' . $request->search . '%');
        }
        $direccionesproveedores = $direccionesproveedores->paginate($limit)->appends($request->all());
        return view('Direcciones_proveedores.index', compact('direccionesproveedores', 'proveedor'));
    }
    public function create()
    {
        $proveedor = ProveedoresModel::select('*')->get();
        return view('Direcciones_proveedores.create', compact('proveedor'));
    }
    public function store(Request $request)
    {
        $direccionesproveedores = new Direcciones_proveedoresModel();
        $direccionesproveedores = $this->createUpdatedireccionesproveedores($request, $direccionesproveedores);

        return redirect()
            ->route('direcciones_usuarios.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdatedireccionesproveedores(Request $request, $direccionesproveedores)
    {
        $direccionesproveedores->Estado_Repu = $request->Estado_Repu;
        $direccionesproveedores->Municipio = $request->Municipio;
        $direccionesproveedores->Colonia = $request->Colonia;
        $direccionesproveedores->NombreCalle_Direccion = $request->NombreCalle_Direccion;
        $direccionesproveedores->NumeroExterior_Direccion = $request->NumeroExterior_Direccion;
        $direccionesproveedores->NumeroInterior_Direccion = $request->NumeroInterior_Direccion;
        $direccionesproveedores->CodigoPostal_Direccion = $request->CodigoPostal_Direccion;
        $direccionesproveedores->ID_Proveedores  = $request->ID_Proveedores ;
        
        $direccionesproveedores->save();
        return $direccionesproveedores;
    }
    public function show($direccionesproveedores)
    {
        $direccionesproveedores = Direcciones_proveedoresModel::where('ID_Direccion_Proveedor', $direccionesproveedores)->firstOrFail();
        return view('Direcciones_proveedores.show', compact('direccionesproveedores'));
    }
    public function edit($direccionesproveedores)
    {
        $proveedor = ProveedoresModel::select('*')->get();
        $direccionesproveedores = Direcciones_proveedoresModel::where('ID_Direccion_Proveedor', $direccionesproveedores)->firstOrFail();
        return view('Direcciones_proveedores.edit', compact('direccionesproveedores', 'proveedor'));
    }
    public function update(Request $request, $direccionesproveedores)
    {
        $direccionesproveedores = Direcciones_proveedoresModel::where('ID_Direccion_Proveedor', $direccionesproveedores)->firstOrFail();
        $direccionesproveedores = $this->createUpdatedireccionesproveedores($request, $direccionesproveedores);
        return redirect()
            ->route('Direcciones_proveedores.show', $direccionesproveedores)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($direccionesproveedores)
    {
        $direccionesproveedores = Direcciones_proveedoresModel::findOrFail($direccionesproveedores);
        $direccionesproveedores->delete();
        return redirect()
            ->route('Direcciones_proveedores.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
