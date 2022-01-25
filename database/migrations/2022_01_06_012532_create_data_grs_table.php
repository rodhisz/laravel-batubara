<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataGrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_gr', function (Blueprint $table) {
            $table->id();
            $table->string('gr_project_site');
            $table->bigInteger('gr_fogc');
            $table->bigInteger('gr_gens');
            $table->bigInteger('gr_mdle');
            $table->bigInteger('gr_sprt');
            $table->bigInteger('gr_tyre');
            $table->bigInteger('gr_grand_total');
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
        Schema::dropIfExists('data_grs');
    }
}
