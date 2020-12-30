<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EtatSeeder::class,
            UserSeeder::class,
            BanniereSeeder::class,
            DescriptionSeeder::class,
            ContactSeeder::class,
            CardSeeder::class,
            FormationSeeder::class,
        ]);
    }
}
