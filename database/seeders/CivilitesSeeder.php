<?php

namespace Database\Seeders;

use App\Models\civilites;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CivilitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $civilites = [
            'Monsieur',
            'Madame',
            'Autre'
        ];

        foreach ($civilites as $value) {
            DB::table('civilites')->insert([
                'civilite' => $value
            ]);
        }
    }
}
