<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\user;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cv.Home.Home');
});
// Route::get('/home', function () {
//     return view('cv.Home.Home');
// });
Route::get('/education', function () {
    return view('cv.Education.Education');
});
Route::get('/project', function () {
    return view('cv.Project.Project');
});
Route::get('/contact', function () {
    return view('cv.Contact.Contact');
});
// Route::get('/login', function () {
//     return view('cv.Login.Login');
// });
Route::get('/test', function () {
    
    return view("test");
});


Route::get('/login',[LoginController::class,'index']);
//Route::view("test",'cv.test'.);
///Route::view("Route name",'File Name');
///Route::get("path name",'controller File Name');
//Route::get("users/{name}",[users::class,'index']);
Route::post('/login','App\Http\Controllers\LoginController@veryfy');

Route::get('/home','App\Http\Controllers\HomeController@index');
