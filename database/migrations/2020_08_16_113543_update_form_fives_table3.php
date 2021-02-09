<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormFivesTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_fives', function (Blueprint $table) {
            $table->string('subject4')->nullable();
            $table->string('subject5')->nullable();
            $table->string('subject6')->nullable();
            $table->string('result4')->nullable();
            $table->string('result5')->nullable();
            $table->string('result6')->nullable();

            $table->string('ol_subject1')->nullable();
            $table->string('ol_subject2')->nullable();
            $table->string('ol_subject3')->nullable();
            $table->string('ol_subject4')->nullable();

            $table->string('al_subject1')->nullable();
            $table->string('al_subject2')->nullable();
            $table->string('al_subject3')->nullable();
            $table->string('al_subject4')->nullable();

            $table->string('lead1')->nullable();
            $table->string('lead2')->nullable();
            $table->string('lead3')->nullable();
            $table->string('lead4')->nullable();
            $table->string('lead5')->nullable();
            $table->string('lead6')->nullable();
            $table->string('lead7')->nullable();

            $table->string('game1')->nullable();
            $table->string('game2')->nullable();
            $table->string('game3')->nullable();
            $table->string('game4')->nullable();

            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
            $table->string('skill6')->nullable();

            $table->string('dob')->nullable();
            $table->string('m_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nic')->nullable();
            $table->string('school')->nullable();

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
        Schema::table('form_fives', function (Blueprint $table) {
            //
        });
    }
}
