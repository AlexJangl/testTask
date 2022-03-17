<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['comedy', 'horror', 'action', 'triller', 'drama', 'fantasy'] as $genre)
        {
            DB::table('genres')->insert([
                'title' => $genre,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
