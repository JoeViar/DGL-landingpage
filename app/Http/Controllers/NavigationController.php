<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{

    public function index (){
        return view('welcomeedit');
    }
    public function about_us(){
        return view('about_us');
    }
    public function map (){
        return view('maps');
    }
}
