<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairmansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairmans', function (Blueprint $table) {
            $table->id();
            $table->year('tahun_jabatan');
            $table->unsignedBigInteger('c_idormawa');
            $table->string('c_nim');
            // FK Constraints
            $table->foreign('c_idormawa')->references('id')->on('organizations');
            $table->foreign('c_nim')->references('nim')->on('users');
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
        Schema::dropIfExists('chairmans');
    }
}
