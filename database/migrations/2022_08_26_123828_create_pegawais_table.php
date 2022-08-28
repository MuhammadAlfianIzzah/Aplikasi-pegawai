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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id("nip");
            $table->string("npwp");
            $table->string("nama");
            $table->string("tempat_lahir");
            $table->longText("alamat");
            $table->date("tgl_lahir");
            $table->enum("jenis_kelamin", ["l", "p"]);
            $table->string("agama");
            $table->string("no_hp");
            $table->string("eselon");
            $table->string("foto");
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
        Schema::dropIfExists('pegawais');
    }
};
