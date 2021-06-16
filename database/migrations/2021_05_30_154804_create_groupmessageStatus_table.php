<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupmessageStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupmessageStatus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('withUserid')->nullable()->index('withUserid');
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
        Schema::dropIfExists('groupmessageStatus');
    }
}
