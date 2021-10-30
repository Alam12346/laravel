<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class barangseeder extends Seeder
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
            ['nama' => 'motor',
                'varian' => 'beat',
                'harga_beli' => '18000000',
                'harga_jual' => '11990000'],
            ['nama' => 'mobil',
                'varian' => 'pazero',
                'harga_beli' => '180000000',
                'harga_jual' => '100000000'],
            ['nama' => 'sepeda',
                'varian' => 'BMX',
                'harga_beli' => '1000000',
                'harga_jual' => '700000'],
            ['nama' => 'kursi roda',
                'varian' => 'masih baru',
                'harga_beli' => '1000000',
                'harga_jual' => '900000'],
            ['nama' => 'perahu',
                'varian' => 'nelayan',
                'harga_beli' => '1000000',
                'harga_jual' => '700000']];
        DB::table('barang')->insert($data);

    }
}
