<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Test Insert Data Using Seeder4',
            'disc' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        ]);
    }
}
