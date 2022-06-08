<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SewaProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $products = [
            ['123abc', 'AC Standing 3 PK', 1000, 100000, 1000000, 1000000, now()->toDateTimeString()],
            ['123abc', 'AC Standing 5 PK', 2000, 200000, 2000000, 2000000, now()->toDateTimeString()],
            ['123abcd', 'Misty Fan', 100, 10000, 100000, 100000, now()->toDateTimeString()],
        ];

        foreach ($products as $product) {
            $sewa = DB::table('sewa_produk')->insertGetId([
                'id' => Str::uuid(),
                'kategori_id' => $product[0],
                'nama' => $product[1],
                'tarif_harian' => $product[2],
                'tarif_mingguan' => $product[3],
                'tarif_bulanan' => $product[4],
                'tarif_tahunan' => $product[5],
                'created_at' => $product[6],
                'updated_at' => $product[6],
            ]);
        }
    }
}
