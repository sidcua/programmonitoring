<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyToUniqueColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('percentage', function (Blueprint $table) {
            $table->string('hei')->change();
            $table->string('program')->change();
            $table->string('semester')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('percentage', function (Blueprint $table) {
            
            $table->string('hei')->unique()->change();
            $table->string('program')->unique()->change();
            $table->string('semester')->unique()->change();
        });
    }
}
