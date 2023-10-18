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
        Schema::create('other_plan_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('other_plan_id');
            $table->foreign('other_plan_id')->references('id')->on('other_plans');
            $table->text('title');
            $table->string('price',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_plan_features');
    }
};
