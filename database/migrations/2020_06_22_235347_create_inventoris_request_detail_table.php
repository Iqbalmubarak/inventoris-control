<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisRequestDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris_request_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventoris_request_id')->unsigned();
            $table->integer('barang_id')->unsigned();
            $table->integer('satuan_id')->unsigned();
            $table->integer('total');
            $table->tinyInteger('status')->default(0);
            $table->text('pesan')->nullable();
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('barang')->onUpdate('cascade');
            $table->foreign('satuan_id')->references('id')->on('satuan_barang')->onUpdate('cascade');
            $table->foreign('inventoris_request_id')->references('id')->on('inventoris_request')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris_request_detail');
    }
}
