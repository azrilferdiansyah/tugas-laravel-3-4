<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title'          => 'Laskar Pelangi',
            'author_id'      => 1,
            'genre_id'       => 1,
            'published_year' => 2005,
            'isbn'           => '978-602-1234-0001',
            'summary'        => 'Kisah perjuangan anak-anak Belitung.',
            'is_active'      => true,
        ]);

        Book::create([
            'title'          => 'Bumi Manusia',
            'author_id'      => 2,
            'genre_id'       => 2,
            'published_year' => 1980,
            'isbn'           => '978-602-1234-0002',
            'summary'        => 'Novel karya Pramoedya Ananta Toer.',
            'is_active'      => true,
        ]);
    }
}
