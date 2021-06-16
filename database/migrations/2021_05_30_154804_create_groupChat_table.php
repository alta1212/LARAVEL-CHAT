<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupChat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('tittle', 30)->nullable();
            $table->integer('creator')->nullable()->index('creator');
            $table->string('chanel', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupChat');
    }
}
