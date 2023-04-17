<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminPetugas extends Model
{
     use HasFactory;

     // ! CUSTOM NAMA TABLE
     public $table = 'admin_petugas';

     // ! YANG TIDAK BOLEH DIISI
     protected $guarded = ['id_petugas'];

     public $timestamps = false;

     public function adminrole()
     {
          return $this->belongsTo(AdminRole::class, 'role_id', 'id_role');
          // ! return $this->belongsTo(AdminRole::class, 'nama foreign', 'nama id primary asal');
     }
}
