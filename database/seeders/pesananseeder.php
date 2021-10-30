<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class pesananseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['nama_pelanggan' => 'edi',
                'nama_barang' => 'motor',
                'qty' => '1',
                'tgl_pesan' => '2021-10-29'],
            ['nama_pelanggan' => 'alam',
                'nama_barang' => 'mobil',
                'qty' => '3',
                'tgl_pesan' => '2021-10-29'],
            ['nama_pelanggan' => 'riski',
                'nama_barang' => 'sepeda',
                'qty' => '1',
                'tgl_pesan' => '2021-10-29'],
            ['nama_pelanggan' => 'rohman',
                'nama_barang' => 'becak',
                'qty' => '1',
                'tgl_pesan' => '2021-10-29'],
            ['nama_pelanggan' => 'aan',
                'nama_barang' => 'perahu',
                'qty' => '1',
                'tgl_pesan' => '2021-10-29']];
        DB::table('pesanan')->insert($data);

    }
}
