<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'name'        => 'Fiksi',
            'description' => 'Cerita fiksi dan imajinasi',
            'is_active'   => true,
        ]);

        Genre::create([
            'name'        => 'Sejarah',
            'description' => 'Buku tentang sejarah dunia dan lokal',
            'is_active'   => true,
        ]);
    }
}
