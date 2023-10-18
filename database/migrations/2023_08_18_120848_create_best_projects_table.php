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
        Schema::create('best_projects', function (Blueprint $table) {
            $table->id();
            $table->string('month_name',255);
            $table->string('image1',255);
            $table->string('image2',255);
            $table->string('image3',255);
            $table->string('image4',255);
            $table->string('image5',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('best_projects');
    }
};
