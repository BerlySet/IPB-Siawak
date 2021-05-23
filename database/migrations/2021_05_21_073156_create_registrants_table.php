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
            $table->unsignedBigInteger('divisi_1');
            $table->string('alasan_divisi_1');
            $table->unsignedBigInteger('divisi_2');
            $table->string('alasan_divisi_2');
            $table->boolean('status')->nullable();
            $table->unsignedBigInteger('reg_idrec');
            $table->string('reg_nim');

            // FK Constraints
            $table->foreign('divisi_1')->references('id')->on('divisions');
            $table->foreign('divisi_2')->references('id')->on('divisions');
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
