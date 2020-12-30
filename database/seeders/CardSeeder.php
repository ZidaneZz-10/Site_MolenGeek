<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert(
            [
                [
                    'image'=>"banniere2.png",
                    'titre'=>'Molengeek',
                    'description'=>'Le digital à la portée de tous',
                ],
            ],
        );
    }
}
