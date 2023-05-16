<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index (){
        return view(' placeholder');
    }
    public function map (){
        return view('maps');
    }
}
