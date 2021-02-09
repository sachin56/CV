<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_threes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->integer('contact_no1')->nullable();
            $table->integer('contact_no2')->nullable();
            $table->string('statement1')->nullable();
            $table->string('statement2')->nullable();
            $table->string('statement3')->nullable();
            $table->string('statement4')->nullable();
            $table->string('statement5')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_threes');
    }
}
