<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{

    public function Turns()
    {
        return $this->hasMany(User::class);
    }

    public function clients()
    {
        return $this->belongs(Turn::class, 'id');
    }
}
