<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioPresencaController extends Controller
{
    public function relatorio_presenca(){
        return view('admin/relatorio_presenca');
    }
}
