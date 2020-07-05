<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->bigIncrements('artikel_id');
            $table->bigInteger('pengguna_id')->unsigned();
            $table->date('tgl_dibuat');
            $table->string('judul',50);
            $table->text('isi');
            $table->string('slug',255);
            $table->string('tag',255);
            $table->timestamps();
            $table->foreign('pengguna_id')
            ->references('pengguna_id')
            ->on('penggunas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
