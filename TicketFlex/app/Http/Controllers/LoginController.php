<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //


    public function register(Request $request){
        //Validar los datos

        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = Hash::make($request->password);
        $usuario->telefono = $request->telefono;

        $usuario->save();

        //Autenticar al usuario y redirigirlo a la página de inicio(Home)
        Auth::login($usuario);

        return redirect('/');//ruta de la página de inicio(Home)



        //HAY QUE IMPLEMENTAR MIDDLWARE EN LA RUTA PARA QUE NO SE PUEDA ACCEDER A ESTA RUTA Y PROTEGERLA
    }




    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');//ruta de la página de inicio(Home)
    }
}
