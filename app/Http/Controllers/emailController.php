<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class emailController extends Controller
{
    /**
 * Store a new blog post.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
 public function send(Request $request) {
   
 
    Contact::create($request->all());
  
    return redirect()->back()
                     ->with(['success' => 'Gracias un representante de DGL se podrá en contacto con usted en breve.']);
 }
}
