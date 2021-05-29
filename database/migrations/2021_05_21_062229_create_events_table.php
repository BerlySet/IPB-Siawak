<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('nama_event');
            $table->enum('kategori', ['Kepengurusan', 'Kepanitiaan']);
            $table->enum('tahun_akademik', ['2021/2022 Semester Genap', '2021/2022 Semester Ganjil', '2020/2021 Semester Genap', '2020/2021 Semester Ganjil', '2019/2020 Semester Genap', '2019/2020 Semester Ganjil']);
            $table->unsignedBigInteger('e_idormawa');

            // FK Constraints
            $table->foreign('e_idormawa')->references('id')->on('organizations');
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
        Schema::dropIfExists('events');
    }
}
