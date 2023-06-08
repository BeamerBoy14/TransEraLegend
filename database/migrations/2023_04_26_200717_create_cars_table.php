<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->integer('brand_id');
            $table->integer('power');
            $table->string('fuelType');
            $table->string('feature');
            $table->integer('price')->nullable();
            $table->string('description')->nullable();
            $table->string('imgFace')->nullable();
            $table->string('imgSemiSide')->nullable();
            $table->string('imgInt')->nullable();
            $table->string('imgExt')->nullable();
            $table->string('imgExtSec')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
