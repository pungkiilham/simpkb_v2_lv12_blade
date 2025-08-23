<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => '0',
            'name' => 'vendor',
        ]);
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'super_admin',
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'verifikator',
        ]);
        DB::table('roles')->insert([
            'id' => '4',
            'name' => 'penguji',
        ]);
        DB::table('roles')->insert([
            'id' => '5',
            'name' => 'pembantu_penguji',
        ]);
    }
}
