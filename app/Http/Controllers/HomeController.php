<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
   public function index(){
       $name = 'tanvir';
        return view('test')
        ->with('name','tanvir');
    }
}
