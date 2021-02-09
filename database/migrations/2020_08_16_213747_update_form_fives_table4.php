<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormFivesTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_fives', function (Blueprint $table) {
            $table->text('ol_result1')->nullable();
            $table->text('ol_result2')->nullable();
            $table->text('ol_result3')->nullable();
            $table->text('ol_result4')->nullable();
            $table->text('al_result1')->nullable();
            $table->text('al_result3')->nullable();
            $table->text('al_result4')->nullable();
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
