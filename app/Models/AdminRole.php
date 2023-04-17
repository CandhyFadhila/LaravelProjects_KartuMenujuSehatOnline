<?php

namespace App\Models;

use App\Models\AdminPetugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminRole extends Model
{
     use HasFactory;

     public $table = 'admin_role';

     protected $guarded = [
          'id_role'
     ];

     public $timestamps = false;

     public function adminpetugas()
     {
          return $this->hasOne(AdminPetugas::class);
     }
}
