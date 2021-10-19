<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventorisDetail extends Model
{
    protected $table = 'inventoris_detail';

    protected $fillable = [
        'inventoris_id', 'sumber_id', 'total', 'tanggal', 'status'
    ];

    public function sumber()
    {
        return $this->hasOne(inventorisSumber::class, 'id', 'sumber_id');
    }

    public function inventoris()
    {
        return $this->hasOne(inventoris::class, 'id', 'inventoris_id');
    }


}
