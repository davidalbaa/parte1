<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $titulo = 'Categorias';
        $query = '';
        if (request('query') != "") {
            $query = request('query');
            $items = Categoria::search($query)->paginate(3);
        } else {
            $items = Categoria::paginate(3);
        }
        return view(
            'modules.categorias.index',
            compact('items', 'titulo', 'query')
        );
    }
    public function create()
    {
        $titulo = 'Categorias create';
        $item = new Categoria();
        return view('modules.categorias.create', compact('titulo', 'item'));
    }
    public function edit(Categoria $categoria)
    {
        $titulo = 'Categorias edit';
        $item = $categoria;
        return view('modules.categorias.edit', compact('titulo', 'item'));
    }
    public function show(Categoria $categoria)
    {
        $titulo = 'Usuarios Categoria';
        $item = $categoria;
        return view('modules.categorias.show', compact('titulo', 'item'));
    }
    // funciones que interactuan con la db
    // guarda el registro en la base de datos
    public function store(CategoriaRequest $request)
    {
        $item = new Categoria();
        $item->name = $request->name;
        $item->save();
        toast('Nueva Categoria creado', 'success')->position('top');
        return redirect()->route('categorias');
    }
    // actualiza el registro
    public function update(CategoriaRequest $request, Categoria $categoria)
    {
        $item = $categoria;
        $item->name = $request->name;
        $item->save();
        toast("Categoria " . $item->name . " actualizada", 'success')->position('top');
        return redirect()->route('categorias');
    }
    // elimina el registro
    public function destroy(Categoria $categoria)
    {
        $item = $categoria;
        $item->delete();
        toast('Categoria ' . $categoria->name . ' eliminado', 'success')->position('top');
        return redirect()->route('categorias');
    }
}
