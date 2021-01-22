<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function clients()
    {
        return $this->hasMany(User::class);
    }

    public function user()
    {
        return $this->belongs(Turn::class, 'id_user');
    }
}
