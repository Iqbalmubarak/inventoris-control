<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorisDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventoris_id')->unsigned();
            $table->integer('sumber_id')->unsigned();
            $table->date('tanggal');
            $table->integer('total');
            $table->tinyInteger('status')->default(0); //0 : tidak di kasih oleh dinkes, 1 : dikasih oleh dinkes
            $table->timestamps();

            $table->unique(['inventoris_id','tanggal','sumber_id']);

            $table->foreign('inventoris_id')->references('id')->on('inventoris')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sumber_id')->references('id')->on('inventoris_sumber')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventoris_detail');
    }
}
