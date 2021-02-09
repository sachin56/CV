<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormEightsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_eights', function (Blueprint $table) {

            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();

            $table->string('al_stream')->nullable();
            $table->integer('al_year')->nullable();
            $table->string('al_index')->nullable();
            $table->string('al_subject1')->nullable();
            $table->string('al_subject2')->nullable();
            $table->string('al_subject3')->nullable();
            $table->string('al_subject4')->nullable();
            $table->string('al_grade1')->nullable();
            $table->string('al_grade2')->nullable();
            $table->string('al_grade3')->nullable();
            $table->string('al_grade4')->nullable();

            $table->integer('ol_year')->nullable();
            $table->string('ol_subject1')->nullable();
            $table->string('ol_subject2')->nullable();
            $table->string('ol_subject3')->nullable();
            $table->string('ol_subject4')->nullable();
            $table->string('ol_subject5')->nullable();
            $table->string('ol_subject6')->nullable();
            $table->string('ol_subject7')->nullable();
            $table->string('ol_subject8')->nullable();
            $table->string('ol_subject9')->nullable();

            $table->string('ol_grade1')->nullable();
            $table->string('ol_grade2')->nullable();
            $table->string('ol_grade3')->nullable();
            $table->string('ol_grade4')->nullable();
            $table->string('ol_grade5')->nullable();
            $table->string('ol_grade6')->nullable();
            $table->string('ol_grade7')->nullable();
            $table->string('ol_grade8')->nullable();
            $table->string('ol_grade9')->nullable();

            $table->string('job1')->nullable();
            $table->string('job2')->nullable();
            $table->string('job1_company')->nullable();
            $table->string('job2_company')->nullable();

            $table->string('job1_period')->nullable();
            $table->string('job2_period')->nullable();

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
        Schema::table('form_eights', function (Blueprint $table) {
            //
        });
    }
}
