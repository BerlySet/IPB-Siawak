<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('divisi_1');
            $table->string('alasan_divisi_1');
            $table->string('divisi_2');
            $table->string('alasan_divisi_2');
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('reg_idrec');
            $table->string('reg_nim');

            // FK Constraints
            $table->foreign('reg_idrec')->references('id')->on('recruitments');
            $table->foreign('reg_nim')->references('nim')->on('users');
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
        Schema::dropIfExists('registrants');
    }
}
