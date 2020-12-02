<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToPruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prueba', function (Blueprint $table) {
            $table->string('nombre', 50)->nullable();
            $table->integer('votos')->unsigned()->nullable();
            $table->string('email')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prueba', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('votos');
            $table->dropColumn('email');
        });
    }
}
