<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Contactuscontroller extends Controller
{
    public function sendEmail(Request $req){

         $data = $req->all();
        //  dd($data);
        
        Mail::send('email',$data,function($message) use ($data){

            $message->to('care@bcplindia.com');
            // $message->cc('skyweb1905@gmail.com');
            $message->subject('Mail from Website');
            $message->attach($data['file']->getRealPath(),[
                'as' => $data['file']->getClientOriginalName()
            ]);
        });

        return back()->with(['message' => 'Email sent successfully, We will get in touch with you as soon as posible.']);
            
    }
}
