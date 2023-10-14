<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nome = $request-> nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->email = $request->email;
        $usuario->register_date = $request->register_date;
        $usuario->save();
    }

    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nome = $request-> nome;
        $usuario->sobrenome = $request->sobrenome;
        $usuario->email = $request->email;
        $usuario->register_date = $request->register_date;
        $usuario->save();

        return $usuario;
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return 'Eliminado com sucesso';
    }
}
