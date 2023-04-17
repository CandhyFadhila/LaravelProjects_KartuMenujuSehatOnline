<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKMS extends Model
{
     use HasFactory;

     public $table = 'admin_kms';

     protected $guarded = ['id_kms'];

     protected $primaryKey = 'id_kms';
     
     public function adminbalita()
     {
          return $this->belongsTo(AdminBalita::class, 'balita_id', 'id_balita');
     }
}
