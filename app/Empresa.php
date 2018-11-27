<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use App\Movimiento;
use App\Cliente;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa  extends Authenticatable
{
    protected $table = '01empresas';

    protected $fillable = [
        'razon_social', 'nombre_fantasia', 'cuit', 'direccion', 'localidad', 'provincia', 'telefono', 'tipo_actividad', 'responsabilidad_iva_id', 'categoria_id', 'email', 'password', 'confirmation_code', 'estado'];

    public function facturas_sistema(){
    	return $this->hasMany('App\Facturas_sistema');
    }
    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
    public function fiscal(){
        return $this->hasOne('App\Fiscal');
    }
    public function responsabilidad_iva(){
        return $this->belongsTo('App\Responsabilidad_iva');
    }

    public function scopeConfirm($query, $code){
        return $this->where('confirmation_code', $code);
    }
    public function scopeCuit($query, $code){
        return $this->where('cuit', $code);
    }
    
    public function migrar($empresa, $resp_iva){
    	$this->clientes($empresa);
        $this->venta($empresa);
        $this->categorias_productos($empresa);
        $this->marcas($empresa);
        $this->proveedores($empresa);
        $this->facturas($empresa, $resp_iva);
        $this->stock($empresa);
        $this->actividad($empresa);
        $this->compra($empresa);
        $this->gasto($empresa);
        $this->detalle_compra($empresa);
        $this->pago($empresa);
        $this->regimen_iva($empresa);

        if(!file_exists(public_path()."/facturacion/certs/".$this->cuit)){
            mkdir(public_path()."/facturacion/certs/".$this->cuit);
        }
        if(!file_exists(public_path()."/facturacion/comprobantes/".$this->cuit)){
            mkdir(public_path()."/facturacion/comprobantes/".$this->cuit);
        }
        if(!file_exists(public_path()."/facturacion/xml/".$this->cuit)){
            mkdir(public_path()."/facturacion/xml/".$this->cuit);
        }  
    }

    protected function clientes($empresa){
        if (!Schema::hasTable($empresa.'_clientes')) {
        	Schema::create($empresa.'_clientes', function(Blueprint $table){
                $table->increments('id');
                $table->string('nombre');
                $table->string('cuit');
                $table->string('direccion')->nullable();
                $table->string('localidad')->nullable();
                $table->string('provincia')->nullable();
                $table->string('telefono')->nullable();
                $table->string('email')->nullable();
                $table->integer('responsabilidades_iva_id')->unsigned();

                $table->foreign('responsabilidades_iva_id')->references('id')->on('01responsabilidades_iva');
                $table->timestamps();
            });
            DB::table($empresa.'_clientes')->insert([
                "id"                        => 0,
                "nombre"                    => "CONSUMIDOR FINAL",
                "cuit"                      => 0,
                "responsabilidades_iva_id"  => 3
            ]);
            echo "migro $empresa _ clientes\n";
        }else{
            echo "no entro $empresa _ clientes\n";
        }
    }
    protected function proveedores($empresa){
        if (!Schema::hasTable($empresa.'_proveedores')) {
        	Schema::create($empresa.'_proveedores', function(Blueprint $table){
                $table->increments('id');
                $table->string('nombre');
                $table->string('cuit')->nullable();
                $table->string('telefono')->nullable();
                $table->string('email')->nullable();
                $table->float('deuda')->default(0);
                $table->string('observaciones')->nullable();

                $table->timestamps();
            });
            DB::table($empresa.'_proveedores')->insert([
                'nombre'=>"Sin Proveedor"
            ]);
            echo "\nmigro $empresa _ proveedores";
        }else{
            echo "\nno entro $empresa _ proveedores";
        }
    }
    protected function categorias_productos($empresa){
        if (!Schema::hasTable($empresa.'_categorias_productos')) {
        	Schema::create($empresa.'_categorias_productos', function(Blueprint $table){
        		$table->increments('id');
        		$table->string('categoria');

                $table->timestamps();
        	});
            DB::table($empresa.'_categorias_productos')->insert([
                'categoria'=>"Sin categoria"
            ]);
            echo "\nmigro $empresa _ categorias_productos";
        }else{
            echo "\nno entro $empresa _ categorias_productos";
        }
    }
    protected function marcas($empresa){
        if (!Schema::hasTable($empresa.'_marcas')) {
            Schema::create($empresa.'_marcas', function(Blueprint $table){
                $table->increments('id');
                $table->string('marca');
                $table->float('remarco');

                $table->timestamps();
            });
            DB::table($empresa.'_marcas')->insert([
                'marca'=>"Sin marca",
                'remarco' => 0,
            ]);
            echo "\nmigro $empresa _ marcas";
        }else{
            echo "\nno entro $empresa _ marcas";
        }
    }
    protected function facturas($empresa, $resp_iva){
    	if($resp_iva ==1){
            if (!Schema::hasTable($empresa.'_factura_a')) {
    	        Schema::create($empresa.'_factura_a', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
                    $table->date('vencimiento');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
                    $table->string('forma_pago');
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');
                    $table->enum('estado', ['pago','pendiente', 'cancelado']);

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
                echo "\nmigro $empresa _ factura_a";
            }else{
                echo "\nno entro $empresa _ factura_a";
            }
            if (!Schema::hasTable($empresa.'_factura_b')) {
    	        Schema::create($empresa.'_factura_b', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
                    $table->date('vencimiento');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
                    $table->string('forma_pago');
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');
                    $table->enum('estado', ['pago','pendiente', 'cancelado']);

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
                echo "\nmigro $empresa _ factura_b";
            }else{
                echo "\nno entro $empresa _ factura_b";
            }
            if (!Schema::hasTable($empresa.'_credito_a')) {
    	        Schema::create($empresa.'_credito_a', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
                echo "\nmigro $empresa _ credito_a";
            }else{
                echo "\nno entro $empresa _ credito_a";
            }
            if (!Schema::hasTable($empresa.'_credito_b')) {
    	        Schema::create($empresa.'_credito_b', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
            
                echo "\nmigro $empresa _ credito_b";
            }else{
                echo "\nno entro $empresa _ credito_b";
            }
	    }else{
            if (!Schema::hasTable($empresa.'_factura_c')) {
    	    	Schema::create($empresa.'_factura_c', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
                    $table->date('vencimiento');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
                    $table->string('forma_pago');
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->enum('estado', ['pago','pendiente', 'cancelado']);
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
                echo "\nmigro $empresa _ factura_c";
            }else{
                echo "\nno entro $empresa _ factura_c";
            }
            if (!Schema::hasTable($empresa.'_credito_c')) {
    	        Schema::create($empresa.'_credito_c', function(Blueprint $table)use($empresa){
    	            $table->increments('id');
    	            $table->date('fecha');
    	            $table->float('total');
    	            $table->integer('cliente_id')->unsigned();
    	            $table->string('cae');
    	            $table->date('fecha_vencimiento');
                    $table->string('tipo_doc');
                    $table->string('nro_doc');
                    $table->string('cliente');
                    $table->float('importe_neto');
                    $table->float('percepcion_no_categorizados');
                    $table->float('operaciones_exentas');
                    $table->float('impuestos_nacionales');
                    $table->float('ingresos_brutos');
                    $table->float('impuestos_municipales');
                    $table->float('impuestos_internos');
                    $table->string('codigo_moneda');
                    $table->string('tipo_cambio');
                    $table->integer('cantidad_alicuotas');
                    $table->string('codigo_operacion');
                    $table->float('otros_tributos');

    	            $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

    	            $table->timestamps();
    	        });
                echo "\nmigro $empresa _ credito_c";
            }else{
                echo "\nno entro $empresa _ credito_c";
            }
	    }
        if (!Schema::hasTable($empresa.'_remitos')) {
    	    Schema::create($empresa.'_remitos', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->date('fecha');
                $table->float('total');
                $table->integer('cliente_id')->unsigned();

                $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ remitos";
        }else{
            echo "\nno entro $empresa _ remitos";
        }
        if (!Schema::hasTable($empresa.'_presupuestos')) {
    	    Schema::create($empresa.'_presupuestos', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->date('fecha');
                $table->float('total');
                $table->integer('cliente_id')->unsigned();

                $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

                $table->timestamps();
            });
            echo "\nmigro $empresa _ presupuestos";
        }else{
            echo "\nno entro $empresa _ presupuestos";
        }
        if (!Schema::hasTable($empresa.'_detalles')) {
    	    Schema::create($empresa.'_detalles', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->integer('venta_id')->unsigned();
                $table->string('descripcion');
                $table->float('cantidad');
                $table->float('precio');
                $table->float('total');
                $table->string('tipo');

                $table->foreign('venta_id')->references('id')->on($empresa.'_ventas');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ detalles";
        }else{
            echo "\nno entro $empresa _ detalles";
        }
        if (!Schema::hasTable($empresa.'_movimientos')) {
            Schema::create($empresa.'_movimientos', function(Blueprint $table){
                $table->increments('id');
                $table->integer('movimiento_id');
                $table->string('movimiento');
                $table->float('saldo');

                $table->timestamps();
            });
            DB::table($empresa.'_movimientos')->insert([
                "movimiento_id"    => 0,
                "movimiento"        => "SALDO INICIAL",
                "saldo"             => 0
            ]);
        
            echo "\nmigro $empresa _ movimientos";
        }else{
            echo "\nno entro $empresa _ movimientos";
        }
        if(!Schema::hasTable($empresa.'_alicuotas')) {
            Schema::create($empresa.'_alicuotas', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->string('tipo_comprobante');
                $table->integer('punto_venta');
                $table->integer('num_comprobante');
                $table->float('importe_neto');
                $table->integer('alicuota');
                $table->float('importe_iva');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ alicuotas";
        }else{
            echo "\nno entro $empresa _ alicuotas";
        }
        if (!Schema::hasTable($empresa.'_resumen_cuenta')) {
            Schema::create($empresa.'_resumen_cuenta', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->date('fecha');
                $table->float('total');
                $table->integer('cliente_id')->unsigned();

                $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');

                $table->timestamps();
            });
            echo "\nmigro $empresa _ resumen_cuenta";
        }else{
            echo "\nno entro $empresa _ resumen_cuenta";
        }
        if (!Schema::hasTable($empresa.'_saldo_favor')) {
            Schema::create($empresa.'_saldo_favor', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->date('fecha');
                $table->float('total');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ saldo_favor";
        }else{
            echo "\nno entro $empresa _ saldo_favor";
        }
        if (!Schema::hasTable($empresa.'_saldo_pendiente')) {
            Schema::create($empresa.'_saldo_pendiente', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->date('fecha');
                $table->float('total');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ saldo_pendiente";
        }else{
            echo "\nno entro $empresa _ saldo_pendiente";
        }
    }
    protected function stock($empresa){
        $emp = $empresa;
        if (!Schema::hasTable($empresa.'_productos')) {
            Schema::create($empresa.'_productos', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->string('codigo');
                $table->string('producto');
                $table->float('stock');
                $table->float('stock_minimo')->nullable();
                $table->float('precio_compra');
                $table->float('precio_venta');
                $table->integer('iva_id')->unsigned();
                $table->integer('proveedor_id')->unsigned();
                $table->integer('categoria_producto_id')->unsigned();
                $table->integer('marca_id')->unsigned();
                
                $table->foreign('proveedor_id')->references('id')->on($empresa.'_proveedores');
                $table->foreign('categoria_producto_id')->references('id')->on($empresa.'_categorias_productos');
                $table->foreign('marca_id')->references('id')->on($empresa.'_marcas');

                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ productos";
        }else{
            echo "\nno entro $empresa _ productos";
        }
        if (!Schema::hasTable($empresa.'_servicios')) {
            Schema::create($empresa.'_servicios', function(Blueprint $table){
                $table->increments('id');
                $table->string('descripcion');
                $table->float('precio');
                $table->integer('iva_id')->unsigned();
                

                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ servicios";
        }else{
            echo "\nno entro $empresa _ servicios";
        }
    }
    protected function actividad($empresa){
        if (!Schema::hasTable($empresa.'_registro_actividad')) {
            Schema::create($empresa.'_registro_actividad', function(Blueprint $table){
                $table->increments('id');
                $table->string('descripcion');            

                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ registro_actividad";
        }else{
            echo "\nno entro $empresa _ registro_actividad";
        }
    }
    protected function compra($empresa){
        if (!Schema::hasTable($empresa.'_compras')) {
            Schema::create($empresa.'_compras', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->integer('proveedor_id')->unsigned();
                $table->date('fecha');
                $table->string('tipo_comprobante');
                $table->integer('num_comprobante');
                $table->float('total');
                $table->float('pagado');

                $table->foreign('proveedor_id')->references('id')->on($empresa.'_proveedores');
                $table->timestamps();
            });
        
            echo "\nmigro $empresa _compras";
        }else{
            echo "\nno entro $empresa _compras";
        }
    }
    protected function venta($empresa){
        if (!Schema::hasTable($empresa.'_ventas')) {
            Schema::create($empresa.'_ventas', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->integer('cliente_id')->unsigned();
                $table->date('fecha');
                $table->string('tipo_comprobante');
                $table->integer('num_comprobante');
                $table->float('total');
                $table->enum('estado', ['pago','pendiente', 'cancelado']);

                $table->foreign('cliente_id')->references('id')->on($empresa.'_clientes');
                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ ventas";
        }else{
            echo "\nno entro $empresa _ ventas";
        }
    }
    protected function gasto($empresa){
        if (!Schema::hasTable($empresa.'_gastos')) {
            Schema::create($empresa.'_gastos', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->string('descripcion');
                $table->date('fecha');
                $table->float('total');

                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ gastos";
        }else{
            echo "\nno entro $empresa _ gastos";
        }
    }
    protected function detalle_compra($empresa){
        if (!Schema::hasTable($empresa.'_detalle_compras')) {
            Schema::create($empresa.'_detalle_compras', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->integer('compra_id')->unsigned();
                $table->integer('producto_id')->unsigned();
                $table->float('cantidad');
                $table->float('precio');
                $table->float('total');

                $table->foreign('compra_id')->references('id')->on($empresa.'_compras');
                $table->foreign('producto_id')->references('id')->on($empresa.'_productos');
                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ detalle_compras";
        }else{
            echo "\nno entro $empresa _ detalle_compras";
        }
    }
    protected function pago($empresa){
        if (!Schema::hasTable($empresa.'_pagos')) {
            Schema::create($empresa.'_pagos', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->integer('proveedor_id')->unsigned();
                $table->date('fecha');
                $table->float('pago');

                $table->foreign('proveedor_id')->references('id')->on($empresa.'_proveedores');
                $table->timestamps();
            });
        
            echo "\nmigro $empresa _ pagos";
        }else{
            echo "\nno entro $empresa _ pagos";
        }
    }
    protected function regimen_iva($empresa){
        if(!Schema::hasTable($empresa.'_reg_ventas_cbte')) {
            Schema::create($empresa.'_reg_ventas_cbte', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->string('fecha');
                $table->string('tipo_comprobante');
                $table->string('punto_venta');
                $table->string('num_comprobante');
                $table->string('num_comprobante_hasta');
                $table->string('tipo_doc');
                $table->string('nro_doc');
                $table->string('cliente');
                $table->string('total');
                $table->string('importe_neto');
                $table->string('percepcion_no_categorizados');
                $table->string('operaciones_exentas');
                $table->string('impuestos_nacionales');
                $table->string('ingresos_brutos');
                $table->string('impuestos_municipales');
                $table->string('impuestos_internos');
                $table->string('codigo_moneda');
                $table->string('tipo_cambio');
                $table->string('cantidad_alicuotas');
                $table->string('codigo_operacion');
                $table->string('otros_tributos');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ _reg_ventas_cbte";
        }else{
            echo "\nno entro $empresa _ _reg_ventas_cbte";
        }
        if(!Schema::hasTable($empresa.'_reg_ventas_alic')) {
            Schema::create($empresa.'_reg_ventas_alic', function(Blueprint $table)use($empresa){
                $table->increments('id');
                $table->string('tipo_comprobante');
                $table->string('punto_venta');
                $table->string('num_comprobante');
                $table->string('importe_neto');
                $table->string('alicuota');
                $table->string('importe_iva');
                $table->timestamps();
            });
            echo "\nmigro $empresa _ _reg_ventas_alic";
        }else{
            echo "\nno entro $empresa _ _reg_ventas_alic";
        }
    }
}
