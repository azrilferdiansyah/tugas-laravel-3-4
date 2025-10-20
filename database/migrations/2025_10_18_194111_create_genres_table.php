<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('name');                  // nama genre
            $table->text('description')->nullable(); // deskripsi genre
            $table->integer('popularity')->nullable(); // nilai popularitas
            $table->boolean('is_active')->default(true); // aktif / tidak
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
