<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'name'        => 'Novel',
            'slug'        => 'novel',
            'description' => 'Karya sastra berbentuk prosa panjang',
            'is_active'   => true,
        ]);

        Genre::create([
            'name'        => 'Sejarah',
            'slug'        => 'sejarah',
            'description' => 'Buku yang menceritakan peristiwa masa lalu',
            'is_active'   => true,
        ]);
    }
}
