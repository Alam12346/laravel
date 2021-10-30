<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembelianseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_barang' => 'motor',
                'nama_suplier' => "agus",
                'qty' => '1',
                'tgl' => '2021-10-29'],
            ['nama_barang' => 'mobil',
                'nama_suplier' => "mulyana",
                'qty' => '1',
                'tgl' => '2021-10-29'],
            ['nama_barang' => 'sepeda',
                'nama_suplier' => "nandi",
                'qty' => '1',
                'tgl' => '2021-10-29'],
            ['nama_barang' => 'becak',
                'nama_suplier' => "andi",
                'qty' => '1',
                'tgl' => '2021-10-29'],
            ['nama_barang' => 'perahu',
                'nama_suplier' => "ahmad",
                'qty' => '1',
                'tgl' => '2021-10-29']];
        DB::table('pembelian')->insert($data);

    }
}
