<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\abccontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/first', function () {
    return view('index');
});

Route::get('/user-signup', function () {
    return view('login');
});



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/edit',function() {
    return view('edit');
});


Route::get('/insert',function() {
    return view('insert');
});


Route::get('/view',function() {
    return view('view');
});



Route::get('/firstcontroller', [ abccontroller::class , 'greeting']);


Route::get('/secondcontroller', [ abccontroller::class , 'greeting1']);


?>