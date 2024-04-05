<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'id_mhs' => '1',
            'nama_mhs' => 'Ananda Rizky Febriyana',
            'alamat' => 'Jember',
            'ttl' => '2003-02-11',
            'status' => 'aktif'
        ]);
    }
}
