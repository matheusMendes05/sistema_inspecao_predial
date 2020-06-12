<?php

namespace App\models\DocumentacaoFotografica;

use Illuminate\Database\Eloquent\Model;

class Documentacao extends Model
{
    //
    protected $fillable = [
        'sistema_id',
        'edificio_id',
        'nao_conformidade',
        'sistema',
        'imagem',
        'recomendacao_tecnica',
        'classificacao',
        'criticidade'
    ];

    public $timestamps = false;
}
