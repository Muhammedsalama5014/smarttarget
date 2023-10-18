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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header_video',255);
            $table->string('who_title',255);
            $table->text('who_description1');
            $table->text('who_description2');
            $table->string('who_img1',255);
            $table->string('who_img2',255);
            $table->string('who_img3',255);
            $table->string('who_img4',255);
            $table->string('about_title',255);
            $table->text('about_description1');
            $table->text('about_description2');
            $table->text('vission');
            $table->text('mission');
            $table->string('vission_img',255);
            $table->string('mission_img',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
