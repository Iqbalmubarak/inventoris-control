<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('satker_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('satuan_id')->unsigned();
            $table->timestamps();
            $table->foreign('satker_id')->references('id')->on('satuan_kerja')->onUpdate('cascade');
            $table->foreign('barang_id')->references('id')->on('barang')->onUpdate('cascade');
            $table->foreign('satuan_id')->references('id')->on('satuan_barang')->onUpdate('cascade');

            $table->unique(['satker_id','barang_id','satuan_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris');
    }
}
