<?php

namespace App\Http\Controllers;

use App\Entities\categorias_proModel;
use Illuminate\Http\Request;

class Categoria_proController extends Controller
{
    public function index(Request $request)
    {
        $categorias_pro = categorias_proModel::select('*');

        $limit = (isset($request->limit)) ? $request->limit : 10;

        if (isset($request->search)) {
            $categorias_pro = $categorias_pro->where('categoria', 'like', '%' . $request->search . '%')
                ->orWhere('Nombre', 'like', '%' . $request->search . '%')
                ->orWhere('condicion', 'like', '%' . $request->search . '%');
        }
        $categorias_pro = $categorias_pro->paginate($limit)->appends($request->all());
        return view('categorias_pro.index', compact('categorias_pro'));
    }
    public function create()
    {
        return view('categorias_pro.create');
    }
    public function store(Request $request)
    {
        $categorias_pro = new categorias_proModel();
        $categorias_pro = $this->crateUpdatecacategorias_pro($request, $categorias_pro);

        return redirect()
            ->route('categorias_pro.index')
            ->with('message', 'Registro creado satisfactoriamente');
    }
    public function crateUpdatecacategorias_pro(Request $request, $categorias_pro)
    {
        $categorias_pro->categoria = $request->categoria;
        $categorias_pro->Nombre = $request->Nombre;
        $categorias_pro->condicion = $request->condicion;
        $categorias_pro->save();
        return $categorias_pro;
    }
    public function show($categorias_pro)
    {
        $categorias_pro = categorias_proModel::where('ID_Categorias_Pro', $categorias_pro)->firstOrFail();
        return view('categorias_pro.show', compact('categorias_pro'));
    }
    public function edit($categorias_pro)
    {
        $categorias_pro = categorias_proModel::where('ID_Categorias_Pro', $categorias_pro)->firstOrFail();
        return view('categorias_pro.edit', compact('categorias_pro'));
    }
    public function update(Request $request, $categorias_pro)
    {
        $categorias_pro = categorias_proModel::where('ID_Categorias_Pro', $categorias_pro)->firstOrFail();
        $categorias_pro = $this->crateUpdatecacategorias_pro($request, $categorias_pro);
        return redirect()
            ->route('categorias_pro.show', $categorias_pro)
            ->with('message', 'Actualización correcta');
    }
    public function destroy($categorias_pro)
    {
        $categorias_pro = categorias_proModel::findOrFail($categorias_pro);
        $categorias_pro->delete();
        return redirect()
            ->route('categorias_pro.index')
            ->with('message', 'Registro eliminado satisfactoriamente');
    }
}
