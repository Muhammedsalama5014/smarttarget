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
        Schema::create('add_features_to_socials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('social_plan_id');
            $table->foreign('social_plan_id')->references('id')->on('social_plans');
            $table->unsignedBigInteger('social_plan_feature_id');
            $table->foreign('social_plan_feature_id')->references('id')->on('social_plan_features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_features_to_socials');
    }
};
