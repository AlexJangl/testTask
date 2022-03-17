<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 4) as $movie_id)
        {
            $genres = [];
            foreach (range(1, 6) as $id)
            {
                $genre_id = rand(1, 6);
                if (in_array($genre_id, $genres))
                {
                    break;
                }
                $genres[] = $genre_id;

                DB::table('genre_movie')->insert([
                    'genre_id' => $genre_id,
                    'movie_id' => $movie_id,
                ]);
            }
        }
    }
}
