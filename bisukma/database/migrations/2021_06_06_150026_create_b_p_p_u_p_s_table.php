<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBPPUPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bppup', function (Blueprint $table) {
            $table->id();
            $table->string('judul',255);
            $table->text('isi');
            $table->string('gambar',255);
            $table->string('linkyt',255)->nullable()->default(null);
            $table->string('googleform',255)->nullable()->default(null);
            $table->enum('kategori',['Berita','Pendidikan','Pariwisata','UMKM','Pertanian']);
            
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
        Schema::dropIfExists('bppup');
    }
}
