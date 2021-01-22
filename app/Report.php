<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function turns()
    {
        return $this->hasMany(User::class);
    }
}
