<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\Telefonos_proveedoresModel;
use App\Entities\ProveedoresModel;
use Illuminate\Support\Facades\DB;

class Telefonos_proveedoresController extends Controller
{
    public function index(Request $request)
    {
        $Proveedor = ProveedoresModel::select('*')->get();
        //$telefonosproveedor = Telefonos_proveedoresModel::select('*');
        $telefonosproveedor = DB::table('telefonos_proveedores')
        ->join('proveedores', 'proveedores.ID_Proveedores', '=', 'telefonos_proveedores.ID_Proveedores');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $telefonosproveedor = $telefonosproveedor->where('tipoDe_Telefono', 'like', '%' . $request->search . '%')
                ->orWhere('Numero_Telefono', 'like', '%' . $request->search . '%')
                ->orWhere('ID_Proveedores', 'like', '%' . $request->search . '%');
        }
        $telefonosproveedor = $telefonosproveedor->paginate($limit)->appends($request->all());
        return view('Telefonos_proveedores.index', compact('telefonosproveedor', 'Proveedor'));
    }
    public function create()
    {
        $Proveedor = ProveedoresModel::select('*')->get();
        return view('Telefonos_proveedores.create', compact('Proveedor'));
    }
    public function store(Request $request)
    {
        $telefonosproveedor = new Telefonos_proveedoresModel();
        $telefonosproveedor = $this->createUpdatetelefonosproveedor($request, $telefonosproveedor);

        return redirect()
            ->route('Telefonos_proveedores.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdatetelefonosproveedor(Request $request, $telefonosproveedor)
    {
        $telefonosproveedor->tipoDe_Telefono = $request->tipoDe_Telefono;
        $telefonosproveedor->Numero_Telefono = $request->Numero_Telefono;
        $telefonosproveedor->ID_Proveedores  = $request->ID_Proveedores;
        $telefonosproveedor->save();
        return $telefonosproveedor;
    }
    public function show($telefonosproveedor)
    {
        $telefonosproveedor = Telefonos_proveedoresModel::where('ID_Telefonos_Proveedores', $telefonosproveedor)->firstOrFail();
        return view('Telefonos_proveedores.show', compact('telefonosproveedor'));
    }
    public function edit($telefonosproveedor)
    {
        $Proveedor = ProveedoresModel::select('*')->get();
        $telefonosproveedor = Telefonos_proveedoresModel::where('ID_Telefonos_Proveedores', $telefonosproveedor)->firstOrFail();
        return view('Telefonos_proveedores.edit', compact('telefonosproveedor', 'Proveedor'));
    }
    public function update(Request $request, $telefonosproveedor)
    {
        $telefonosproveedor = Telefonos_proveedoresModel::where('ID_Telefonos_Proveedores', $telefonosproveedor)->firstOrFail();
        $telefonosproveedor = $this->createUpdatetelefonosproveedor($request, $telefonosproveedor);
        return redirect()
            ->route('Telefonos_proveedores.show', $telefonosproveedor)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($telefonosproveedor)
    {
        $telefonosproveedor = Telefonos_proveedoresModel::findOrFail($telefonosproveedor);
        $telefonosproveedor->delete();
        return redirect()
            ->route('Telefonos_proveedores.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
