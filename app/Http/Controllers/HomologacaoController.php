<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomologacaoController extends Controller
{
    public function homologacao(){
        return view('admin/homologacao');
    }
}
