<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'name'
    ];

    public function inventoris()
    {
        return $this->hasMany(inventoris::class);
    }
}
