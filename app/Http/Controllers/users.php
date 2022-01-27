<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //
    function index($name){
        return ['name'=>'tanvir','age' => '21'];
    }
}
