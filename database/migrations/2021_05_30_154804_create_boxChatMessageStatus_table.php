<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxChatMessageStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxChatMessageStatus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('withUserid')->nullable()->index('withUserid');
            $table->char('status', 10)->nullable();
            $table->char('chanel', 10)->nullable()->index('chanel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxChatMessageStatus');
    }
}
