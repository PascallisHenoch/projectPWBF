<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelurahan',20);
            $table->timestamps();
        });
        
        Schema::table('kelurahan_table', function (Blueprint $table) {
            $table->foreignId('id_kelurahan')->constrained('kecamatan_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
