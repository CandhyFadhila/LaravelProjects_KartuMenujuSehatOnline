<?php

namespace App\Http\Controllers;

use App\Models\AdminKMS;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Admin_Dashboard_Controller extends Controller
{
     public function halaman_main()
     {
          return view('master.main.main_page.dashboard', [
               "halaman" => "Dashboard",
               "active" => "dashboard"
          ]);
     }

     public function show()
     {
          $GiziBuruk = AdminKMS::where('kategori_bb_pb', 'Gizi Buruk')->count();
          $GiziKurang = AdminKMS::where('kategori_bb_pb', 'Gizi Kurang')->count();
          $GiziBaik = AdminKMS::where('kategori_bb_pb', 'Gizi Baik')->count();
          $ResikoGiziLebih = AdminKMS::where('kategori_bb_pb', 'Beresiko Gizi Lebih')->count();
          $GiziLebih = AdminKMS::where('kategori_bb_pb', 'Gizi Lebih')->count();
          $Obesitas = AdminKMS::where('kategori_bb_pb', 'Obesitas')->count();

          return view('master.main.main_page.monitoring', [
               "halaman" => "Monitoring All Data",
               "active" => "monitoring-data",

               "Gizi_Buruk" => $GiziBuruk,
               "Gizi_Kurang" => $GiziKurang,
               "Gizi_Baik" => $GiziBaik,
               "Resiko_Gizi_Lebih" => $ResikoGiziLebih,
               "Gizi_Lebih" => $GiziLebih,
               "Obesitas" => $Obesitas
          ]);
     }
}
