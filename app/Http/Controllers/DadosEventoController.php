<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosEventoController extends Controller
{
    public function dados_evento(){
        var_dump($_POST);
        return view('users/dados_evento');
    }
}
