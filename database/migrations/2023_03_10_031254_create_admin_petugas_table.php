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
          Schema::create('admin_petugas', function (Blueprint $table) {
               $table->id('id_petugas');
               $table->string('nama_petugas');
               $table->text('alamat');
               $table->unsignedBigInteger('role_id');
               $table->timestamps();
          });

          // ! BUAT FOREIGN KEY
          Schema::table('admin_petugas', function (Blueprint $table) {
               $table->foreign('role_id')->references('id_role')->on('admin_role')->onDelete('cascade')->onUpdate('cascade');
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::dropIfExists('admin_petugas');
     }
};
