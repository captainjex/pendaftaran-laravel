<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->integer('hp');
            $table->integer('divisi_id')->unsigned();
            $table->text('alasan');
            $table->integer('periksa')->default(0);
            $table->integer('diperiksa_oleh')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('pesertas', function (Blueprint $table){
            $table->foreign('diperiksa_oleh')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('divisi_id')->references('id')->on('divisis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
