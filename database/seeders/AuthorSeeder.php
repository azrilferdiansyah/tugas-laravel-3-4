<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name'        => 'Andrea Hirata',
            'biography'   => 'Penulis Laskar Pelangi',
            'birth_year'  => 1967,
            'nationality' => 'Indonesia',
        ]);

        Author::create([
            'name'        => 'Pramoedya Ananta Toer',
            'biography'   => 'Penulis Bumi Manusia',
            'birth_year'  => 1925,
            'nationality' => 'Indonesia',
        ]);
    }
}
