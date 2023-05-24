<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Admin_Dashboard_Controller extends Controller
{
     public function halaman_main()
     {
          return view('dashboard', [
               "halaman" => "Dashboard",
               "active" => "dashboard"
          ]);
     }

     public function show(){
          return view('monitoring', [
               "halaman" => "Monitoring All Data",
               "active" => "monitoring-data"
          ]);
     }

     public function calculateKMS(){
          
     }
}
