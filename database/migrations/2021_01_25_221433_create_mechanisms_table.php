<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechanismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechanisms', function (Blueprint $table) {
            $table->id();
            $table->integer('pumping_concret');
            $table->integer('pum_station');
            $table->integer('trailer_qatra');
            $table->integer('transfer_concret');
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
        Schema::dropIfExists('mechanisms');
    }
}
