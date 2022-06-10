<?php

namespace App\Http\Controllers;
use App\Models\productos; 

use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function ListarBebidas(){
        $bebidas = productos::where('tipo','bebida')->get();

        return view('/bebidas',['listaBebidas' => $bebidas]);

    }
    public function ListarPicoteo(){
        $picoteo = productos::where('tipo','picoteo')->get();

        return view('/picoteo',['listaPicoteo' => $picoteo]);
    }
    public function ListarCarta(){
        $comida = productos::where('tipo','comida')->get();

        return view('/carta',['listaComida' => $comida]);
    }
    public function ListarNovedades(){
        $novedad = productos::where('tipo','novedad')->get();

        return view('/novedades',['listaNovedades' => $novedad]);
    }
}
