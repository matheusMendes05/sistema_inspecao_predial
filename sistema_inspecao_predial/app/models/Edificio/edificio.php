<?php

namespace App\models\Edificio;

use App\models\GoogleMaps\GoogleMaps;
use App\models\Sistemas\Sistemas;
use App\User;
use Illuminate\Database\Eloquent\Model;

class edificio extends Model
{
    //
    protected $table = 'edificios';

    protected $fillable = [
        'responsavel_inspecao',
        'data',
        'nome_edificio',
        'endereco',
        'bairro',
        'complemento',
        'cep',
        'cnpj',
        'responsavel_edificio',
        'responsavel_telefone',
        'responsavel_email',
        'tipologia',
        'outros',
        'n_pavimentos',
        'ano_construcao',
        'construtora',
        'administrador',

    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function sistema()
    {
        return $this->belongsToMany(Sistemas::class);
    }

    // relacionamento com a Tabela Google Maps

    public function mapa()
    {
        return $this->hasOne(GoogleMaps::class, 'edificio_id', 'id');
    }
    public $timestamps = false;
}
