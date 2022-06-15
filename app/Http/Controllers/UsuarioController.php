<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function registroUsuario(Request $datos){
        $user = new User();

        $user->name = $datos->name;
        $user->email = $datos->email;
        $user->password = Hash::make($datos->password);

        $user->save();

        return redirect()->back();
    }
}
