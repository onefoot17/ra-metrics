<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltPlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plants.plants', function (Blueprint $table) {
            $table->string('plant_name')->nullable();
            $table->string('cross')->nullable();
            $table->string('image_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plants.plants', function (Blueprint $table) {
            $table->dropColumn('plant_name');
            $table->dropColumn('cross');
            $table->dropColumn('image_path');
        });
    }
}
