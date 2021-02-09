<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormTwos2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_twos', function (Blueprint $table) {
            $table->text('non_refree1_name')->nullable();
            $table->text('non_refree1_post')->nullable();
            $table->text('non_refree1_workplace')->nullable();
            $table->text('non_refree1_tel')->nullable();
            $table->text('non_refree2_name')->nullable();
            $table->text('non_refree2_post')->nullable();
            $table->text('non_refree2_workplace')->nullable();
            $table->text('non_refree2_tel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_twos', function (Blueprint $table) {
            //
        });
    }
}
