<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Servicio;

use App\Cliente;

use App\Proveedor;

class AjaxController extends Controller
{
    public function buscar_producto($value){
    	$productos = Producto::Search($value)->orderBy('id', 'ASC')->get();
    	$productos->each(function($producto){
    		$producto->marca;
    		$producto->iva;
    		$producto->categoria_producto;
    		$producto->proveedor;
    	});
    	return $productos;
    }
    public function buscar_servicio($value){
        $servicios = Servicio::Search($value)->orderBy('id', 'ASC')->get();
        $servicios->each(function($servicio){
            $servicio->iva;
        });
        return $servicios;
    }
    public function buscar_cliente($value){
        $clientes = Cliente::Search($value)->orderBy('id', 'ASC')->get();
        $clientes->each(function($cliente){
            $cliente->responsabilidades_iva;
        });
        return $clientes;
    }
    public function buscar_proveedor($value){
        $proveedores = Proveedor::Search($value)->orderBy('id', 'ASC')->get();
        return $proveedores;
    }
}
