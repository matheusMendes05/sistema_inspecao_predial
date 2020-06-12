<?php

namespace App\models\Sistemas;

use Illuminate\Database\Eloquent\Model;

class Estruturas extends Model
{
    //
    protected $fillable = [
        'sistema_id',

        'sistema_edificio',
        'elemento_formulario',
        'local',
        'foto',
        'obs'
    ];
}
