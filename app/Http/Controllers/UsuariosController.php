<?php

namespace App\Http\Controllers;

use App\Entities\UsuariosModel;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = UsuariosModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $usuarios = $usuarios->where('Nombre_Usuario', 'like', '%' . $request->search . '%')
                ->orWhere('Apellido_Pa_Usuario', 'like', '%' . $request->search . '%')
                ->orWhere('Apellido_Ma_Usuario', 'like', '%' . $request->search . '%');
        }
        $usuarios = $usuarios->paginate($limit)->appends($request->all());
        return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
        $usuarios = new UsuariosModel();
        $usuarios = $this->crateUpdatecausuarios($request, $usuarios);

        return redirect()
            ->route('usuarios.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function crateUpdatecausuarios(Request $request, $usuarios)
    {
        $usuarios->name = $request->name;
        $usuarios->Apellido_Pa_Usuario = $request->Apellido_Pa_Usuario;
        $usuarios->Apellido_Ma_Usuario = $request->Apellido_Ma_Usuario;
        $usuarios->Edad = $request->Edad;
        $usuarios->Sexo = $request->Sexo;
        $usuarios->email = $request->email;
        $usuarios->password = bcrypt($request['password']);
        $usuarios->save();
        return $usuarios;
    }
    public function show($usuarios)
    {
        $usuarios = UsuariosModel::where('id', $usuarios)->firstOrFail();
        return view('usuarios.show', compact('usuarios'));
    }
    public function edit($usuarios)
    {
        $usuarios = UsuariosModel::where('id', $usuarios)->firstOrFail();
        return view('usuarios.edit', compact('usuarios'));
    }
    public function update(Request $request, $usuarios)
    {
        $usuarios = UsuariosModel::where('id', $usuarios)->firstOrFail();
        $usuarios = $this->crateUpdatecausuarios($request, $usuarios);
        return redirect()
            ->route('usuarios.show', $usuarios)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($usuarios)
    {
        $usuarios = UsuariosModel::findOrFail($usuarios);
        $usuarios->delete();
        return redirect()
            ->route('usuarios.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
