<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("sekolah_id")->unsigned();
            $table->foreign("sekolah_id")->references('id')->on("sekolah")->onDelete('cascade');
            $table->string("nis");
            $table->string("nama_lengkap");
            $table->enum("jenis_kelamin", ['L','P']);
            $table->longtext("alamat");
            $table->string("no_telp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
