<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){

        return view ('admin.dashboard');
    }

    public function listar_usuarios(){

        $lista_usuarios = User::all();
        //dd($lista_usuarios);

        return view('admin.user', compact('lista_usuarios'));
    }

    public function delete($id){

        $usuario = User::find($id);

        $usuario->delete();

        return redirect()->back()->with('mensaje', 'El usuario ha sido eliminado');
    }
    
    public function edit($id, Request $request){
        //$producto = new Product(); Error: Crea un nuevo objeto

        $usuario = User::find($id);

        $usuario->name = $request->name;

        $usuario->email = $request->email;

        $usuario->save();

        return redirect()->back()->with('mensaje', 'El usuario ha sido actualizado');
    }

    public function update_user($id){
        
        $usuario = User::find($id);

        return view('admin.updateuser', compact('usuario'));
    }

    public function contador(){
        $users = DB::table('users')->count();
        $categories = DB::table('categories')->count();
        $products = DB::table('products')->count();
        //dd($users);
        return view('inicio', compact('users', 'categories', 'products'));
    }
}