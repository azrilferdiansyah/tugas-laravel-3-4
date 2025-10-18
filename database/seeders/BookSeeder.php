<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Harry Potter', 'author_id' => 1, 'genre_id' => 1, 'published_year' => 1997],
            ['title' => 'A Game of Thrones', 'author_id' => 2, 'genre_id' => 2, 'published_year' => 1996],
            ['title' => 'Kafka on the Shore', 'author_id' => 3, 'genre_id' => 3, 'published_year' => 2002],
        ]);
    }
}
