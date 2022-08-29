<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->string('gol_id')->after("nama");
            $table->foreign('gol_id')->references('kode')->on('golongans')->onDelete("cascade");
            $table->unsignedBigInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDelete("cascade");

            $table->unsignedBigInteger('unit_kerja_id');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerjas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pegawais', function (Blueprint $table) {
            $table->dropForeign(["jabatan_id"]);
            $table->dropColumn("jabatan_id");
            $table->dropForeign(["unit_kerja_id"]);
            $table->dropColumn("unit_kerja_id");
            $table->dropForeign(["gol_id"]);
            $table->dropColumn("gol_id");
        });
    }
};
