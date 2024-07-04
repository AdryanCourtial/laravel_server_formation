<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntreprisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('entreprises')->insert([
                'nom' => fake()->lastName(),
                'code_postal' => strval(rand(10000, 100000)),
                'ville' => fake()->city(),
                'chiffres_affaires' => rand(1, 1000),
                'secteur_activite_id' => rand(1, 14)
            ]);
        }
    }
}
