<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'photo_url' => 'http://127.0.0.1:8000/'.Str::random(5),
            'message' => Str::random(40),
            'code' => Str::random(32),
        ]);
    }
}
