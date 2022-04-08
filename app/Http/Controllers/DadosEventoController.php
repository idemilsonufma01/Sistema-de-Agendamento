<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\TipoEvento;

class DadosEventoController extends Controller
{
    public function dados_evento(Request $request){
        $tipo_evento = TipoEvento::all();
        /*echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo '<br>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */
        /*
        $evento = new Evento();
        $evento->data = $request->input('data');
        $evento->nome = $request->input('nome');
        $evento->horario_inicio = $request->input('horario_inicio');
        $evento->horario_final = $request->input('horario_final');
        $evento->tipo_evento = $request->input('tipo_evento');
        $evento->email = $request->input('email');
        $evento->telefone = $request->input('telefone');
        $evento->qt_pessoas = $request->input('qt_pessoas');
        $evento->save();
        
        $evento = new Evento();
        $evento->fill($request->all()); //create no lugar do fill, dai não teria o save()
        $evento->save();
        */
            
        return view('users/dados_evento',['tipo_evento'=>$tipo_evento]);
    }

    public function salvar(Request $request){
        $request->validate([
            'data' => 'required',
            'nome' => 'required',
            'horario_inicio' => 'required',
            'horario_final' => 'required',
            'tipo_evento' => 'required',
            'email' => 'email',
            'telefone' => 'required',
            'qt_pessoas' => 'required',

        ]);

    }
}
