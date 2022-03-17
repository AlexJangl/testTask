<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Terminator', 'Batman', 'Superman', 'Spiderman'] as $title)
        {
            DB::table('movies')->insert([
                'title' => $title,
                'images' => null,
                'file' => null,
                'status' => false,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
