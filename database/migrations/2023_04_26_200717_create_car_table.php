<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->integer('brand_id');
            $table->integer('power');
            $table->string('fuelType');
            $table->string('feature');
            $table->float('acceleration')->nullable();
            $table->integer('topSpeed')->nullable();
            $table->integer('price')->nullable();
            $table->integer('priceWeekEnd')->nullable();
            $table->integer('priceWeek')->nullable();
            $table->integer('priceMonth')->nullable();
            $table->string('description')->nullable();
            $table->string('imgFace')->nullable();
            $table->string('imgSemiSide')->nullable();
            $table->string('imgInt')->nullable();
            $table->string('imgIntSec')->nullable();
            $table->string('imgExt')->nullable();
            $table->string('imgExtSec')->nullable();
            $table->string('imgExtThi')->nullable();
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
        Schema::dropIfExists('car');
    }
}
