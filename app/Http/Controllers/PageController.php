<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // lettura dal DB
        $paste = config("paste");

        // manipolazione dei dati
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
        $data = compact("lunghe", "corte", "cortissime");
        //$data = ["lunghe" => $lunghe, "corte" => $corte, "cortissime" => $cortissime];
        // restituisco la vista
        return view('home', $data);
    }

    public function news()
    {
        return view('news');
    }
}
