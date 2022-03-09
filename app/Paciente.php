<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Paciente extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    protected $table = 'pacientes';
    
    protected $fillable = 
    ['nombre', 
    'apellido_p', 
    'apellido_m', 
    'edad',
    'codigo_postal', 
    'estado', 
    'ciudad', 
    'delegacion', 
    'colonia', 
    'padecimiento', 
    'medicamento',
    'fecha_inicio',
    'medico_id'];
}
