<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantParentsSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        \DB::statement('CREATE SCHEMA IF NOT EXISTS plants');

        Schema::create('plants.plant_parents_species', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('plant_parent_name');
            $table->string('image_path')->nullable();
            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants.plant_parents_species');
    }
}
