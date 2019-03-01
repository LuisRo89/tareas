<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public function tareaPorUsuario()
    {
        return $this->hasMany('App\TareasPorUsuario');
    }
}
