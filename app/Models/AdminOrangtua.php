<?php

namespace App\Models;

use App\Models\AdminBalita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminOrangtua extends Model
{
     use HasFactory;

     // ! CUSTOM NAMA TABLE
     public $table = 'admin_orangtua';

     // ! YANG TIDAK BOLEH DIISI
     protected $guarded = ['id_orangtua'];

     public function adminbalita()
     {
          return $this->hasMany(AdminBalita::class);
     }
}
