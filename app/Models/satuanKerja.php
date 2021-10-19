<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class satuanKerja extends Model
{
    protected $table = 'satuan_kerja';

    protected $fillable = [
        'name', 'status', 'path_logo'
    ];

    public function inventorises()
    {
        return $this->hasMany(inventoris::class, 'satker_id', 'id');
    }
}
