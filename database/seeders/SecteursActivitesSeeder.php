<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecteursActivitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $secteurs_activites = [
            'Agriculture, sylviculture et pêche',
            'Industrie',
            'Construction',
            'Tertiaire',
            'Commerce',
            'Transports',
            'Hébergement et restauration',
            'Information et communication',
            'Finance, assurance, immobilier',
            'Services principalement aux entreprises',
            'Enseignement',
            'Santé',
            'Hébergement médico-social, action sociale',
            'Services aux ménages'
        ];

        foreach ($secteurs_activites as $value)
        DB::table('secteurs_activites')->insert([
            'secteur_activite' => $value
        ]);
    }
}
