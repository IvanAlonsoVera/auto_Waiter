<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarController extends Controller
{
    public function bebidas(){
        $bebidas = bebida::All();
    }
    public function picoteo(){
        $picoteo = picoteo::All();
    }
    public function carta(){
        $carta = carta::All();
    }
    public function novedades(){
        $novedades = novedades::All();
    }
}
