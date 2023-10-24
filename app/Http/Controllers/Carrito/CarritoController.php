<?php

namespace App\Http\Controllers\Carrito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Pedido;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Calculator;
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
    // Añadir un registro a la tabla 'carrito'
    Carrito::create([
        'user_id' => auth()->user()->id, // Si los usuarios están autenticados
        'producto_id' => $productos->id,
        'cantidad' => 1, // Ajusta la cantidad según tus necesidades
        'precio' => $productos->precio,
    ]);


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


  public function getTotal()
  {

    $total = 0;
    foreach(Cart::content() as $item){
      $total += $item->qty * $item->price;
    }
    return $total;
  }

  //forulario de datos de envio del cliente
  public function completarCompra(Request $request)
{
  $pedido =new Pedido();
    // Obtén los datos del formulario de envío
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $telefono = $request->input('telefono');
    $direccion = $request->input('direccion');
    $referencias = $request->input('referencias');
    $codigoPostal = $request->input('codigoPostal');
    $estado = $request->input('estado');
    $ciudad = $request->input('ciudad');

    // Crea un nuevo registro de pedido en la base de datos
    $pedido = Pedido::create([
        'usuario_id' => auth()->user()->id, // Si los usuarios están autenticados
        'fecha_pedido' => now(), // Puedes ajustar la fecha y hora según tus necesidades
        'estado' => 'pendiente', // O el estado deseado
        'direccion_envio' => $direccion,
        'direccion_facturacion' => '', // Puedes completar esto según tu lógica
        'metodo_pago' => 'PayPal', // O el método de pago utilizado
        'monto_total' => 0, // Puedes ajustar esto después de calcular el monto total
        // Otros campos según tus necesidades
    ]);

    // Una vez que tengas el ID del pedido, puedes asociar los productos al pedido
    // y realizar el cálculo del monto total, entre otras cosas.

    // Finalmente, redirige al cliente a la pasarela de pago de PayPal
    return redirect()->route('paypal.checkout'); // Ajusta la ruta según tu aplicación
}


}



