<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smart_vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('nic');
            $table->string('fullname');
            $table->integer('age');
            $table->string('email');
            $table->enum('doc',['passport','nic','vaccinecard']);
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
        Schema::dropIfExists('smart_vaccines');
    }
}
