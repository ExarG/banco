<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function atms()
    {
        return $this->belongs(Turn::class, 'id_caja');
    }

    public function reports()
    {
        return $this->belongs(Turn::class, 'id');
    }
}
