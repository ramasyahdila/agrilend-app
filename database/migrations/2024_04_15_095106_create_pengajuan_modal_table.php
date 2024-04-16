<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanModalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pengajuan_modal', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('poktan');
            $table->bigInteger('jumlah_pinjaman');
            $table->bigInteger('bunga');
            $table->bigInteger('jumlah_diterima');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali');
            $table->string('status')->default('Menunggu dikonfirmasi');
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
        Schema::dropIfExists('pengajuan_modal');
    }
}
