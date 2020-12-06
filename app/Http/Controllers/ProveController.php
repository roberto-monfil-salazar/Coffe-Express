<?php

namespace App\Http\Controllers;

use App\Entities\ProveedoresModel;
use Illuminate\Http\Request;

class ProveController extends Controller
{
    public function index(Request $request)
    {
        $proveedores = ProveedoresModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $proveedores = $proveedores->where('Nombre_proveedor', 'like', '%' . $request->search . '%')
                ->orWhere('CorreoElectronico_proveedor', 'like', '%' . $request->search . '%')
                ->orWhere('RazonSocual_Proveedor', 'like', '%' . $request->search . '%');
        }
        $proveedores = $proveedores->paginate($limit)->appends($request->all());
        return view('proveedores.index', compact('proveedores'));
    }
    public function create()
    {
        return view('proveedores.create');
    }
    public function store(Request $request)
    {
        $proveedores = new ProveedoresModel();
        $proveedores = $this->crateUpdatecaproveedores($request, $proveedores);

        return redirect()
            ->route('proveedores.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function crateUpdatecaproveedores(Request $request, $proveedores)
    {
        $proveedores->Nombre_proveedor = $request->Nombre_proveedor;
        $proveedores->CorreoElectronico_proveedor = $request->CorreoElectronico_proveedor;
        $proveedores->RazonSocual_Proveedor = $request->RazonSocual_Proveedor;
        $proveedores->save();
        return $proveedores;
    }
    public function show($proveedores)
    {
        $proveedores = ProveedoresModel::where('ID_Proveedores', $proveedores)->firstOrFail();
        return view('proveedores.show', compact('proveedores'));
    }
    public function edit($proveedores)
    {
        $proveedores = ProveedoresModel::where('ID_Proveedores', $proveedores)->firstOrFail();
        return view('proveedores.edit', compact('proveedores'));
    }
    public function update(Request $request, ProveedoresModel $proveedores)
    {

        $proveedores = ProveedoresModel::where('ID_Proveedores', $proveedores)->firstOrFail();
        $proveedores = $this->crateUpdatecaproveedores($request, $proveedores);
        return redirect()
            ->route('proveedores.show', $proveedores)
            ->with('message', 'Actualización correcta');
    }

    public function destroy($proveedores)
    {
        $proveedores = ProveedoresModel::findOrFail($proveedores);
        $proveedores->delete();
        return redirect()
            ->route('proveedores.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
