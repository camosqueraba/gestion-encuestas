<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prioritaria;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'nombre',
        'correo',
        'telefono',
        'entidad',
        'familiar'

    ];
    
    public function prioritaria(){
        return $this->belongsTo(Prioritaria::class); 

    }
}
