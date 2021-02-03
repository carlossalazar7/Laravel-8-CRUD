<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //método para llamar a vista welcome
    public function __invoke(){
        return view('home');
        // return view('welcome'):
    }
}
