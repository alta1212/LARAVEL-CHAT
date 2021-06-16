<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Friend', function (Blueprint $table) {
            $table->integer('Friendid', true);
            $table->integer('fromid')->nullable()->index('fromid');
            $table->integer('receiverid')->nullable()->index('receiverid');
            $table->char('status', 10)->nullable();
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
        Schema::dropIfExists('Friend');
    }
}
