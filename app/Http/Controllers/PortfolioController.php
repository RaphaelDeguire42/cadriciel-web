<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('home', ['home'=>true]);
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function resume(){
        return view('resume');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function services(){
        return view('services');
    }
    public function recuperateContact(){
        return view('contact', ['data'=>$_POST ?? null]);
    }


}
