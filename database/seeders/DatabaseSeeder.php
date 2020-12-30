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
            UserSeeder::class,
        ]);
        $this->call([
            BanniereSeeder::class,
        ]);
        $this->call([
            DescriptionSeeder::class,
        ]);
        $this->call([
            ContactSeeder::class,
        ]);
        $this->call([
            CardSeeder::class,
        ]);
    }
}
