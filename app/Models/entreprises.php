<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'secteur_activite_id', 'code_postal' , 'ville', 'chiffres_affaires', 'personne_id'];

    public function secteur_activite()
    {
        return $this->belongsTo(Secteurs_activites::class);
    }

    public function personnes()
    {
        return $this->hasMany(Personnes::class);
    }
}
