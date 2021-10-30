<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class suplierseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'agus',
                'alamat' => "kota bandung",
                'kode_pos' => '10987',
                'kota' => 'bandung'],
            ['nama' => 'mulyana',
                'alamat' => "kota bandung",
                'kode_pos' => '10987',
                'kota' => 'bandung'],
            ['nama' => 'nandi',
                'alamat' => "kota bandung",
                'kode_pos' => '10987',
                'kota' => 'bandung'],
            ['nama' => 'andi',
                'alamat' => "kota bandung",
                'kode_pos' => '10987',
                'kota' => 'bandung'],
            ['nama' => 'ahmad',
                'alamat' => "kota bandung",
                'kode_pos' => '10987',
                'kota' => 'bandung']];
        DB::table('suplier')->insert($data);

    }
}
