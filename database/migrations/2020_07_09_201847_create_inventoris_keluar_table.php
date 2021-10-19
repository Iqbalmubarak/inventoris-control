<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris_keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventoris_id')->unsigned();
            $table->integer('total');
            $table->date('tanggal');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('inventoris_id')->references('id')->on('inventoris')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris_keluar');
    }
}
