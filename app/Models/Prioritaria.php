<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Prioritaria extends Model
{
    use HasFactory;

    protected $fillable = [

        'pregunta_nivel_1',
        'pregunta_nivel_2',
        'pregunta_nivel_3',
        'pregunta_nivel_4',
        'pregunta_nivel_5',
        'pregunta_nivel_6',
        'pregunta_nivel_7',
        'pregunta_nivel_8',

        'pregunta_si_no_1',
        'justificacion_1',

        'pregunta_si_no_2',
        'justificacion_2',

        'pregunta_si_no_3',
        'justificacion_3',

        'pregunta_si_no_4',
        'justificacion_4',

        'pregunta_si_no_5',
        'justificacion_5',

        'pregunta_si_no_6',
        'justificacion_6',

        
        'sugerencias_recomendaciones'
    ];
     
    public function paciente(){

        return $this->hasOne(Paciente::class); 
    }
}
