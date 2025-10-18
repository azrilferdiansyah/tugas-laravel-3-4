<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'J.K. Rowling', 'birth_year' => 1965],
            ['name' => 'George R.R. Martin', 'birth_year' => 1948],
            ['name' => 'Haruki Murakami', 'birth_year' => 1949],
        ]);
    }
}
