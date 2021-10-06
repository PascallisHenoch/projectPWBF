<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_table', function (Blueprint $table) {
            $table->id();
            $table->string('username',50);
            $table->char('password',8);
            $table->timestamps();
        });

        Schema::table('user_table', function (Blueprint $table) {
            $table->foreignId('id_history_posyandu')->constrained('history_posyandu_table');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
