<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormThreesTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_threes', function (Blueprint $table) {
            $table->string('al_stream')->nullable();
            $table->integer('al_year')->nullable();
            $table->string('al_index')->nullable();
            $table->integer('ol_year')->nullable();
            $table->string('ol_index')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_threes', function (Blueprint $table) {
            //
        });
    }
}
