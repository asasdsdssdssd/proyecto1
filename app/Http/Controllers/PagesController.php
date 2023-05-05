<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class PagesController extends Controller
{
    public function index(){
        $usuarios = 'App\Models\Usuarios'::all();
        return view('welcome',compact('usuarios'));
    }

    public function agregar(){
        return view('addUser');
    }

    
    public function crear(Request $request){
        //return $request->all();
        $registro = new Usuarios;

        $registro->nombre = $request['nombre'];
        $registro->ap1 = $request['ap1'];
        $registro->ap2 = $request['ap2'];
        $registro->edad = $request['edad'];
        $registro->fechaNacimiento = $request['fechaNacimiento'];
        $registro->linkRedes = $request['linkRedes'];
        $registro->email = $request['email'];
        $registro->telefono = $request['telefono'];

        $registro->save();

        return redirect()->action('App\Http\Controllers\PagesController@index')->with('mensaje', 'Registro creado');
    }

    public function editar($id){
        $usuarios = Usuarios::findOrFail($id);
        return view('editUser', compact('usuarios'));
    }

    public function update(Request $request, $id){
        
        $notaActualizada = Usuarios::find($id);
        $notaActualizada->nombre = $request->nombre;
        $notaActualizada->ap1  = $request->ap1 ;
        $notaActualizada->ap2 = $request->ap2;
        $notaActualizada->edad = $request->edad;
        $notaActualizada->fechaNacimiento  = $request->fechaNacimiento ;
        $notaActualizada->linkRedes  = $request->linkRedes ;
        $notaActualizada->email  = $request->email ;
        $notaActualizada->telefono  = $request->telefono;
        $notaActualizada->save();
        return back()->with('mensaje', 'Nota editada!');
    
    }

    public function eliminar($id){
    $eliminarRegistro = Usuarios::findOrFail($id);
    $eliminarRegistro->delete();

    return back()->with('mensaje', 'Nota eliminada!');
    }
}