<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFormThreesTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_threes', function (Blueprint $table) {
            $table->string('civil_status')->nullable();
            $table->string('school')->nullable();
            $table->string('non_refree1_address')->nullable();
            $table->string('non_refree2_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_threes', function (Blueprint $table) {
            //
        });
    }
}
