<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormSevensTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_sevens', function (Blueprint $table) {

            $table->string('edu_qualification')->nullable();
            $table->string('edu_time')->nullable();
            $table->string('ol_subject1')->nullable();
            $table->string('ol_subject2')->nullable();
            $table->string('ol_subject3')->nullable();
            $table->string('ol_result1')->nullable();
            $table->string('ol_result2')->nullable();
            $table->string('ol_result3')->nullable();
            $table->string('al_subject1')->nullable();
            $table->string('al_subject2')->nullable();
            $table->string('al_subject3')->nullable();
            $table->string('al_subject4')->nullable();
            $table->string('al_result1')->nullable();
            $table->string('al_result2')->nullable();
            $table->string('al_result3')->nullable();
            $table->string('al_result4')->nullable();
            $table->string('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('m_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('languages')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('sport1')->nullable();
            $table->string('sport2')->nullable();
            $table->string('sport3')->nullable();
            $table->string('non_refree1_name')->nullable();
            $table->string('non_refree1_post')->nullable();
            $table->string('non_refree1_workplace')->nullable();
            $table->integer('non_refree1_tel')->nullable();
            $table->string('non_refree2_name')->nullable();
            $table->string('non_refree2_post')->nullable();
            $table->string('non_refree2_workplace')->nullable();
            $table->integer('non_refree2_tel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_sevens', function (Blueprint $table) {
            //
        });
    }
}
