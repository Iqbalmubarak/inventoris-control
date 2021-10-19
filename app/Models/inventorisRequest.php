<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventorisRequest extends Model
{
    protected $table = 'inventoris_request';

    protected $fillable = [
        'satker_id', 'tanggal', 'status'
    ];

    public function satker()
    {
        return $this->hasOne(satuanKerja::class, 'id', 'satker_id');
    }

    public function details()
    {
        return $this->hasMany(inventorisRequestDetail::class, 'inventoris_request_id', 'id');
    }
}
