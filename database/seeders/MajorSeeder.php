<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            ['chord'=>'C.jpg'],
            ['chord'=>'Cs.jpg'],
            ['chord'=>'D.jpg'],
            ['chord'=>'Ds.jpg'],
            ['chord'=>'E.jpg'],
            ['chord'=>'F.jpg'],
            ['chord'=>'Fs.jpg'],
            ['chord'=>'G.jpg'],
            ['chord'=>'Gs.jpg'],
            ['chord'=>'A.jpg'],
            ['chord'=>'As.jpg'],
            ['chord'=>'B.jpg'],

            ['chord'=>'C.jpg'],
            ['chord'=>'Cs.jpg'],
            ['chord'=>'D.jpg'],
            ['chord'=>'Ds.jpg'],
            ['chord'=>'E.jpg'],
            ['chord'=>'F.jpg'],
            ['chord'=>'Fs.jpg'],
            ['chord'=>'G.jpg'],
            ['chord'=>'Gs.jpg'],
            ['chord'=>'A.jpg'],
            ['chord'=>'As.jpg'],
            ['chord'=>'B.jpg'],
        ]);
    }
}
