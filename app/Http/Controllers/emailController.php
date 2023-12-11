<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class EmailController extends Controller
{

    public function emailDistrbution(Request $request){

        //    dd($request);
        $data = [

            'title' => 'Correo interesados',

            'body' => 'This is for testing email using smtp.'

        ];

        $message="success";

        \Mail::to('viart211@gmail.com')->send(new \App\Mail\ContactMail($data));


        return Redirect::back()->with('msg' , $message);


    }
}
