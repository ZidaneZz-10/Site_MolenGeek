<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'titre'=>'CodingSchool',
                'horaire'=>'9H-17H',
                'durée'=>'6 mois',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, enim dolor numquam asperiores eum doloremque nesciunt quaerat dolorum, culpa vero at eveniet similique atque iste sint, voluptas molestiae magni aliquam.'
            ],
            [
                'titre'=>'Marketing Lab',
                'horaire'=>'9H-17H',
                'durée'=>'6 mois',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, enim dolor numquam asperiores eum doloremque nesciunt quaerat dolorum, culpa vero at eveniet similique atque iste sint, voluptas molestiae magni aliquam.'
            ],

        ]);
    }
}
