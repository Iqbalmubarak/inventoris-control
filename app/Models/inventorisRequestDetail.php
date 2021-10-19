<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventorisRequestDetail extends Model
{
    protected $table = 'inventoris_request_detail';

    protected $fillable = [
        'inventoris_request_id', 'barang_id', 'satuan_id', 'total', 'status', 'pesan'
    ];

    public function request()
    {
        return $this->hasOne(inventorisRequest::class, 'id', 'inventoris_request_id');
    }

    public function barang()
    {
        return $this->hasOne(barang::class, 'id', 'barang_id');
    }

    public function satuan()
    {
        return $this->hasOne(satuanBarang::class, 'id', 'satuan_id');
    }
}
