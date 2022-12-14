<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('lieu');
            $table->string('cin');
            $table->date('dateDebut');
            $table->date('dateFin');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
