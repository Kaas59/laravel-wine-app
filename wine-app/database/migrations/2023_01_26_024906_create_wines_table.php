<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('name_english')->nullable();
          $table->string('image')->nullable();
          $table->float('sommelier_point')->default(0);
          $table->bigInteger('price')->default(0);
          $table->bigInteger('color_id')->default(0);
          $table->bigInteger('type_id')->default(0);
          $table->bigInteger('breed_id')->default(0);
          $table->bigInteger('winery_id')->default(0);
          $table->bigInteger('country_id')->default(0);
          $table->bigInteger('area1_id')->default(0);
          $table->bigInteger('area2_id')->default(0);
          $table->bigInteger('importer_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
};
