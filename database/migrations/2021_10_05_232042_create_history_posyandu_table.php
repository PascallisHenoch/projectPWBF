<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPosyanduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_posyandu', function (Blueprint $table) {
            $table->integer('id_history_posyandu');
            $table->integer('id_balita');
            $table->date('tgl_lahir_balita');
            $table->float('berat_badan_balita');
            $table->float('tinggi_badan_balita');
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
        Schema::dropIfExists('history_posyandu');
    }
}
