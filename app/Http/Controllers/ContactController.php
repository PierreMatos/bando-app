<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AppBaseController;

use Illuminate\Http\Request;
use Mail;

class ContactController extends AppBaseController
{
        public function contact(){
            return view('pedra-pao');
        }

        public function contactPost(Request $request){
            $this->validate($request, [
                            'name' => 'required',
                            'email' => 'required|email',
                            'comment' => 'required'
                    ]);

            Mail::send('email', [
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'comment' => $request->get('comment') ],
                    function ($message) {
                            $message->from($request->get('email'));
                            $message->cc('info@remotepartner.co');
                            $message->to('bembonda@criaturamusic.com', 'Your Name')
                            ->subject('Your Website Contact Form');
            });

            return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

        }
}
