<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
