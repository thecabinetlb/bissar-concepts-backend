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
        Schema::create('collaboration_projects', function (Blueprint $table) {
            $table->id();
            $table->string('banner')->nullable();
            $table->string('thumbnail')->nullable();
            $table->json('images')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type');
            $table->string('location')->nullable();
            $table->year('year')->nullable();
            $table->json('architects')->nullable();
            $table->string('client')->nullable();
            $table->timestamp('completion_date')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();

            // Foreign key constraint for category_id
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaboration_projects');
    }
};
