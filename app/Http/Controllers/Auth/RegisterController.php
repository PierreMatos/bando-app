<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use ZfrShopify\ShopifyClient;
use Illuminate\Support\Collection;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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

        $guests = ['a23barbosa@gmail.com','ab.mail@gmail.com','aelewane@yahoo.fr','ana.carvalheda@rtp.pt','anaisthinon03@gmail.com','andreavertessen@gmail.com','Antonio.rivotti562@gmail.com','bass@funk.pt','beatriz.nande@gmail.com','bruno.leiria.mimoso@gmail.com','cantinhofabio@gmail.com','catarinacna@gmail.com','catherinacardosowork@gmail.com','cloudspg@gmail.com','comunidadeculturarte@gmail.com','contacto@ricardocoelho.net','criatura.pt@gmail.com','damelim@gmail.com','edhoster@gmail.com','faustodasilva@ruc.pt','gabrielspepe@gmail.com','gildionisio@gmail.com','helio.morais@haushaus.pt','henrique.amaro@rtp.pt','hjferreira@gmail.com','info@glam.com.pt','isilda.sanches@rtp.pt','iuri_perc@hotmail.com','joanavm@icloud.com','joao.aguitar@gmail.com','joaocarloscallixto@gmail.com','joaopedrobcatarino@gmail.com','management@soulsistar.com','mister.hugo.s@gmail.com','nuno.pacheco@publico.pt','omnichordbookings@gmail.com','proenca.work@gmail.com','purpletempura.music@gmail.com','raquelbulha@gmail.com','ricardo.dias@haushaus.pt','saracmercier@gmail.com','teresa.i.h.conceicao@gmail.com','tiago.j@mail.com','vascoribeiro.musica@gmail.com','vaz.cavaleiro@gmail.com','vbelanciano@publico.pt','yuriwentink@gmail.com'];
        
        $shopifyClient = new ShopifyClient([
            'private_app' => true,
            'api_key'     => '5f7733f908091777118b5e4791fd7acf',
            'password'    => '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',
            'shop'        => 'bem-bonda.myshopify.com',
            'version'     => '2019-04'
        ]);
    
        $orders = collect($shopifyClient->getOrders(['status'=>'any']));
    
        $items = [];        
       
        foreach ($orders as $order){

            $order_items = collect($order['line_items']);
            $price = ($order_items->first()['price']);

            if($price === '9.99'){

            $items[] = $order['email'];

             } 
          
        }
        
        $items = array_merge($items,$guests);

        $emails ['emails'] = $items;

        $data = array_merge($data, $emails);

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'in_array:emails.*'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ],
        [
            'name.required' => 'Campo de Username é obrigatório',
            'email.in_array' => 'Este e-mail não possui acesso de entrada',
            'email.required' => 'Campo de email é obrigatório',
            'password.required' => 'Campo de password é obrigatório',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
