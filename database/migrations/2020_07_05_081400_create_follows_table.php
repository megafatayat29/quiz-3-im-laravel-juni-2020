<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigInteger('pengguna_id')->unsigned();
            $table->foreign('pengguna_id')->references('pengguna_id')->on('penggunas');
            $table->bigInteger('followed_pengguna_id')->unsigned();
            $table->foreign('followed_pengguna_id')->references('pengguna_id')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
