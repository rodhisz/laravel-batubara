<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_gi', function (Blueprint $table) {
            $table->id();
            $table->string('gi_project_site');
            $table->bigInteger('gi_fogc');
            $table->bigInteger('gi_gens');
            $table->bigInteger('gi_mdle');
            $table->bigInteger('gi_sprt');
            $table->bigInteger('gi_tyre');
            $table->bigInteger('gi_grand_total');
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
        Schema::dropIfExists('data_gis');
    }
}
