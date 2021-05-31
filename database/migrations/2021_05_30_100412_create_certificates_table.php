<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->integer('learning_hour');
            $table->string('level_kegiatan');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('pembimbing')->nullable();
            $table->string('sk')->nullable();
            $table->unsignedBigInteger('ctf_idevent');
            $table->timestamps();

            // FK Constraints
            $table->foreign('ctf_idevent')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
