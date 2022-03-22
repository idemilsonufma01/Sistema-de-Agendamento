<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioEventoController extends Controller
{
    public function relatorio_evento(){
        return view('admin/relatorio_evento');
    }
}
