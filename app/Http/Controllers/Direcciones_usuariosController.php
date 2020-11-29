<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\Direcciones_usuariosModel;
use App\Entities\UsuariosModel;
use Illuminate\Support\Facades\DB;
class Direcciones_usuariosController extends Controller
{
    public function index(Request $request)
    {
        $Usuario = UsuariosModel::select('*')->get();
        //$direccionesusuarios = Direcciones_usuariosModel::select('*');
        $direccionesusuarios = DB::table('direcciones_usuarios')
        ->join('users', 'users.id', '=', 'direcciones_usuarios.id');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $direccionesusuarios = $direccionesusuarios->where('Estado_Repu', 'like', '%' . $request->search . '%')
                ->orWhere('Municipio', 'like', '%' . $request->search . '%')
                ->orWhere('Colonia', 'like', '%' . $request->search . '%');
        }
        $direccionesusuarios = $direccionesusuarios->paginate($limit)->appends($request->all());
        return view('Direcciones_usuarios.index', compact('direccionesusuarios', 'Usuario'));
    }
    public function create()
    {
        $Usuario = UsuariosModel::select('*')->get();
        return view('Direcciones_usuarios.create', compact('Usuario'));
    }
    public function store(Request $request)
    {
        $direccionesusuarios = new Direcciones_usuariosModel();
        $direccionesusuarios = $this->createUpdatedireccionesusuarios($request, $direccionesusuarios);

        return redirect()
            ->route('Direcciones_usuarios.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdatedireccionesusuarios(Request $request, $direccionesusuarios)
    {
       
        $direccionesusuarios->Estado_Repu = $request->Estado_Repu;
        $direccionesusuarios->Municipio = $request->Municipio;
        $direccionesusuarios->Colonia = $request->Colonia;
        $direccionesusuarios->NombreCalle_Direccion = $request->NombreCalle_Direccion;
        $direccionesusuarios->NumeroExterior_Direccion = $request->NumeroExterior_Direccion;
        $direccionesusuarios->NumeroInterior_Direccion = $request->NumeroInterior_Direccion;
        $direccionesusuarios->CodigoPostal_Direccion = $request->CodigoPostal_Direccion;
        $direccionesusuarios->id  = $request->id ;
        
        $direccionesusuarios->save();
        return $direccionesusuarios;
    }
    public function show($direccionesusuarios)
    {
        $direccionesusuarios = Direcciones_usuariosModel::where('ID_Direccion_Usuario', $direccionesusuarios)->firstOrFail();
        return view('Direcciones_usuarios.show', compact('direccionesusuarios'));
    }
    public function edit($direccionesusuarios)
    {
        $Usuario = UsuariosModel::select('*')->get();
        $direccionesusuarios = Direcciones_usuariosModel::where('ID_Direccion_Usuario', $direccionesusuarios)->firstOrFail();
        return view('Direcciones_usuarios.edit', compact('direccionesusuarios', 'Usuario'));
    }
    public function update(Request $request, $direccionesusuarios)
    {
        $direccionesusuarios = Direcciones_usuariosModel::where('ID_Direccion_Usuario', $direccionesusuarios)->firstOrFail();
        $direccionesusuarios = $this->createUpdatedireccionesusuarios($request, $direccionesusuarios);
        return redirect()
            ->route('Direcciones_usuarios.show', $direccionesusuarios)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($direccionesusuarios)
    {
        $direccionesusuarios = Direcciones_usuariosModel::findOrFail($direccionesusuarios);
        $direccionesusuarios->delete();
        return redirect()
            ->route('Direcciones_usuarios.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
