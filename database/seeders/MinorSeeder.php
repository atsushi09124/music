<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minors')->insert([
            ['chord'=>'Cm'],
            ['chord'=>'Csm'],
            ['chord'=>'Dm'],
            ['chord'=>'Dsm'],
            ['chord'=>'Em'],
            ['chord'=>'Fm'],
            ['chord'=>'Fsm'],
            ['chord'=>'Gm'],
            ['chord'=>'Gsm'],
            ['chord'=>'Am'],
            ['chord'=>'Asm'],
            ['chord'=>'Bm'],

            ['chord'=>'Cm'],
            ['chord'=>'Csm'],
            ['chord'=>'Dm'],
            ['chord'=>'Dsm'],
            ['chord'=>'Em'],
            ['chord'=>'Fm'],
            ['chord'=>'Fsm'],
            ['chord'=>'Gm'],
            ['chord'=>'Gsm'],
            ['chord'=>'Am'],
            ['chord'=>'Asm'],
            ['chord'=>'Bm'],
        ]);
    }
}
