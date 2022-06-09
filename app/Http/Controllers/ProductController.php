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
    public function index()
    {               //esto es el modelo
        $productos = productos::all();
        return view('products', compact('products'));
    }
   
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
           
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'productos added to cart successfully!');
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
            session()->flash('success', 'productos removed successfully');
        }
    }
}