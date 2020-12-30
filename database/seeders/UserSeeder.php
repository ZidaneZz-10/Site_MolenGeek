<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Etat;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $etat = Etat::all();
        DB::table('users')->insert([
            'name'=>'sergen',
            'email'=>'sergen@hotmail.com',
            'password'=> Hash::make('sergen@hotmail.com'),
            'etat_id' =>  $etat[2]->id,      
        ]);

    }
}
