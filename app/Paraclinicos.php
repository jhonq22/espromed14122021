<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paraclinicos extends Model
{
    protected $table = 'paraclinicos';

    protected $fillable  = [
        'paciente_id',
        'anticuerpo_contra_sars_cov2',
        'fecha_hora_toma_muestra_anticuerpo',
        'igm',
        'igg',
        'prueba_antigeno',
        'fecha_hora_toma_muestra_antigeno',
        'resultado_antigeno',
        'prueba_pcr',
        'fecha_hora_toma_muestra_pcr',
        'resultado_pcr',
        'serologias',
        'vih',
        'vdrl',
        'hepatitisb',
        'hepatitisc',
        'radiografia_torax'
     
   ];
}
