<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_twos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('address')->nullable();
            $table->string('full_name')->nullable();
            $table->string('dob')->nullable();
            $table->integer('contact_no')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('nic')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('school')->nullable();
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('subject5')->nullable();
            $table->string('subject6')->nullable();
            $table->string('subject7')->nullable();
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();
            $table->string('result4')->nullable();
            $table->string('result5')->nullable();
            $table->string('result6')->nullable();
            $table->string('result7')->nullable();
            $table->string('company')->nullable();
            $table->string('period')->nullable();
            $table->string('work_years')->nullable();
            $table->string('cover_area')->nullable();
            $table->string('work_city')->nullable();
            $table->string('language')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_twos');
    }
}
