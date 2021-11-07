<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatHolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mathol', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('gambar',255);
            $table->text('deskripsi');
            $table->string('lokasi',255);
            $table->enum('kategori',['Tempat Makan','Hotel']);
            $table->unsignedBigInteger('pariwisata_id');
            $table->timestamps();
            $table->foreign('pariwisata_id')->references('id')->on('pariwisata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mathol');
    }
}
