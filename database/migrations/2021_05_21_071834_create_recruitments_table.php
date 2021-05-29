<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->longText('kriteria_pendaftar');
            $table->date('start_date'); //TO DO make default current date
            $table->date('end_date');
            $table->boolean('is_canceled')->default(false);
            $table->unsignedBigInteger('rec_idormawa');
            $table->unsignedBigInteger('rec_idevent');

            // FK Constraints
            $table->foreign('rec_idormawa')->references('id')->on('organizations');
            $table->foreign('rec_idevent')->references('id')->on('events');
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
        Schema::dropIfExists('recruitments');
    }
}
