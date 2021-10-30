<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class pembeliseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'edi',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'jalan atas awan no 1',
                'kode_pos' => '202110',
                'kota' => 'bandung',
                'tanggal_lahir' => '1998-01-1',
            ],
            ['nama' => 'alam',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'nataendah no 88',
                'kode_pos' => '201211',
                'kota' => 'bandung',
                'tanggal_lahir' => '2004-07-23',
            ],
            ['nama' => 'riski',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'nataasari blok j',
                'kode_pos' => '201212',
                'kota' => 'bandung',
                'tanggal_lahir' => '2000-02-20',
            ],
            ['nama' => 'rohman',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'nataasari blok a',
                'kode_pos' => '201213',
                'kota' => 'bandung',
                'tanggal_lahir' => '2001-02-20',
            ],
            ['nama' => 'aan',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'pangandaran ',
                'kode_pos' => '201220',
                'kota' => 'bandung',
                'tanggal_lahir' => '1997-07-20',
            ],

        ];
        DB::table('pembeli')->insert($data);

    }
}
