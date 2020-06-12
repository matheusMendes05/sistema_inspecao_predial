<?php

namespace App\models\Sistemas;

use App\models\DocumentacaoFotografica\Documentacao;
use Illuminate\Database\Eloquent\Model;

class Sistemas extends Model
{
    //
    protected $table = 'sistemas';

    protected $fillable = [
        'edificio_id',

        'sistema',
        'elemento',
        'local',
        'imagem',
        'obs'
    ];

    // public $timestamps = false;

    public function documentacaoFotografica()
    {
        return $this->belongsToMany(Documentacao::class);
    }
}
