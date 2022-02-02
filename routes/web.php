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
    $paste = config("paste");

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($paste as $pasta) {
        if( $pasta["tipo"] == "lunga" ) {
            $lunghe[] = $pasta;
        } else if ( $pasta["tipo"] == "corta" ) {
            $corte[] = $pasta;
        } else {
            $cortissime[] = $pasta;
        }
    }


    return view('home', ["lunghe" => $lunghe, "corte" => $corte, "cortissime" => $cortissime]);
});
