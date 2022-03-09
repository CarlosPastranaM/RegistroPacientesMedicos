<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Medico extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    //
    protected $table = 'medicos';
    
    protected $fillable = 
    ['nombre', 
    'apellido_p', 
    'apellido_m', 
    'cedula',
    'especialidad'];
}
