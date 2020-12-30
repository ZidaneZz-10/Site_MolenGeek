<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etats')->insert([
            [
                'etat' => 'en attente'
            ],
            [
                'etat' => 'membre'
            ],
            [
                'etat' => 'admin'
            ],
        ]);
    }
}
