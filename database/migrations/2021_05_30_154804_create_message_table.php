<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->integer('messageid', true);
            $table->integer('sender')->nullable();
            $table->string('content', 500)->nullable();
            $table->string('type', 10);
            $table->string('timeForMediaCall', 100)->nullable();
            $table->char('chanel', 10)->nullable()->index('chanel');
            $table->char('time', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
