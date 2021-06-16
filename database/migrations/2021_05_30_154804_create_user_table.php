<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('userid', true);
            $table->string('email', 50)->nullable();
            $table->string('pass', 100)->nullable();
            $table->string('name', 20)->nullable();
            $table->string('avata', 100)->nullable();
            $table->string('mota', 300)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('diachi', 100)->nullable();
            $table->char('joindate', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
