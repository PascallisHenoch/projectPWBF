<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('user_role_table', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('user_table');
            $table->foreignId('id_role')->constrained('role_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_role');
    }
}
