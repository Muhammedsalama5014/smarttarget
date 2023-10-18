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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon',255);
            $table->string('title',255);
            $table->text('sub_title');
            $table->text('s_description');
            $table->string('main_img',255);
            $table->text('l_description');
            $table->string('end_img1',255);
            $table->string('end_img2',255);
            $table->string('end_img3',255);
            $table->string('end_img4',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
