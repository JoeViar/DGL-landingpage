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
    public function blogEntry(){
       
        return view('blog.entry');
        
        
    }
    public function jobEntry(){
        return view ('hr.entry');
    }
    public function headerAbout(){

        return redirect(route('about_us').'/#timeline');

    }
    public function distrib( ){

        return redirect(route('distributor').'/#title');
    }

    public function find( ){

        return redirect(route('find_us').'/#title');
    }

    public function brands(){

        return view('brands');
    }

    public function blog1(){

        return view('blog.entry');
    }
    public function blog2(){

        return view('blog.entry2');
    }

}
