<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnocementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annocements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('vaccine');
            $table->string('venue');
            $table->string('age_group');
            $table->string('no_of_dosage');
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
        Schema::dropIfExists('annocements');
    }
}
