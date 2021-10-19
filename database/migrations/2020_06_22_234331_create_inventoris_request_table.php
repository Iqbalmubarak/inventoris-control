<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris_request', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('satker_id')->unsigned();
            $table->date('tanggal');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->foreign('satker_id')->references('id')->on('satuan_kerja')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris_request');
    }
}
