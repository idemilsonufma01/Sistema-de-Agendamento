<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroPresencaController extends Controller
{
    public function registro_presenca(){
        return view('users/registro_presenca');
    }
}
