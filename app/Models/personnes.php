<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnes extends Model
{
    use HasFactory;

    protected $fillable = ['civilite_id', 'nom', 'prenom' , 'email', 'telephone', 'localisation_id'];

    public function civilite()
    {
        return $this->belongsTo(Civilites::class);
    }

    public function localisation()
    {
        return $this->belongsTo(Localisations::class);
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprises::class);
    }
}
