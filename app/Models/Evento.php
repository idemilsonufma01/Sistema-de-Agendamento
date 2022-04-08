<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['data', 'nome', 'horario_inicio', 'horario_final','tipo_evento','email','telefone', 'qt_pessoas'];
}
