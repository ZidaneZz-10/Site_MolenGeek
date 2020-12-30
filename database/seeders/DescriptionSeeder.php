<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->insert(
            [
                [
                    'titre'=>"Molengeek",
                    'texte'=>"RENDRE LE DIGITAL ACCESSIBLE À TOUS #DIGITALFORALL",
                ],
            ],
        );
    }
}
