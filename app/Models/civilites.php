<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilites extends Model
{
    use HasFactory;

    public function personnes()
    {
        return $this->hasMany(Personnes::class);
    }
}
