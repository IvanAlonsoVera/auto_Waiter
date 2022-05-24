<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    //Generar pedido en la bbdd
                        //tiene que recibir un parámetro con los IDs de los platos, precios y  las cantidades en el orden correspondiente
    public function crearPedidoEnBBDD(Request $datos){
        //se va a generar al darle a comprar
        $pedido = new pedidos();
        
                            //esto debería ser una cadena de texto separado por comas o puntos(para no liar a la bbdd)
        $p->productos = $datos-> productos;
        $p->cantidades = $datos-> cantidades;
        $p->precio = $datos-> precio;

        $p->save();
    
        

        //en el return darle la cantidad de platos añadidos a la cesta?
    }

    //sacar carrito

    public function listarPedido(){
        //hay que buscar el pedido según el ID. En la consulta traer el nombre
        //$lp = pedidos::All();

        return view('listarPedido',['listarPedido' => $lp]);
    }
}
