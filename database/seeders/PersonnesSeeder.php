<?php

namespace Database\Seeders;
require_once 'vendor/autoload.php';

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('personnes')->insert([
                'nom' => fake()->lastName(),
                'prenom' => fake()->firstName(),
                'email' => fake()->email(),
                'telephone' => fake()->phoneNumber(),
                'localisation_id' => rand(1, 100),
                'civilite_id' => rand(1, 3)
            ]);
        }
    }
}
