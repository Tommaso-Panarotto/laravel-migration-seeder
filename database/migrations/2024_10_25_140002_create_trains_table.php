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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("station_departure", 255);
            $table->string("station_arrive", 255);
            $table->time("hour_departure");
            $table->time("hour-arrive");
            $table->char("train_cd", 12)->unique();
            $table->smallInteger("carriages")->unsigned();
            $table->boolean("on_time")->default(true);
            $table->boolean("deleted")->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
