<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminAuthSeeders extends Seeder
{
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
          DB::table('users')->insert([
               'name' => 'admin',
               'email' => 'email_admin@gmail.com',
               'password' => Hash::make('admin')
          ]);
     }
}
