<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareasPorUsuario extends Model
{
    public function tarea()
    {
        return $this->belongsTo('App\Tarea');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
