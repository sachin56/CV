<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormThrees2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_threes', function (Blueprint $table) {
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('subject5')->nullable();
            $table->string('subject6')->nullable();
            $table->string('subject7')->nullable();
            $table->string('subject8')->nullable();
            $table->string('subject9')->nullable();
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();
            $table->string('result4')->nullable();
            $table->string('result5')->nullable();
            $table->string('result6')->nullable();
            $table->string('result7')->nullable();
            $table->string('result8')->nullable();
            $table->string('result9')->nullable();
            $table->string('al_subject1')->nullable();
            $table->string('al_subject2')->nullable();
            $table->string('al_subject3')->nullable();
            $table->string('al_subject4')->nullable();
            $table->string('al_result1')->nullable();
            $table->string('al_result2')->nullable();
            $table->string('al_result3')->nullable();
            $table->string('al_result4')->nullable();
            $table->string('project1')->nullable();
            $table->string('project2')->nullable();
            $table->text('experience1')->nullable();
            $table->text('experience2')->nullable();
            $table->string('name_full')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('nic')->nullable();
            $table->string('non_refree1_name')->nullable();
            $table->string('non_refree1_post')->nullable();
            $table->string('non_refree1_workplace')->nullable();
            $table->string('non_refree1_tel')->nullable();
            $table->string('non_refree2_name')->nullable();
            $table->string('non_refree2_post')->nullable();
            $table->string('non_refree2_workplace')->nullable();
            $table->string('non_refree2_tel')->nullable();
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
