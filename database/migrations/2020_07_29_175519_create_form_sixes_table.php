<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_sixes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('main_image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('statement')->nullable();
            $table->string('edu_qualify1')->nullable();
            $table->string('edu_qualify2')->nullable();
            $table->string('edu_qualify3')->nullable();
            $table->string('edu_qualify4')->nullable();
            $table->string('employ1')->nullable();
            $table->text('employ_description')->nullable();
            $table->string('achievement1')->nullable();
            $table->string('achievement2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_sixes');
    }
}
