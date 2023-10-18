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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('bg_image',255);
            $table->string('h_title',255);
            $table->text('h_desc');
            $table->string('guide_title',255);
            $table->text('guide_desc1');
            $table->text('guide_desc2');
            $table->text('guide_image');
            $table->string('profile',255);
            $table->string('about_title',255);
            $table->text('about_desc1');
            $table->text('about_desc2');
            $table->text('mission');
            $table->text('vision');
            $table->string('about_image1');
            $table->string('about_image2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
