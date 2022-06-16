<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\productos;
   
class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function index()
    // {               //esto es el modelo
        // $productos = productos::all();
        // return view('products', compact('productos'));
    // }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $productos = productos::findOrFail($id);
           
        $cart = session()->get('cart', []);
   
        if(isset($cart[$id])) {
            $cart[$id]['cantidad']++;
        } else {
            $cart[$id] = [
                "nombre" => $productos->nombre,
                "cantidad" => 1,
                "precio" => $productos->precio,
                "img" => $productos->img
            ];
        }
           
        session()->put('cart', $cart);              //mensaje que sale cuando añadimos un producto
        return redirect()->back();
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->cantidad){
            $cart = session()->get('cart');
            $cart[$request->id]["cantidad"] = $request->cantidad;
            session()->put('cart', $cart);
            session()->flash('success', '¡Productos añadidos correctamente!');
        }
    }
   
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', '¡Eliminado correctamente!');
        }
    }

    public function almacenarPedido(Request $datos){
        //se va a generar al darle a comprar
        $p = new pedidos();
         
        $p->productos = $datos->productos;
        $p->cantidades = $datos->cantidades;
        $p->precio = $datos->precio;
        // $p->mesa = $datos->mesa;

        $p->save();
    }

    //______________________ADMIN__________________________//

    public function borrarProducto(Request $request){
        $producto = productos::find($id);

        
    }
    public function formCrearProducto(){
        return view('/formCrear');
    }
    public function CrearProducto(){
        


        return view('/novedades');
    }

}