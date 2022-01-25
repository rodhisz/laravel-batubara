<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountTerbesarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_terbesar', function (Blueprint $table) {
            $table->id();
            $table->string('amount_terbesar_site');
            $table->bigInteger('pertama');
            $table->bigInteger('kedua');
            $table->bigInteger('ketiga');
            $table->bigInteger('keempat');
            $table->bigInteger('kelima');
            $table->bigInteger('keenam');
            $table->bigInteger('ketujuh');
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
        Schema::dropIfExists('amount_terbesars');
    }
}
