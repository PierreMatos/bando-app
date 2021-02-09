<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class ContactController extends AppBaseController
{
        public function contact(){
            return view('pedra-pao');
        }

        public function contactPost(Request $request){


        //     $this->validate($request, [
        //                     'rua' => 'required',
        //                     'local' => 'required',
        //                     'cod_postal' => 'required'
        //             ]);

        try{
            Mail::send('email', [
                    'email' => Auth::user()->email,
                    'nome' => $request->get('nome'),
                    'rua' => $request->get('rua'),
                    'localidade' => $request->get('localidade'),
                    'cod_postal' => $request->get('cod_postal') ],
                    function ($message) {
                            $message->from(Auth::user()->email);
                            $message->cc('info@remotepartner.co');
                            $message->to('bembonda@criaturamusic.com', 'Criatura')
                            ->subject('Encomenda Pedra Pão');
            });
        }catch(\Exception $e){
                echo ("Erro, tenta novamente");
            }
            return back()->with('success', 'Obrigado pela tua encomenda, entraremos em contacto brevemente.');

        }
}
