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
          Schema::create('admin_orangtua', function (Blueprint $table) {
               $table->id('id_orangtua');
               $table->string('nama_ibu');
               $table->string('nik_ibu', 25);
               $table->text('alamat');
               $table->string('tgl_lahir');
               $table->string('pekerjaan');
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
          Schema::dropIfExists('admin_orangtua');
     }
};
