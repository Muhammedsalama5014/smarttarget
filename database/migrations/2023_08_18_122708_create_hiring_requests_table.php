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
        Schema::create('hiring_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hiring_id');
            $table->foreign('hiring_id')->references('id')->on('hirings');
            $table->string('name',255);
            $table->string('email',255);
            $table->string('phone',255);
            $table->text('cover_letter');
            $table->string('cv',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hiring_requests');
    }
};
