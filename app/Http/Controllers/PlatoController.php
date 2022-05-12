<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\Pedidos;


class PlatoController extends Controller
{                   //
    public function listadoPlatos($id){
        $listaPlatos = Plato::where('pedido_id',$id)->get();
            //listaPlato recogerá los datos y los pasará al blade
        return view('listaPlatos',['listaPlato' => $listaPlatos]);
    }


    public function formCrear(){
        return view('formularioCrearPlato',['listaPedidos'=>pedido::All()]);
    }

    public function guardar(Request $datos){
        //validar
        $respuesta = $datos->validate([
            //cuidaooo hay que ver qué queremos
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'pedido_id'=>'required'
        ]);
        //crear modelo
        $platoParametro = new Plato();

        $platoParametro->nombre = $datos->nombre;
        $platoParametro->edad = $datos->edad;
        $platoParametro->pedido_id = $datos->pedido_id;

        $platoParametro->save();
            //utilizamos el nombre de la ruta. También necesita parámetro en este caso
        return redirect()->route('listaPlatos',['id'=>$datos->pedido_id]);
    }



    public function borrar($id){

        $platoParametro = Plato::find($id);

        $platoParametro->delete();

        $pedido_id  =$platoParametro->pedido_id;
       return redirect()->route('listaPlatos',['id'=>$pedido_id]);
    
    }


    public function modificar($id){

        $platoParametro = Plato::find($id);

        $pedidos = pedido::All();

       return view('formularioCrearPlato',['Plato'=>$platoParametro,'listaPedidos'=>$pedidos]);
    
    }

    public function modificarGuardarBD(Request $datos, $id){
        $platoParametro = Plato::find($id);

        $platoParametro->nombre = $datos->nombre;
        $platoParametro->edad = $datos->precio;
        $platoParametro->pedido_id = $datos->pedido_id;

        $platoParametro->save();

        return redirect()->route('dashboard');
    }

}
