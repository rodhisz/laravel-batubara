<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataItosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ito', function (Blueprint $table) {
            $table->id();
            $table->string('ito_site');
            $table->bigInteger('soh');
            $table->bigInteger('usage');
            $table->bigInteger('plan');
            $table->bigInteger('aktual');
            $table->double('achievement');
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
        Schema::dropIfExists('data_ito');
    }
}
