<?php

namespace App\Http\Controllers\Carrito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use Gloudemans\Shoppingcart\Facades\Cart;

class CarritoController extends Controller
{


  public function carrito()
  {
    return view('shop.cart.carrito');
  }
  public function index()
  {

    $productos = Producto::where('estado', true)->get();
    $products = Producto::all();
    return view('shop.shop', compact('productos', 'products', ));
  }

  public function addToCart($id)
  {

    $productos = Producto::findOrFail($id);
    Cart::add([
      'id' => $productos->id,
      'name' => $productos->nombre_producto,
      'price' => $productos->precio,
      'weight' => 0,
      'qty' => 1,
      'options' => [
        'imagen' => $productos->imagen,

      ]
    ]);
    //session()->flash('success', 'Producto agregado al carrito con éxito.');
    $response = [
        'message' => 'Producto agregado al carrito con éxito.'
    ];

    return response()->json($response);
  }

  public function qtyIncrement($id)
  {

    $producto = Cart::get($id);
    $updateQty = $producto->qty + 1;
    //dd($updateQty);
    Cart::update($id, $updateQty);

    return redirect()->back();
  }

  public function qtyDecrement($id)
  {
    $producto = Cart::get($id);
    $updateQty = $producto->qty - 1;
    if ($updateQty > 0) {
      Cart::update($id, $updateQty);
    }

    return redirect()->back();

  }

  public function removeProduct($id)
  {
    Cart::remove($id);
    return redirect()->back();
  }
}



