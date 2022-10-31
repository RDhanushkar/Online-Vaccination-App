<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('fstname');
            $table->string('lstname');
            $table->string('address');
            $table->integer('mobilenumber');
            $table->enum('gender',['male','female']);
            $table->string('nic');
            $table->date('dob');
            $table->string('district');
            $table->string('moh');
            $table->string('uname');
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
        Schema::dropIfExists('people');
    }
}
