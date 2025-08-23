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
            'role_id' => '0',
            'name' => 'vendor',
        ]);
        DB::table('roles')->insert([
            'role_id' => '1',
            'name' => 'super_admin',
        ]);
        DB::table('roles')->insert([
            'role_id' => '2',
            'name' => 'admin',
        ]);
        DB::table('roles')->insert([
            'role_id' => '3',
            'name' => 'verifikator',
        ]);
        DB::table('roles')->insert([
            'role_id' => '4',
            'name' => 'penguji',
        ]);
        DB::table('roles')->insert([
            'role_id' => '5',
            'name' => 'pembantu_penguji',
        ]);
    }
}
