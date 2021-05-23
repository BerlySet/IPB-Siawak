<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->year('tahun_jabatan');
            $table->boolean('status');
            $table->unsignedBigInteger('s_idevent');
            $table->unsignedBigInteger('s_iddivisi');
            $table->string('s_nim');
            // FK Constraints
            $table->foreign('s_idevent')->references('id')->on('events');
            $table->foreign('s_iddivisi')->references('id')->on('divisions');
            $table->foreign('s_nim')->references('nim')->on('users');
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
        Schema::dropIfExists('staff');
    }
}
