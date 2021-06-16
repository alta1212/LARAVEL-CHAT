<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxchatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxchat', function (Blueprint $table) {
            $table->char('chanel', 10)->primary();
            $table->integer('user1')->nullable()->index('user1');
            $table->integer('user2')->nullable()->index('user2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxchat');
    }
}
