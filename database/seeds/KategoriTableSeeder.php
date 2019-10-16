<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            'name' => 'puji',
            'barang' => 'meja',
        ]);
    }
}
