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
        DB::table('major')->insert([
            ['chord'=>'C'],
            ['chord'=>'Cs'],
            ['chord'=>'D'],
            ['chord'=>'Ds'],
            ['chord'=>'E'],
            ['chord'=>'F'],
            ['chord'=>'Fs'],
            ['chord'=>'G'],
            ['chord'=>'Gs'],
            ['chord'=>'A'],
            ['chord'=>'As'],
            ['chord'=>'B'],

            ['chord'=>'C'],
            ['chord'=>'Cs'],
            ['chord'=>'D'],
            ['chord'=>'Ds'],
            ['chord'=>'E'],
            ['chord'=>'F'],
            ['chord'=>'Fs'],
            ['chord'=>'G'],
            ['chord'=>'Gs'],
            ['chord'=>'A'],
            ['chord'=>'As'],
            ['chord'=>'B'],
        ]);
    }
}
