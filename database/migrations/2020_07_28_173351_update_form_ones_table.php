<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_ones', function (Blueprint $table) {
            $table->string('subject8')->nullable();
            $table->string('result8')->nullable();
            $table->string('subject9')->nullable();
            $table->string('result9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_ones', function (Blueprint $table) {
            //
        });
    }
}
