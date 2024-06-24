<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisations extends Model
{
    use HasFactory;

    public function personnes()
    {
        return $this->hasMany(Personnes::class);
    }
}
