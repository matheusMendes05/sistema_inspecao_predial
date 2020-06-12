<?php

namespace App\models\GoogleMaps;

use App\models\Edificio\edificio;
use Illuminate\Database\Eloquent\Model;

class GoogleMaps extends Model
{
    //
    protected $fillable = [
        'edificio_id',
        'latitude',
        'longitude'
    ];

    public $timestamps = false;

    public function edificio()
    {
        return $this->hasOne(edificio::class);
    }
}
