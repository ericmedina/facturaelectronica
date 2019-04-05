<?php

namespace App\Http\Controllers\Auth;

use App\Empresa;
use App\Fiscal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Mail\Mailer;
use Illuminate\Auth\Events\Registered;
use Mail;
use App\Contrato;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/send_confirm';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'razon_social' => 'required|string|max:255',
            'nombre_fantasia' => 'nullable|string|max:255',
            'cuit' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'localidad' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'tipo_actividad' => 'nullable|string|max:255',
            'responsabilidad_iva_id' => 'integer',
            'categoria_id' => 'integer',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
                


        $data['confirmation_code'] = str_random(25);
        $empresa =  Empresa::create([
            'razon_social'                      =>      $data['razon_social'],
            'nombre_fantasia'                   =>      $data['nombre_fantasia'],
            'cuit'                              =>      $data['cuit'],
            'direccion'                         =>      $data['direccion'],
            'localidad'                         =>      $data['localidad'],
            'provincia'                         =>      $data['provincia'],
            'telefono'                          =>      $data['telefono'],
            'tipo_actividad'                    =>      $data['tipo_actividad'],
            'responsabilidad_iva_id'            =>      $data['responsabilidad_iva'],
            'categoria_id'                      =>      1,
            'email'                             =>      $data['email'],
            'password'                          =>      bcrypt($data['password']),
            'confirmation_code'                 =>      $data['confirmation_code'],
            'estado'                            =>      'activa',
            'facturable'                        =>      1
        ]);
         $empresa->migrar(strtolower(str_replace(" ","_",$empresa->razon_social)), $empresa->responsabilidad_iva_id);
        $fiscal = new Fiscal();
        $fiscal->empresa_id =  $empresa->id;
        $fiscal->save();
        //-------Generar Contrato-----------------

        $contrato = New Contrato;
        $contrato->licencia_id = 1;
        $contrato->empresa_id = $empresa->id;
        $contrato->periodo_id = 1;
        $contrato->save();

        // Send confirmation code
        Mail::send('email.confirmation_code', $data, function($message) use ($data) {
            $message->to($data['email'], $data['razon_social'])->subject('Por favor confirma tu correo');
        });
        Mail::send('email.registrado', $data, function($message) use ($data) {
            $message->to('administracion@pampadev.com.ar', $data['razon_social'])->subject('Nuevo usuario');
        });
        return $empresa;
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

}
