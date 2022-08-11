<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    public function roles()
    {
        return [
            ['text' => 'Admin', 'value' => 'admin'],
            ['text' => 'Vendedor', 'value' => 'vendedor']
        ];
    }
    public function index()
    {
        $titulo = 'Usuarios';
        $query = '';
        if (request('query') != "") {
            $query = request('query');
            $items = User::search($query)->paginate(3);
        } else {
            $items = User::paginate(3);
        }
        return view('modules.usuarios.index', compact('items', 'titulo', 'query'));
    }
    public function create()
    {
        $titulo = 'Usuarios create';
        $item = new User();
        $roles = $this->roles();
        return view('modules.usuarios.create', compact('titulo', 'item', 'roles'));
    }
    public function edit(User $user)
    {
        $titulo = 'Usuarios edit';
        $item = $user;
        $roles = $this->roles();
        return view('modules.usuarios.edit', compact('titulo', 'item', 'roles'));
    }
    public function show(User $user)
    {
        $titulo = 'Usuarios eliminar';
        $item = $user;
        return view('modules.usuarios.show', compact('titulo', 'item'));
    }
    public function store(UsuarioRequest $request)
    {
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password);
        $item->rol = $request->rol;
        if ($request->file('img')) {
            $item->img = $this->saveImg($request->file('img'));
        }
        $item->save();
        toast('Nuevo usuario creado', 'success')->position('top');
        return redirect()->route('usuarios');
    }
    public function update(UsuarioRequest $request, User $user)
    {
        $item = $user;
        $item->name = $request->name;
        if (isset($request->password)) {
            $item->password = Hash::make($request->password);
        }
        if ($request->file('img')) {
            $this->deleteImg($item->img);
            $item->img = $this->saveImg($request->file('img'));
        }
        $item->rol = $request->rol;
        $item->save();
        toast("Usuario " . $item->name . " actualizado", 'success')->position('top');
        return redirect()->route('usuarios');
    }
    public function destroy(User $user)
    {
        $item = $user;
        $item->delete();
        $this->deleteImg($item->img);
        toast('Usuario ' . $item->name . ' eliminado', 'success')->position('top');
        return redirect()->route('usuarios');
    }

    public function deleteImg($fileName)
    {
        Storage::delete("imgsUsuarios/$fileName");
    }

    public function saveImg($file)
    {
        $fileName = time() . '.' . $file->clientExtension();
        Storage::putFileAs("imgsUsuarios", $file, $fileName);
        return $fileName;
    }
}
