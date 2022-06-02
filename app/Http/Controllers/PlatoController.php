<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\Pedidos;


class PlatoController extends Controller
{          
    //-------------funciones de crear el producto desde el formulario--------------------------------------------         

    public function guardar(Request $datos){

        $resp = $datos->validate([
            'nombre' => 'required|max:100',
            'tipo' => 'required|max:20',
            'precio'=> 'required|numeric',
            'img' => 'required|max:100',
        ]);

        $producto = new productos();

        $producto->nombre = $datos->nombre;
        $producto->tipo = $datos->tipo;
        $producto->precio = $datos->precio;
        $producto->img = $datos->img;

        $producto->save();
    
        return redirect()->route('crearProducto');

    }

    //------------funciones de modificar -------------------------------------------------
    public function mod($id){
        //buscamos el plato(producto) según el id
        $pl = productos::find($id);

        return view ('formularioModificarProductos',['producto' => $pl]);

    }

    public function modBD(Request $datos, $id){
        
        $pl = jugador::find($id);

        $pl->nombre = $datos->nombre;
        $pl->tipo = $datos->tipo;
        $pl->precio = $datos->precio;
        $pl->img = $datos->img;

        $pl->save();
                            //quizás hay que cambiar que lleve al dashboard
        return redirect()->route('dashboard');
    }
    //-------------------------------------------------------------------
}
