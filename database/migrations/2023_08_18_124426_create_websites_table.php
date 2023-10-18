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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('type',255);
            $table->string('main_image',255);
            $table->string('title',255);
            $table->text('s_description');
            $table->string('image1',255);
            $table->string('image2',255);
            $table->string('image3',255);
            $table->string('image4',255);
            $table->string('sec1_image',255);
            $table->string('sec1_title',255);
            $table->text('sec1_description');
            $table->string('sec2_image',255);
            $table->string('sec2_title',255);
            $table->text('sec2_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
