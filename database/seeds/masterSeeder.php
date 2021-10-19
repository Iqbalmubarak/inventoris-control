<?php

use Illuminate\Database\Seeder;
use App\Models\barang;
use App\Models\satuanBarang as satbar;
use App\Models\inventorisSumber as insum;

class masterSeeder extends Seeder
{
    public function run()
    {
        $barangs = [
          ['name' => 'Termometer gun'],
          ['name' => 'Baju APD Coverall'],
          ['name' => 'Baju APD Hazmat'],
          ['name' => 'Baju APD Gown'],
          ['name' => 'Appron'],
          ['name' => 'Baju Kerja'],
          ['name' => 'Masker N95']
        ];

        foreach ($barangs as $barang) {
          barang::create($barang);
        }

        $satbars = [
          ['name' => 'Pieces'],
          ['name' => 'Box/50'],
          ['name' => 'Box/100'],
          ['name' => 'Box/100 psg'],
          ['name' => 'Box/100 kaplet'],
          ['name' => 'Btl/100ml'],
          ['name' => 'Btl/1L'],
          ['name' => 'Unit'],
          ['name' => 'Set']
        ];

        foreach ($satbars as $satbar) {
          satbar::create($satbar);
        }

        $insums = [
          ['name' => 'Dinas Kesehatan'],
          ['name' => 'Peraturan Daerah'],
          ['name' => 'Budha Tzu Chi'],
          ['name' => 'Badan Penanggulangan Bencana Daerah'],
          ['name' => 'Fakultas Teknologi Informasi'],
        ];

        foreach ($insums as $insum) {
          insum::create($insum);
        }
    }
}
