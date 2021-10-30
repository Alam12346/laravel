<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //    pengiriman data ke dalam  table di DB
         $this->call(postsseeder::class);
        $this->call(barangseeder::class);
        $this->call(pesananseeder::class);
        $this->call(pembeliseeder::class);
        $this->call(pembelianseeder::class);
        $this->call(suplierseeder::class);


    }
}
