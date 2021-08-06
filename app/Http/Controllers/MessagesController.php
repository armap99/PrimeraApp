<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request){
        $mensaje = request() -> validate([//validacion 
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            'name.required' => 'Necesito tu nombre'
        ]);

        //Enviar correos
        Mail::to('armap1999@hotmail.com')->queue(new MessageReceived($mensaje));//send o queue para que siga funcionando y mande el correo a segundo plano

        return back()->with('status','Recibimos tu mensaje');
    }
}
