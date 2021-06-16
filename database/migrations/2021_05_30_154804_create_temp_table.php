<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('_with')->nullable();
            $table->string('username', 50)->nullable();
            $table->integer('iduser')->nullable();
            $table->string('useravt', 150)->nullable();
            $table->string('chanel', 10)->nullable();
            $table->string('lastmes', 500)->nullable();
            $table->dateTime('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp');
    }
}
