<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SantiGraviano\LaravelMercadoPago\MP;

class MercadoPagoController extends Controller
{


	/*PREFERENCE DATA PARA PAGO*/
	public function getCreatePreference()
	  {
	  	$preferenceData = [
	  		'items' => [
	  			[
	  				'id' => 1,
	  				'category_id' => 'phones',
	  				'title' => 'Pago mensual PampaDev',
	  				'description' => '',
	  				'quantity' => 1,
	  				'currency_id' => 'ARS',
	  				'unit_price' => 600
	  			]
	  		],
	  		'payer'	=>	[
	  				'name'	=>	"Test",
	  				'surname'	=> "Test",
	  				'email'	=>	"	test_user_2715490@testuser.com",
	  				'identification' => [
						"type"	=>	"DNI",
						"number"	=>	"1111111"
						]
	  			]
	  	];

	  	$preferences =  new MP(config('mercadopago.app_id'), config('mercadopago.app_secret'));
	  	$response = $preferences->create_preference($preferenceData);
	  	dd($response);
		return $response;
	  }
	  /*PREAPPROVAL PARA SUSRIPCIONES*/
    public function getCreatePreapproval()
	  {
	    $preapproval_data = [
	      'payer_email' => 'agariobadcell@gmail.com',
	      'back_url' => 'http://labhor.com.ar/laravel/public/preapproval',
	      'reason' => 'Subscripción a paquete premium',
	      'external_reference' => $subscription->id,
	      'auto_recurring' => [
	        'frequency' => 1,
	        'frequency_type' => 'months',
	        'transaction_amount' => 99,
	        'currency_id' => 'ARS',
	        'start_date' => Carbon::now()->addHour()->format('Y-m-d\TH:i:s.BP'),
	        'end_date' => Carbon::now()->addMonth()->format('Y-m-d\TH:i:s.BP'),
	      ],
	    ];

	    MP::create_preapproval_payment($preapproval_data);

	    return dd($preapproval);
	  }
}
