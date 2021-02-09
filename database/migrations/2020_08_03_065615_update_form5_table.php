<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForm5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_fives', function (Blueprint $table) {
            $table->string('main_image')->nullable();
            $table->string('a_qualify6')->nullable();
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_fives', function (Blueprint $table) {
            //
        });
    }
}
