<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sentinel;
use App\Models\inventorisDetail;

class inventoris extends Model
{
    protected $table = 'inventoris';

    protected $fillable = [
        'satker_id', 'barang_id', 'satuan_id'
    ];

    public function satker()
    {
        return $this->hasOne(satuanKerja::class, 'id', 'satker_id');
    }

    public function barang()
    {
        return $this->hasOne(barang::class, 'id', 'barang_id');
    }

    public function satuan()
    {
        return $this->hasOne(satuanBarang::class, 'id', 'satuan_id');
    }

    public function details()
    {
        return $this->hasMany(inventorisDetail::class, 'inventoris_id', 'id');
    }

    public function masuk()
    {
        return $this->hasMany(inventorisDetail::class, 'inventoris_id', 'id');
    }

    public function keluar()
    {
        return $this->hasMany(inventorisKeluar::class, 'inventoris_id', 'id');
    }

    public function keluarDinkes()
    {
        $barang_id = $this->barang_id;
        $satuan_id = $this->satuan_id;

        $keluar = inventorisDetail::select('inventoris_detail.*')
                  ->join('inventoris','inventoris.id','=','inventoris_detail.inventoris_id')
                  ->where('inventoris_detail.status',1)
                  ->where('inventoris.satuan_id',$satuan_id)
                  ->where('inventoris.barang_id',$barang_id)
                  ->get();
        return $keluar;
    }

}
