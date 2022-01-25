<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('project_site')->nullable();
            $table->bigInteger('fogc')->nullable();
            $table->bigInteger('gens')->nullable();
            $table->bigInteger('mdle')->nullable();
            $table->bigInteger('sprt')->nullable();
            $table->bigInteger('tyre')->nullable();
            $table->bigInteger('grand_total')->nullable();
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
        Schema::dropIfExists('data');
    }
}
