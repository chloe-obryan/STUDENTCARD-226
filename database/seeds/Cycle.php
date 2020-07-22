<?php

use Illuminate\Database\Seeder;

class Cycle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cycles')->insert([
            ['cycle' => 'LICENCE I'],
            ['cycle' => 'LICENCE II'],
            ['cycle' => 'LICENCE III'],
            ]);
    }
}
