<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'name' => Str::random(10),
                'main_key' => 'C',
                'main_scale' => 'メジャースケール',
                'progress_chord' => 'Am_G_C_F',
                'body' => '明るい響きが好きです。'
            ]
        ]);
    }
}
