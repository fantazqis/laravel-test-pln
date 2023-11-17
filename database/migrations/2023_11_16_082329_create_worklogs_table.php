<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worklogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pegawai');
            $table->unsignedBigInteger('id_project');
            $table->integer('durasi_kerja');
            $table->date('tanggal_pengerjaan');
            $table->timestamps();
        });

        Schema::table('worklogs', function (Blueprint $table) {
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawais')->onDelete('CASCADE');
            $table->foreign('id_project')->references('id_project')->on('projects')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worklogs');
    }
}
