<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softskills', function (Blueprint $table) {
            $table->id();
            $table->string('skill');
            $table->unsignedBigInteger('ski_idcertificates');

            // FK Constraints
            $table->foreign('ski_idcertificates')->references('id')->on('certificates');
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
        Schema::dropIfExists('softskills');
    }
}
