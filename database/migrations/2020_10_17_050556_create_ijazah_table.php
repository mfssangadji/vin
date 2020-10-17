<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIjazahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijazah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("siswa_id")->unsigned();
            $table->foreign("siswa_id")->references('id')->on("siswa")->onDelete('cascade');
            $table->string("no_ijazah");
            $table->date("tanggal_pengambilan");
            $table->tinyInteger("status_penerimaan");
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
        Schema::dropIfExists('ijazah');
    }
}
