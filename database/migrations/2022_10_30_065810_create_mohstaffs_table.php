<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohstaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohstaffs', function (Blueprint $table) {
                $table->id();
                $table->string('mohid')->unique();
                $table->string('email');
                $table->string('district');
                $table->string('mname');
                $table->string('fname');
                $table->string('lname');
                $table->string('address');
                $table->integer('contactno');
                $table->string('password');
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
        Schema::dropIfExists('mohstaffs');
    }
}
