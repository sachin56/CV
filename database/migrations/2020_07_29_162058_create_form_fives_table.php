<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormFivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_fives', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('main_image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('email')->nullable();
            $table->string('objective')->nullable();
            $table->string('a_qualify1')->nullable();
            $table->string('a_qualify2')->nullable();
            $table->string('a_qualify3')->nullable();
            $table->string('a_qualify4')->nullable();
            $table->string('a_qualify5')->nullable();
            $table->string('skill_ability')->nullable();
            $table->string('exam_type')->nullable();
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_fives');
    }
}
