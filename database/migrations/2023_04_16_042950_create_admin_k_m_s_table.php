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
          Schema::create('admin_kms', function (Blueprint $table) {
               $table->id('id_kms');

               // ! ID ANAK
               $table->unsignedBigInteger('balita_id');

               $table->string('umur_sekarang', 5)->nullable();

               $table->string('keterangan_penimbangan', 50)->nullable();

               $table->string('bb_sekarang', 15)->nullable();
               $table->string('pb_sekarang', 15)->nullable();
               // ! BB/U
               $table->string('sd_bb_u', 15)->nullable();
               $table->string('kategori_bb_u')->nullable();

               // ! pB/U
               $table->string('sd_pb_u', 15)->nullable();
               $table->string('kategori_pb_u')->nullable();
               
               // ! BB/pB
               $table->string('sd_bb_pb', 15)->nullable();
               $table->string('kategori_bb_pb')->nullable();
               
               $table->string('tgl_timbang')->nullable();
               $table->timestamps();

               $table->string('vaksin_1')->nullable();
               $table->string('vaksin_2')->nullable();
               $table->string('vaksin_3')->nullable();
               $table->string('vaksin_4')->nullable();
               $table->string('vaksin_5')->nullable();
               $table->string('vaksin_6')->nullable();
               $table->string('vaksin_7')->nullable();
               $table->string('vaksin_8')->nullable();
               $table->string('vaksin_9')->nullable();
               $table->string('vaksin_10')->nullable();
               $table->string('vaksin_11')->nullable();
               $table->string('vaksin_12')->nullable();
               $table->string('vaksin_13')->nullable();
               $table->string('vaksin_14')->nullable();
               $table->string('vaksin_15')->nullable();
               $table->string('vaksin_16')->nullable();
               $table->string('vaksin_17')->nullable();
               $table->string('vaksin_18')->nullable();
               $table->string('vaksin_19')->nullable();
               $table->string('vaksin_20')->nullable();
               $table->string('vaksin_21')->nullable();
               $table->string('vaksin_22')->nullable();
               $table->string('vaksin_23')->nullable();
               $table->string('vaksin_24')->nullable();
               $table->string('vaksin_25')->nullable();
               $table->string('vaksin_26')->nullable();
               $table->string('vaksin_27')->nullable();
               // $table->string('tgl_vaksin_1')->nullable();
               // $table->string('tgl_vaksin_2')->nullable();
               // $table->string('tgl_vaksin_3')->nullable();
               // $table->string('tgl_vaksin_4')->nullable();
               // $table->string('tgl_vaksin_5')->nullable();
               // $table->string('tgl_vaksin_6')->nullable();
               // $table->string('tgl_vaksin_7')->nullable();
               // $table->string('tgl_vaksin_8')->nullable();
               // $table->string('tgl_vaksin_9')->nullable();
               // $table->string('tgl_vaksin_10')->nullable();
               // $table->string('tgl_vaksin_11')->nullable();
               // $table->string('tgl_vaksin_12')->nullable();
               // $table->string('tgl_vaksin_13')->nullable();
               // $table->string('tgl_vaksin_14')->nullable();
               // $table->string('tgl_vaksin_15')->nullable();
               // $table->string('tgl_vaksin_16')->nullable();
               // $table->string('tgl_vaksin_17')->nullable();
               // $table->string('tgl_vaksin_18')->nullable();
               // $table->string('tgl_vaksin_19')->nullable();
               
          });

          Schema::table('admin_kms', function (Blueprint $table) {
               $table->foreign('balita_id')->references('id_balita')->on('admin_balita')->onDelete('cascade')->onUpdate('cascade');
          });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
          Schema::dropIfExists('admin_kms');
     }
};
