<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("Welcome"); //tirando arquivo de rota
    }

    public function primeiroexercicio()
    {
        return view("exercicio1"); //tirando arquivo de rota
    }

}
//para cada entidade criar uma controller
