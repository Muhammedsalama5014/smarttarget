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
        Schema::create('socialmedia', function (Blueprint $table) {
            $table->id();
            $table->string('main_image',255);
            $table->string('title',255);
            $table->string('categories',255);
            $table->text('s_description');
            $table->text('l_description');
            $table->string('image1',255);
            $table->string('image2',255);
            $table->string('image3',255);
            $table->string('image4',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socialmedia');
    }
};
