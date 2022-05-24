<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function ListarBebidas(){
        $bebida = bebida::All();
    }
    public function ListarPicoteo(){
        $picoteo = picoteo::All();
    }
    public function ListarCarta(){
        $carta = carta::All();
    }
    public function ListarNovedades(){
        $novedad = novedades::All();
    }
}
