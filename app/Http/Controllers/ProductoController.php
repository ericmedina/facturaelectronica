<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\FlashNotifier;
use App\Producto;
use App\Proveedor;
use App\CategoriaProducto;
use App\Marca;
use App\IVA;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Producto::search($request->buscar)->orderBy('producto', 'ASC')->get();
        $productos->each(function($producto){
            $producto->proveedor;
            $producto->marca;
            $producto->categoria_producto;
        });
        return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::orderBy('nombre', 'ASC')->get();
        $marca = Marca::orderBy('marca', 'ASC')->get();
        $categoria = CategoriaProducto::orderBy('categoria', 'ASC')->get();
        $iva = IVA::orderBy('id', 'ASC')->get();
        return view('productos.create')->with('iva', $iva)->with('proveedores', $proveedores)->with('marcas', $marca)->with('categorias', $categoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->codigo = $request->codigo;
        $producto->producto = $request->producto;
        $producto->stock = $request->stock;
        $producto->stock_minimo = $request->stock_minimo;
        $producto->precio_compra = $request->precio_compra;
        $producto->precio_venta = $request->precio_venta;
        $producto->iva_id = $request->iva;
        $producto->proveedor_id = $request->proveedor;
        $producto->categoria_producto_id = $request->categoria_producto;
        $producto->marca_id = $request->marca;
        $producto->save();
        flash("<b>¡$producto->producto</b> ha sido agregado con éxito!")->success()->important();
        return redirect(route('productos.index'));
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
         $proveedores = Proveedor::orderBy('nombre', 'ASC')->get();
        $marca = Marca::orderBy('marca', 'ASC')->get();
        $categoria = CategoriaProducto::orderBy('categoria', 'ASC')->get();
        $iva = IVA::orderBy('id', 'ASC')->get();
        $producto = Producto::find($id);
        return view('productos.edit')->with('iva', $iva)->with('proveedores', $proveedores)->with('marcas', $marca)->with('categorias', $categoria)->with('producto', $producto);
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
        $producto->codigo = $request->codigo;
        $producto->producto = $request->producto;
        $producto->stock = $request->stock;
        $producto->stock_minimo = $request->stock_minimo;
        $producto->precio_compra = $request->precio_compra;
        $producto->precio_venta = $request->precio_venta;
        $producto->iva_id = $request->iva;
        $producto->proveedor_id = $request->proveedor;
        $producto->categoria_producto_id = $request->categoria_producto;
        $producto->marca_id = $request->marca;
        $producto->save();
        flash("<b>¡$producto->producto</b> ha sido editado con éxito!")->warning()->important();
        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        flash("<b>¡$producto->producto</b> ha sido eliminado con éxito!")->error()->important();
        return redirect(route('productos.index'));
    }
}
