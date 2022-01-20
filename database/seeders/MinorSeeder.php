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
        DB::table('majors')->insert([
            ['chord'=>'Cm.jpg'],
            ['chord'=>'Csm.jpg'],
            ['chord'=>'Dm.jpg'],
            ['chord'=>'Dsm.jpg'],
            ['chord'=>'Em.jpg'],
            ['chord'=>'Fm.jpg'],
            ['chord'=>'Fsm.jpg'],
            ['chord'=>'Gm.jpg'],
            ['chord'=>'Gsm.jpg'],
            ['chord'=>'Am.jpg'],
            ['chord'=>'Asm.jpg'],
            ['chord'=>'Bm.jpg'],

            ['chord'=>'Cm.jpg'],
            ['chord'=>'Csm.jpg'],
            ['chord'=>'Dm.jpg'],
            ['chord'=>'Dsm.jpg'],
            ['chord'=>'Em.jpg'],
            ['chord'=>'Fm.jpg'],
            ['chord'=>'Fsm.jpg'],
            ['chord'=>'Gm.jpg'],
            ['chord'=>'Gsm.jpg'],
            ['chord'=>'Am.jpg'],
            ['chord'=>'Asm.jpg'],
            ['chord'=>'Bm.jpg'],
        ]);
    }
}
