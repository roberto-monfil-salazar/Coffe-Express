<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Entities\Telefonos_usuariosModel;
use App\Entities\UsuariosModel;
use Illuminate\Support\Facades\DB;
class Telefonos_usuariosController extends Controller
{
    public function index(Request $request)
    {
        $Usuarios = UsuariosModel::select('*')->get();
        //$telefonousuario= Telefonos_usuariosModel::select('*');
       $telefonousuario = DB::table('telefonos_usuarios')
        ->join('users', 'users.id', '=', 'telefonos_usuarios.id');

       
        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->serarch)) {
            $telefonousuario = $telefonousuario->where('tipoDe_Telefono', 'like', '%' . $request->search . '%')
                ->orWhere('Numero_Telefono', 'like', '%' . $request->search . '%')
                ->orWhere('id', 'like', '%' . $request->search . '%');
        }
        $telefonousuario = $telefonousuario->paginate($limit)->appends($request->all());
        return view('Telefonos_usuarios.index', compact('telefonousuario', 'Usuarios'));
    }
    public function create()
    {
        $Usuarios = UsuariosModel::select('*')->get();
        return view('Telefonos_usuarios.create', compact('Usuarios'));
    }
    public function store(Request $request)
    {
        $telefonousuario = new Telefonos_usuariosModel();
        $telefonousuario = $this->createUpdatetelefonousuario($request, $telefonousuario);

        return redirect()
            ->route('Telefonos_usuarios.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function createUpdatetelefonousuario(Request $request, $telefonousuario)
    {   
        $telefonousuario->tipoDe_Telefono = $request->tipoDe_Telefono;
        $telefonousuario->Numero_Telefono = $request->Numero_Telefono;
        $telefonousuario->id = $request->id;
        $telefonousuario->save();
        return $telefonousuario;
    }
    public function show($telefonousuario)
    {
        $telefonousuario = Telefonos_usuariosModel::where('ID_Telefonos_Usuarios', $telefonousuario)->firstOrFail();
        return view('Telefonos_usuarios.show', compact('telefonousuario'));
    }
    public function edit($telefonousuario)
    {
        $Usuarios = UsuariosModel::select('*')->get();
        $telefonousuario = Telefonos_usuariosModel::where('ID_Telefonos_Usuarios', $telefonousuario)->firstOrFail();
        return view('Telefonos_usuarios.edit', compact('telefonousuario', 'Usuarios'));
    }
    public function update(Request $request, $telefonousuario)
    {
        $telefonousuario = Telefonos_usuariosModel::where('ID_Telefonos_Usuarios', $telefonousuario)->firstOrFail();
        $telefonousuario = $this->createUpdatetelefonousuario($request, $telefonousuario);
        return redirect()
            ->route('Telefonos_usuarios.show', $telefonousuario)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($telefonousuario)
    {
        $telefonousuario = Telefonos_usuariosModel::findOrFail($telefonousuario);
        $telefonousuario->delete();
        return redirect()
            ->route('Telefonos_usuarios.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
