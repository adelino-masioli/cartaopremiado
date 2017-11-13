<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function submitform(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'txt_name'      => 'required',
            'txt_email'     => 'required',
            'txt_phone'     => 'required',
            'txt_uf'        => 'required',
            'txt_message'   => 'required',
        ]);

        if ($validator->fails()) {
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-danger');
            \Session::flash('messageform', 'Favor preencher todos os campos!');
            return back()->withInput();
        }

        try{
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-success');
            \Session::flash('messageform', 'Contato enviado com suecesso!');

            $args = $request->only('txt_name', 'txt_email', 'txt_phone', 'txt_uf',  'txt_message');

            $args['toc'] = ['operacoes@loggia.com.br', 'alfjuniorbh.web@gmail.com'];

            \Mail::send("email.contato", $args, function($message)  use ($args){
                $message->from('junior@loggia.com.br','Cartão Premiado')
                    ->to($args['toc'])
                    ->subject('[Sicoob] Cartão Premiado');
            });

            return back();
        }catch(\Exception $e){
            session()->forget('lk_goto');
            session()->put('lk_goto', '#lk_contact');
            \Session::flash('messageclass', 'text-danger');
            \Session::flash('messageform', 'Erro ao eviar o formulário!');
            return back()->withInput();
        }
    }
}
