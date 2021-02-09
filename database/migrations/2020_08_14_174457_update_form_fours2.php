<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormFours2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_fours', function (Blueprint $table) {
            $table->string('work_xp1')->nullable();
            $table->string('work_xp1_description')->nullable();
            $table->string('work_xp1_res1')->nullable();
            $table->string('work_xp1_res2')->nullable();
            $table->string('work_xp1_res3')->nullable();
            $table->string('work_xp1_res4')->nullable();
            $table->string('work_xp2')->nullable();
            $table->string('work_xp2_res1')->nullable();
            $table->string('work_xp2_res2')->nullable();
            $table->string('work_xp2_res3')->nullable();
            $table->string('work_xp2_res4')->nullable();
            $table->string('work_xp3')->nullable();
            $table->string('work_xp3_res1')->nullable();
            $table->string('work_xp3_res2')->nullable();
            $table->string('work_xp3_res3')->nullable();
            $table->string('work_xp3_res4')->nullable();
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
        Schema::table('form_fours', function (Blueprint $table) {
            //
        });
    }
}
