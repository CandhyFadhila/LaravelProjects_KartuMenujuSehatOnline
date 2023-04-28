<?php

namespace App\Models;

use App\Models\AdminOrangtua;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminBalita extends Model
{
     use HasFactory;

     // ! CUSTOM NAMA TABLE
     public $table = 'admin_balita';

     // ! YANG TIDAK BOLEH DIISI
     protected $guarded = ['id_balita'];

     protected $primaryKey = 'id_balita';

     public function adminorangtua()
     {
          return $this->belongsTo(AdminOrangtua::class, 'orangtua_id', 'id_orangtua');
     }

     public function adminkms()
     {
          return $this->hasMany(AdminKMS::class, 'balita_id');
     }
}
