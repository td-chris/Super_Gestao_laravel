<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// passando parametros de rota para o controller

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "A soma de $p1 e $p2 é: ".($p1 + $p2);

        // passando parametros para a view por array
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]);
        
        // passando parametros para view com o metodo with do laravel
        //return view('site.teste')->with('p1', $p1)->with('p2', $p2);

        // passando parametros para view com o metodo compact do php
        return view('site.teste', compact('p1', 'p2'));
    }
}
