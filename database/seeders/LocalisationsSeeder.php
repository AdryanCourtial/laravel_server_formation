<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalisationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations =[
            '1 - Ain',
            '2 - Aisne',
            '3 - Allier',
            '4 - Alpes-de-Hautes-Provence',
            '5 - Hautes-Alpes',
            '6 - Alpes-Maritimes',
            '7 - Ardèche',
            '8 - Ardennes',
            '9 - Ariège',
            '0 - Aube',
            '1 - Aude',
            '2 - Aveyron',
            '3 - Bouches-du-Rhône',
            '4 - Calvados',
            '5 - Cantal',
            '6 - Charente',
            '7 - Charente-Maritime',
            '8 - Cher',
            '9 - Corrèze',
            '0 - Corse',
            '1 - Côte-d\'or',
            '2 - Côtes-d\'Armor',
            '3 - Creuse',
            '4 - Dordogne',
            '5 - Doubs',
            '6 - Drôme',
            '7 - Eure',
            '8 - Eure-et-Loir',
            '9 - Finistère',
            '0 - Gard',
            '1 - Haute-Garonne',
            '2 - Gers',
            '3 - Gironde',
            '4 - Hérault',
            '5 - Ille-et-Vilaine',
            '6 - Indre',
            '7 - Indre-et-Loire',
            '8 - Isère',
            '9 - Jura',
            '0 - Landes',
            '1 - Loir-et-Cher',
            '2 - Loire',
            '3 - Haute-Loire',
            '4 - Loire-Altlantique',
            '5 - Loiret',
            '6 - Lot',
            '7 - Lot-et-Garonne',
            '8 - Lozère',
            '9 - Maine-et-Loire',
            '0 - Manche',
            '1 - Marne',
            '2 - Haute-Marne',
            '3 - Mayenne',
            '4 - Meurthe-et-Moselle',
            '5 - Meuse',
            '6 - Morbihan',
            '7 - Moselle',
            '8 - Nièvre',
            '9 - Nord',
            '0 - Oise',
            '1 - Orne',
            '2 - Pas-de-Calais',
            '3 - Puy-de-Dome',
            '4 - Pyrénées-Atlantiques',
            '5 - Hautes-Pyrénées',
            '6 - Pyrénées-Orientales',
            '7 - Bas-Rhin',
            '8 - Haut-Rhin',
            '9 - Rhône',
            '0 - Haute-Sâone',
            '1 - Sâone-et-Loire',
            '2 - Sarthe',
            '3 - Savoie',
            '4 - Haute-Savoie',
            '5 - Paris',
            '6 - Seine-Maritime',
            '7 - Seine-et-Marne',
            '8 - Yvelines',
            '9 - Deux-Sèvres',
            '0 - Somme',
            '1 - Tarn',
            '2 - Tarn-et-Garonne',
            '3 - Var',
            '4 - Vaucluse',
            '5 - Vendée',
            '6 - Vienne',
            '7 - Haute-Vienne',
            '8 - Vosges',
            '9 - Yonne',
            '0 - Territoire de Belfort',
            '1 - Essonne',
            '2 - Hauts-de-Seine',
            '3 - Seine-Saint-Denis',
            '4 - Val-de-Marne',
            '5 - Val-d\'Oise',
            'ors-France',
            '971 - Guadeloupe',
            '972 - Martinique',
            '973 - Guyane Française',
            '974 - Réunion',
            '975 - Saint-Pierre et Miquelon',
            '976 - Mayotte',
            '977 - Saint-Barthélemy',
            '978 - Saint-Martin',
        ];

        foreach ($locations as $value) {
            DB::table('localisations')->insert([
                'localisation' => $value
            ]);
        }

    }
}
