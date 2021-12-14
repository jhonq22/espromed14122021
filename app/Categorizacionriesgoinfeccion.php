<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorizacionriesgoinfeccion extends Model
{
    protected $table = 'categorizacion_riesgo_infeccion';

    protected $fillable  = [
        'paciente_id',
        'fecha_evaluacion_riesgo',
        'riesgo_alto',
        'riesgo_moderado',
        'riesgo_general',
        'notas_impresiones'
   ];
}
