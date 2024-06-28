<?php

namespace Database\Seeders;

use App\Models\Localisations;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CivilitesSeeder::class,
            LocalisationsSeeder::class,
            SecteursActivitesSeeder::class,
        ]);
    }
}
