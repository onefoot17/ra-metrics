<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants.plants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('plant_parent_specieid');
            $table->unsignedBigInteger('plant_typeid');
            $table->string('comments')->nullable();

            $table->foreign('plant_parent_specieid')->references('id')->on('plants.plant_parents_species')->onDelete('cascade');
            $table->foreign('plant_typeid')->references('id')->on('plants.plant_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants.plants');
    }
}
