<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class db_lowker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan')->insert([
            'nm_usaha' => 'PT.Maju Mundur Sejahtera',
            'alamat' => 'Jl. Jawa No.77 - Jember',
            'telp' => '123123',
            'username' => 'usaha',
            'password' => 'usaha',
        ]);

        DB::table('user')->insert([
            'nm_user' => 'Muhammad Saputra',
            'jk' => 'Laki - laki',
            'alamat' => 'Jl. Tawang Alun - Banyuwangi',
            'telp' => '456456',
            'username' => 'user',
            'password' => 'user',
        ]);

        DB::table('admin')->insert([
            'username' => 'admin',
            'password' => '123',
        ]);

        DB::table('detail_lowker')->insert([
            'id_usaha' => '1',
            'tlp' => '123123',
            'alamat' => 'Jl. Jawa No.77 - Jember',
            'info_loker' => 'dicari pegawai baru di bidang IT (Minimal dapat menjalankan PHP)',
        ]);

        DB::table('data_diri')->insert([
            'id_user' => '1',
            'pengenalan_diri' => 'Halo, nama saya Muhammad Saputra, saya bisa menjalankan PHP',
            'alamat' => 'Jl. Tawang Alun - Banyuwangi',
            'telp' => '456456',
        ]);
    }
}
