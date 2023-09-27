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
    public function distributor(){
        return view('distributor');
    }
    public function map (){
        return view('maps');
    }
    public function find_us(){
        
        return view('find_us');
    }
    public function hr(){
        return view('hr');
    }
    public function blog(){
        return view('blog');
    }

}
