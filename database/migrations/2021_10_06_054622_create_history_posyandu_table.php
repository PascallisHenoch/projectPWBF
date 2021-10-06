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
        Schema::create('history_posyandu_table', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_posyandu');
            $table->float('berat_badan_balita');
            $table->float('tinggi_badan_balita');
            $table->timestamps();
        });

        Schema::table('history_posyandu_table', function (Blueprint $table) {
            $table->foreignId('id_history_posyandu')->constrained('balita_table');
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
