<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AppBaseController;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class ContactController extends AppBaseController
{

    private $postRepository;
    
    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;

    }

        public function contact(){
            return view('pedra-pao');
        }

        public function concerto($id){

        $post = $this->postRepository->find($id);

        return view('concerto.3')
                ->with('post', $post);


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
                            $message->cc('management@soulsistar.com');
                            $message->to('bembonda@criaturamusic.com', 'Criatura')
                            ->subject('Encomenda Pedra Pão');
            });
        }catch(\Exception $e){
            return back()->with('error', 'Pedimos desculpa mas não foi possível efetuar a tua encomenda');

            }
            return back()->with('success', 'Obrigado pela tua encomenda, entraremos em contacto brevemente.');

        }


        public function concertoPost(Request $request){


        //     $this->validate($request, [
        //                     'rua' => 'required',
        //                     'local' => 'required',
        //                     'cod_postal' => 'required'
        //             ]);

        try{
            Mail::send('emailconcerto', [
                    'email' => Auth::user()->email,
                    'nome' => $request->get('nome') ],
                    
                    function ($message) {
                            $message->from(Auth::user()->email);
                            $message->cc('info@remotepartner.co');
                            $message->cc('management@soulsistar.com');
                            $message->to('bembonda@criaturamusic.com', 'Criatura')
                            ->subject('Reserva Bilhete');
            });
        }catch(\Exception $e){
            return back()->with('error', 'Pedimos desculpa mas não foi possível efetuar a tua reserva.');
                // echo ("Erro, tenta novamente");
            }
            return back()->with('success', 'Obrigado pela tua reserva,  entraremos em contacto brevemente.');
            // return back()->with('success', 'Obrigado pela tua reserva, entraremos em contacto brevemente.');

        }
}
