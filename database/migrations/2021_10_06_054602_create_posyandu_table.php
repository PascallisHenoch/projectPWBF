<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosyanduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posyandu_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posyandu',20);
            $table->string('alamat_posyandu',50);
            $table->timestamps();
        });

        Schema::table('posyandu_table', function (Blueprint $table) {
            $table->foreignId('id_kelurahan')->constrained('kelurahan_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posyandu');
    }
}
