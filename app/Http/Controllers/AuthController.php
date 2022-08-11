<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(["guest"])->only(["index", "loginAction"]);
    }

    public function index()
    {
        $titulo = 'Login';
        $item = new User();
        return view('modules.auth.index', compact('item', 'titulo'));
    }

    public function loginAction(Request $request)
    {
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route("home");
        }
        return back()->withInput($credenciales);
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route("auth-login");
    }

    public function home()
    {
        $titulo = 'Home';
        return view('modules.auth.home', compact('titulo'));
    }
}
