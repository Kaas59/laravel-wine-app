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
          // $table->foreign('color_id')->references('id')->on('wine_colors');
          $table->bigInteger('type_id')->default(0);
          // $table->foreign('type_id')->references('id')->on('wine_types');
          $table->bigInteger('breed_id')->default(0);
          // $table->foreign('breed_id')->references('id')->on('breeds');
          $table->bigInteger('winery_id')->default(0);
          // $table->foreign('winery_id')->references('id')->on('wineries');
          $table->bigInteger('country_id')->default(0);
          // $table->foreign('country_id')->references('id')->on('countries');
          $table->bigInteger('area1_id')->default(0);
          // $table->foreign('area1_id')->references('id')->on('areas');
          $table->bigInteger('area2_id')->default(0);
          // $table->foreign('area2_id')->references('id')->on('areas');
          $table->bigInteger('importer_id')->default(0);
          // $table->foreign('importer_id')->references('id')->on('importers');
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
