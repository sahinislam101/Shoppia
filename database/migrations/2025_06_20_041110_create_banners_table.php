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
        Schema::create('banners', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();              // Optional title
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();           // Optional subtitle or short description
            $table->string('image');                          // Banner image
            $table->string('link')->nullable();               // Optional redirect URL
            $table->enum('position', ['top', 'middle', 'countdown'])->default('middle');
            $table->integer('order')->default(0);             // For custom sorting
            $table->boolean('status')->default(true);         // Visibility toggle
            $table->json('meta')->nullable();                 // For any extra dynamic content like countdown, etc.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
