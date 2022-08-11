<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProveedorRequest;
use App\Models\Proveedor;

class ProveedoresController extends Controller
{
    public function index()
    {
        $titulo = 'Proveedores';
        $query = '';
        if (request('query') != "") {
            $query = request('query');
            $items = Proveedor::search($query)->paginate(3);
        } else {
            $items = Proveedor::paginate(3);
        }
        return view(
            'modules.proveedores.index',
            compact('items', 'titulo', 'query')
        );
    }
    public function create()
    {
        $titulo = 'Proveedores create';
        $item = new Proveedor();
        return view('modules.proveedores.create', compact('titulo', 'item'));
    }
    public function edit(Proveedor $proveedor)
    {
        $titulo = 'Proveedores edit';
        $item = $proveedor;
        return view('modules.proveedores.edit', compact('titulo', 'item'));
    }
    public function show(Proveedor $proveedor)
    {
        $titulo = 'Proveedores Categoria';
        $item = $proveedor;
        return view('modules.proveedores.show', compact('titulo', 'item'));
    }
    public function store(ProveedorRequest $request)
    {
        $item = new Proveedor();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->save();
        toast('Nuevo Proveedor creado', 'success')->position('top');
        return redirect()->route('proveedores');
    }
    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        $item = $proveedor;
        $item->name = $request->name;
        $item->email = $request->email;
        $item->save();
        toast("Proveedor " . $item->name . " actualizado", 'success')->position('top');
        return redirect()->route('proveedores');
    }
    // elimina el registro
    public function destroy(Proveedor $proveedor)
    {
        $item = $proveedor;
        $item->delete();
        toast('Proveedor ' . $proveedor->name . ' eliminado', 'success')->position('top');
        return redirect()->route('proveedores');
    }
}
