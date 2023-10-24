<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('productos.index',compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->imagen);


       // $validator = Validator::make($request->all(), [
       //     'nombre_producto' => 'required|string|max:255',
       //     'descripcion' => 'required|string',
       //     'precio' => 'required|numeric',
       //     'stock' => 'required|integer',
       //     'estado' => 'required|boolean',
       //     'fecha_activo' => 'required|date',
       //     'fecha_limite' => 'required|date|after:fecha_activo',
       //     //'imagen' => 'image|mimes:jpeg,png,jpg|max:1024', // Tamaño máximo de imagen 1MB
       // ]);
       // if ($validator->fails()) {
       //     return redirect()
       //         ->back()
       //         ->withErrors($validator)
       //         ->withInput();
       // }

        $Producto = new Producto();
        $Producto->nombre_producto = $request->input('nombre_producto');
        $Producto->descripcion = $request->input('descripcion');
        $Producto->precio = $request->input('precio');
        $Producto->stock = $request->input('stock');
        $Producto->estado = $request->input('estado') == '1' ? true : false;
        $Producto->fecha_activo = Carbon::parse($request->input('fecha_activo'));
        $Producto->fecha_limite = Carbon::parse($request->input('fecha_limite'));


        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = time() . '_' . $imagen->getClientOriginalName();
            $imagen->storeAs('public/imagenes', $imagenNombre); // Almacenar en storage/app/public/imagenes
            $Producto->imagen = 'storage/imagenes/' . $imagenNombre; // Ruta incorrecta, debe ser 'imagenes/'
        }


        $Producto->save();

        return redirect()->route('productos.index');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            // Manejo de error si el producto no se encuentra
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }
        // Pasa el producto recuperado a la vista de edición
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            // Manejo de error si el producto no se encuentra
            return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
        }
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->estado = $request->input('estado') == 'true' ? 1 : 0;

        $producto->fecha_activo = Carbon::parse($request->input('fecha_activo'));
        $producto->fecha_limite = Carbon::parse($request->input('fecha_limite'));
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = time() . '_' . $imagen->getClientOriginalName();
            $imagen->storeAs('public/imagenes', $imagenNombre);
            $producto->imagen = 'storage/imagenes/' . $imagenNombre;
        }

        $producto->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $id)
    {
        $id->delete();
        return redirect()->route('productos.index');
    }
}
