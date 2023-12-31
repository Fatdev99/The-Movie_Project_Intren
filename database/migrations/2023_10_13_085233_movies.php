<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('movie_id');
            $table->string('name', 255);
            $table->string('releaseyear', 10);
            $table->string('duration', 10);
            $table->text('description');
            $table->string('category', 10);
            $table->string('picture', 255);
            $table->string('source', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
