<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function index(){
        return view('cv.Login.Login');
    }
    function veryfy(Request $req){
       if($req->fname == $req->lname){
           return redirect('/home');
       }
    }
}
