<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_no1')->nullable();
            $table->string('contact_no2')->nullable();
            $table->string('email')->nullable();
            $table->string('objective')->nullable();
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
            $table->string('higher_edu')->nullable();
            $table->string('other1')->nullable();
            $table->string('other2')->nullable();
            $table->string('other3')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_fours');
    }
}
