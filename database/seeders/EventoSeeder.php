<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  /*
        $evento = new Evento();
        $evento->data = '21/04/2021';
        $evento->nome = 'Sig psicologia';
        $evento->horario_inicio = '15:00';
        $evento->horario_final = '17:00';
        $evento->tipo_evento = 'Sig';
        $evento->email = 'sigpsicologia@gmail.com';
        $evento->telefone = '(98)99999-8888';
        $evento->qt_pessoas = 14;
        $evento->save();

        //método create( atenção para o atributo fillable da classe)
        Evento::create([
            'data' => '30/04/2022',
            'nome' => 'sigradiologia',
            'horario_inicio'   => '13:00',
            'horario_final'   => '14:00',
            'tipo_evento' => 'sig',
            'email'   => 'sigradiologia@gmail.com',
            'telefone'   => '(98)97879-8677',
            'qt_pessoas' => 16
        ]);
        */
        \App\Models\Evento::factory()->count(10)->create();
    }
}
