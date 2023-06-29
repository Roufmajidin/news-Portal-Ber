<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kategori', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('kategori_id');
            $table->String('judul_berita');
            $table->String('foto');
            $table->String('teaser');
            $table->String('status');
            $table->String('slug');
            $table->String('iklan');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kategori');
    }
};
