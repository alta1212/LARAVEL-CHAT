<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruopChatMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gruopChatMember', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('groupchatid')->nullable()->index('groupchatid');
            $table->string('memberid', 500)->nullable()->index('memberid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gruopChatMember');
    }
}
