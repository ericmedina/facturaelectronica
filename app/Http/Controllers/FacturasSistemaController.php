<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas_sistema;
use Illuminate\Support\Facades\Auth;
use SantiGraviano\LaravelMercadoPago\MP;
use Carbon\Carbon;

class FacturasSistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Facturas_sistema::Search(Auth::user()->id)->get();
        return view('pagos.index')->with('pagos', $pagos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $pago = Facturas_sistema::find($id);
        $preferenceData = [
            'items' => [
                [
                    'id' => $pago->id,
                    'category_id' => 'software',
                    'title' => 'Pago mensual PampaDev',
                    'description' => '',
                    'quantity' => 1,
                    'currency_id' => 'ARS',
                    'unit_price' =>$pago->total// floatval($pago->total)
                ]
            ],
            'payer' =>  ['name'  =>  $pago->empresa->razon_social,
                    'email' =>  $pago->empresa->email,
                    'identification' => [
                        "type"  =>  "CUIT",
                        "number"    =>  $pago->empresa->cuit
                        ]
                ],
                'back_urls' => [
                    "success" => "https://www.pampadev.com.ar/",
                    "failure" => "https://www.pampadev.com.ar/",
                    "pending" => "https://www.pampadev.com.ar/"
                    ],
            'auto_return' => "approved",
            'external_reference'    =>  $pago->id."_".$pago->empresa->cuit,
        ];

        $preferences =  new MP(config('mercadopago.app_id'),config('mercadopago.app_secret'));
        $preference = $preferences->create_preference($preferenceData);
        //$preference = MP::create_preference($preferenceData);
        $pago->external_id = $preference['response']['external_reference'];
        $pago->payment_id = $preference['response']['id'];
        $pago->save();
        return view('pagos.edit')->with('payment', $preference);
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
