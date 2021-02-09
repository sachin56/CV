<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormOnes2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_ones', function (Blueprint $table) {
            $table->text('a_qualify1')->nullable();
            $table->text('a_qualify2')->nullable();
            $table->text('a_qualify3')->nullable();
            $table->text('a_qualify4')->nullable();
            $table->text('p_qualify1')->nullable();
            $table->text('p_qualify2')->nullable();
            $table->text('p_qualify3')->nullable();
            $table->text('p_qualify4')->nullable();
            $table->text('skill1')->nullable();
            $table->text('skill2')->nullable();
            $table->text('skill3')->nullable();
            $table->text('skill4')->nullable();
            $table->text('skill5')->nullable();
            $table->text('skill6')->nullable();
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
        Schema::table('form_ones', function (Blueprint $table) {
            //
        });
    }
}
