<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddZemljaToSportista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sportista', function (Blueprint $table) {
            $table->foreign('zemlja_id')->references('id')->on('zemlja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sportista', function (Blueprint $table) {
            $table->removeColumn('zemlja_id');
        });
    }
}
