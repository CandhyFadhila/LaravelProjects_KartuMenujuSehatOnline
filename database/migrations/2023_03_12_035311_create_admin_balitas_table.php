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
          Schema::create('admin_balita', function (Blueprint $table) {
               $table->id('id_balita');
               $table->unsignedBigInteger('orangtua_id');
               $table->string('nik_balita', 25);
               $table->string('nama_balita');
               $table->string('tgl_lahir');
               $table->string('jenis_kelamin');
               $table->string('bb_lahir')->nullable();
               $table->string('pb_lahir')->nullable();
               $table->timestamps();
          });

          // ! BUAT FOREIGN KEY
          Schema::table('admin_balita', function (Blueprint $table) {
               $table->foreign('orangtua_id')->references('id_orangtua')->on('admin_orangtua')->onDelete('cascade')->onUpdate('cascade');
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::dropIfExists('admin_balita');
     }
};
