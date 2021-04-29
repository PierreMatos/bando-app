<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Guest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use ZfrShopify\ShopifyClient;
use Illuminate\Support\Collection;
use App\Repositories\GuestRepository;


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
    private $guestRepository;


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
    public function __construct(GuestRepository $guestRepo)
    {
        $this->middleware('guest');
        $this->guestRepository = $guestRepo;

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $guests = $this->guestRepository->all();

        $emailsGuests = [];

        foreach($guests as $guest){

            $emailsGuests[] = ($guest->email);
            
        }

        
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
        
        $items = array_merge($items,$emailsGuests);

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
