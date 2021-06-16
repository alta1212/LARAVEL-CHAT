<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupChatMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupChatMessage', function (Blueprint $table) {
            $table->integer('messageid', true);
            $table->integer('senderid')->nullable()->index('senderid');
            $table->string('content', 500)->nullable();
            $table->string('type', 10);
            $table->string('timeForMediaCall', 100)->nullable();
            $table->integer('groupchatid')->nullable()->index('groupchatid');
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
        Schema::dropIfExists('groupChatMessage');
    }
}
