<?php

use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filieres')->insert([
            ['filiere' => 'RESEAU'],
            ['filiere' => 'SECURITE'],
            ['filiere' => 'PROGRAMATION'],
            ]);
    }
}
