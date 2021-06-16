<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messageStatus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('withUserid')->nullable();
            $table->char('status', 10)->nullable();
            $table->integer('messegerid')->nullable()->index('messegerid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messageStatus');
    }
}
