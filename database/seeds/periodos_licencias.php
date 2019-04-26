<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class periodos_licencias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('01licencias')->insert([
            'nombre'=>'Gratis',
            'precio'=>0,
            'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);

        DB::table('01licencias')->insert([
            'nombre'=>'Basico',
            'precio'=>300,
            'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
        DB::table('01licencias')->insert([
            'nombre'=>'Intermedio',
            'precio'=>450,
            'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
        DB::table('01licencias')->insert([
            'nombre'=>'Avanzado',
            'precio'=>600,
            'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);

        DB::table('01periodos')->insert([
        	'dias'=>'Mensual',
        	'descuento'=>0,
        	'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
        DB::table('01periodos')->insert([
        	'dias'=>'Trimestral',
        	'descuento'=>0,
        	'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
        DB::table('01periodos')->insert([
        	'dias'=>'Semestral',
        	'descuento'=>0,
        	'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
        DB::table('01periodos')->insert([
        	'dias'=>'Anual',
        	'descuento'=>0,
        	'created_at'=>Carbon::now()->format('y-m-d h:i:s')
        ]);
    }
}
