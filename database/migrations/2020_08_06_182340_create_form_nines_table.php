<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormNinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_nines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('full_name')->nullable();
            $table->string('address1')->nullable();
            $table->integer('contact1')->nullable();
            $table->string('email')->nullable();
            $table->string('objective')->nullable();
            $table->string('skill1')->nullable();
            $table->string('skill2')->nullable();
            $table->string('skill3')->nullable();
            $table->string('skill4')->nullable();
            $table->string('skill5')->nullable();
            $table->string('exp1')->nullable();
            $table->string('exp2')->nullable();
            $table->string('exp3')->nullable();
            $table->integer('al_year')->nullable();
            $table->string('al_index_no')->nullable();
            $table->string('al_subject1')->nullable();
            $table->string('al_subject2')->nullable();
            $table->string('al_result1')->nullable();
            $table->string('al_result2')->nullable();
            $table->string('ol_year')->nullable();
            $table->string('ol_index_no')->nullable();
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('subject5')->nullable();
            $table->string('subject6')->nullable();
            $table->string('subject7')->nullable();
            $table->string('subject8')->nullable();
            $table->string('subject9')->nullable();
            $table->string('subject10')->nullable();
            $table->string('result1')->nullable();
            $table->string('result2')->nullable();
            $table->string('result3')->nullable();
            $table->string('result4')->nullable();
            $table->string('result5')->nullable();
            $table->string('result6')->nullable();
            $table->string('result7')->nullable();
            $table->string('result8')->nullable();
            $table->string('result9')->nullable();
            $table->string('result10')->nullable();
            $table->string('name_in_full')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nic')->nullable();
            $table->string('dob')->nullable();
            $table->integer('age')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('p_address')->nullable();
            $table->string('school')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_nines');
    }
}
