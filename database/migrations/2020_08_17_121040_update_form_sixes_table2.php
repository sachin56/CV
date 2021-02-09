<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormSixesTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_sixes', function (Blueprint $table) {
            $table->text('technical_skills')->nullable();
            $table->text('other_skills')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_address')->nullable();
            $table->string('p_dob')->nullable();
            $table->integer('p_age')->nullable();
            $table->string('p_gender')->nullable();
            $table->string('p_Status')->nullable();
            $table->string('non_refree1_name')->nullable();
            $table->string('non_refree2_name')->nullable();
            $table->string('non_refree1_post')->nullable();
            $table->string('non_refree2_post')->nullable();
            $table->string('non_refree1_workplace')->nullable();
            $table->string('non_refree2_workplace')->nullable();
            $table->integer('non_refree1_tel')->nullable();
            $table->integer('non_refree2_tel')->nullable();
            $table->string('non_refree1_email')->nullable();
            $table->string('non_refree2_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_sixes', function (Blueprint $table) {
            //
        });
    }
}
