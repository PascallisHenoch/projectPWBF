<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balita_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_balita',50);
            $table->integer('nik_ortu');
            $table->string('nama_ortu',50);
            $table->date('tgllahir_balita');
            $table->string('jk_balita',1);
            $table->smallInteger('status');
            $table->timestamps();
        });

        Schema::table('balita_table', function (Blueprint $table) {
            $table->foreignId('id_posyandu')->constrained('posyandu_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balita');
    }
}
