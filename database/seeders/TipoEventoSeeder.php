<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEvento;

class TipoEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoEvento::create(['tipo_evento'=>'Reunião']);
        TipoEvento::create(['tipo_evento'=>'Aula']);
        TipoEvento::create(['tipo_evento'=>'Sig']);
        TipoEvento::create(['tipo_evento'=>'Mentoria']);
        TipoEvento::create(['tipo_evento'=>'Videoconferência']);
        TipoEvento::create(['tipo_evento'=>'Desefa de TCC']);
        TipoEvento::create(['tipo_evento'=>'Seminário']);
        TipoEvento::create(['tipo_evento'=>'Palestra']);
        TipoEvento::create(['tipo_evento'=>'Gravação de aula']);
        TipoEvento::create(['tipo_evento'=>'Outros']);
    }
}
