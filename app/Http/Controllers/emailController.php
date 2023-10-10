<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Redirect;

use App\Mail\ContactMail;



class EmailController extends Controller
{

    public function emailDistrbution(){


        $data = [

            'title' => 'Correo interesados',

            'body' => 'This is for testing email using smtp.'

        ];



        Mail::to('viart211@gmail.com')->send(new ContactMail($data));



        // return Redirect::back()->with('msg' => 'The Message');


    }
}
