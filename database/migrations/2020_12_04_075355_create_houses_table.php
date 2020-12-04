<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('title');
            $table->text('date_in');
            $table->text('date_out');
            $table->text('thumb');
            $table->longText('imgs');
            $table->longText('content');
            $table->boolean('alive')->default(1);

            $table->text('date_built');
            $table->longText('cad_number');
            $table->double('area_wide');
            $table->double('area_small');
            $table->longText('material_wall');
            $table->longText('material_floor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
