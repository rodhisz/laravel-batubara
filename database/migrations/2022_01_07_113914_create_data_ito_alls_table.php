<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataItoAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ito_all', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ito_all_soh')->nullable();
            $table->bigInteger('ito_all_usage')->nullable();
            $table->bigInteger('ito_all_plan')->nullable();
            $table->bigInteger('ito_all_aktual')->nullable();
            $table->double('ito_all_achievement')->nullable();
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
        Schema::dropIfExists('data_ito_alls');
    }
}
