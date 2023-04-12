<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Usuario;

class UsuarioController extends Controller{

    function index() {
        Usuario::create([
            'nome' => 'Giordano',
            'telefone' => '49 99162-9064',
            'email' =>'giordanoparisotto65@gmail.com']);

        $usuario = Usuario::All();
       // dd($usuario);

        return view("UsuarioList")->with(["usuarios"=> $usuarios]);

    }


}

