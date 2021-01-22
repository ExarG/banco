<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function atm()
    {
        return $this->hasMany(User::class);
    }

    public function notifications()
    {
        return $this->belongs(Turn::class, 'id_turno');
    }
}
