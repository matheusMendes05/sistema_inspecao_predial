<?php

namespace App\models\Edificio;

use App\User;
use Illuminate\Database\Eloquent\Model;

class usuario_edificio extends Model
{
    //

    protected $table = 'edificio_user';


    public function usuario()
    {
        return $this->belongsToMany(User::class);
    }

    public function edificio()
    {
        return $this->belongsToMany(edificio::class);
    }
}
