<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToMedalja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medalja', function (Blueprint $table) {
            $table->unsignedBigInteger('sportista_id');
            $table->foreign('sportista_id')->references('id')->on('sportista')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medalja', function (Blueprint $table) {
            $table->dropForeign('medalja_sportista_id_foreign');
        });
    }
}
