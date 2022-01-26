<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('cv.Home.Home');
});
Route::get('/education', function () {
    return view('cv.Education.Education');
});
Route::get('/project', function () {
    return view('cv.Project.Project');
});
Route::get('/contact', function () {
    return view('cv.Contact.Contact');
});
Route::get('/login', function () {
    return view('cv.Login.Login');
});
