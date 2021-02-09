<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormEightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_eights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('main_image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->string('email')->nullable();
            $table->string('contact1')->nullable();
            $table->text('objective')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('school')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nic')->nullable();
            $table->text('pro_qualify')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_eights');
    }
}
