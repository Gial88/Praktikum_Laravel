<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'id' => '1',
                'nama_barang' => 'Helm',
                'jumlah_barang' => 69,
                'deskripsi_barang' => 'helm ini sangat kuat dan nyaman'
            ],
            [
                'id' => '2',
                'nama_barang' => 'Sepatu',
                'jumlah_barang' => 13,
                'deskripsi_barang' => 'sepatu sangat hangat dan enak'
            ],
            [
                'id' => '3',
                'nama_barang' => 'Ikat Pinggang',
                'jumlah_barang' => 21,
                'deskripsi_barang' => 'Ikat pinggang ini sangat nyaman dan kuat dalam mengikat'
            ],
            [
                'id' => '4',
                'nama_barang' => 'Lemari',
                'jumlah_barang' => 2,
                'deskripsi_barang' => 'berpintu 2'
            ],
            [
                'id' => '5',
                'nama_barang' => 'Sofa',
                'jumlah_barang' => 5,
                'deskripsi_barang' => 'sofa ini sangat empuk dan nyaman'
            ],
        ];

        foreach ($barang as $brg) {
            Inventory::create([
                'nama_barang' => $brg["nama_barang"],
                'jumlah_barang' => $brg["jumlah_barang"],
                'deskripsi_barang' => $brg["deskripsi_barang"]
                ]);
        }
    }
}
