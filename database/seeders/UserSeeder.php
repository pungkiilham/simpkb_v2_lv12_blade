<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Estro Hutama',
            'username' => 'vendor',
            'password' => 'harusikut',
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'name' => 'KAUPT',
            'username' => 'kaupt',
            'password' => 'lapordulu',
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'username' => 'admin1',
            'password' => 'jalanbiru',
            'role' => '2',
        ]);
        DB::table('users')->insert([
            'name' => 'Verifikator 1',
            'username' => 'verifikator1',
            'password' => 'sumukpol',
            'role' => '3',
        ]);
        DB::table('users')->insert([
            'name' => 'Penguji 1',
            'username' => 'penguji1',
            'password' => 'kinemon',
            'role' => '4',
        ]);
        DB::table('users')->insert([
            'name' => 'Pembantu Penguji 1',
            'username' => 'helper',
            'password' => 'kentang',
            'role' => '5',
        ]);
    }
}
