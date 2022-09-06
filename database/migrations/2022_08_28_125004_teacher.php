<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first');
            $table->string('middle');
            $table->string('last');
            $table->string('father');
            $table->string('father_phone');
            $table->string('mother');
            $table->string('mother_phone');
            $table->string('phone');
            $table->integer('age');
            $table->string('gender');
            $table->string('department');
            $table->string('faculity');
            $table->string('status');
            $table->string('nationality');
            $table->string('email');
            $table->string('country');
            $table->string('address');
            $table->timestamp('dor');
            $table->date('dob');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
