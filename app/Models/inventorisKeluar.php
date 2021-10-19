<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventorisKeluar extends Model
{
      protected $table = 'inventoris_keluar';

      protected $fillable = [
          'inventoris_id', 'total', 'tanggal', 'keterangan'
      ];

      public function inventoris()
      {
          return $this->hasOne(inventoris::class, 'id', 'inventoris_id');
      }
}
