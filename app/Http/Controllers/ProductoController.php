<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Producto;
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
        return view('productos.index');
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
        $validator = Validator::make($request->all(), [
            'nombre_producto' => 'required|string|max:255|unique:productos',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'status' => 'required|string',
            'fecha_activo' => 'required|date',
            'fecha_inactivo' => 'required|date|after:fecha_activo',
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
            // Procesar la imagen   
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $imagenNombre = time() . '_' . $imagen->getClientOriginalName();
            $imagen->storeAs('public/imagenes', $imagenNombre);
    
            // Guardar la ruta de la imagen en la base de datos
            $Producto = new Producto();
            $Producto->imagen = 'storage/imagenes/' . $imagenNombre;
        } else {
            $Producto = new Producto();
        }

        $Producto->nombre_producto = $request->input('nombre_producto');
        $Producto->descripcion = $request->input('descripcion');
        $Producto->precio = $request->input('precio');
        $Producto->stock = $request->input('stock');
        $Producto->status = $request->input('status');
    
        // Utiliza Carbon para las fechas
        $Producto->fecha_activo = Carbon::parse($request->input('fecha_activo'));
        $Producto->fecha_limite = Carbon::parse($request->input('fecha_limite'));

        $Producto ->save();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
