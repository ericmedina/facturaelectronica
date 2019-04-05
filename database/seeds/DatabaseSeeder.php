<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('01descuentos')->insert([
            'porcentaje'=>0
        ]);
        DB::table('01descuentos')->insert([
            'porcentaje'=>5
        ]);
        DB::table('01descuentos')->insert([
            'porcentaje'=>10
        ]);
        DB::table('01descuentos')->insert([
            'porcentaje'=>15
        ]);
        DB::table('01descuentos')->insert([
            'porcentaje'=>20
        ]);
        /*
        DB::table('categorias')->insert([
        	'categoria'=>"Basico",
        	'precio'=>500
        ]);
         DB::table('iva')->insert([
         	'id'=>1,
         	"alicuota" => 'No Gravado',
         	"valor"=>0
        ]);
        DB::table('iva')->insert([
         	'id'=>2,
         	"alicuota" => 'Exento',
         	"valor"=>0
        ]);
        DB::table('iva')->insert([
         	'id'=>3,
         	"alicuota" => '0%',
         	"valor"=>0
        ]);
        DB::table('iva')->insert([
         	'id'=>4,
         	"alicuota" => '10.5%',
         	"valor"=>1.105
        ]);
        DB::table('iva')->insert([
         	'id'=>5,
         	"alicuota" => '21%',
         	"valor"=>1.21
        ]);
        DB::table('iva')->insert([
         	'id'=>6,
         	"alicuota" => '27%',
         	"valor"=>1.27
        ]);
        DB::table('iva')->insert([
            'id'=>8,
            "alicuota" => '5%',
            "valor"=>1.05
        ]);
        DB::table('iva')->insert([
            'id'=>9,
            "alicuota" => '2.5%',
            "valor"=>1.025
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "IVA Responsable Inscripto"
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "Responsable Monotributo"
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "Consumidor Final"
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "IVA Sujeto Exento"
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "Monotributista Social"
        ]);
        DB::table('responsabilidades_iva')->insert([
         	"nombre" => "IVA Responsable No Inscripto"
        ]);
        */
    }
}
