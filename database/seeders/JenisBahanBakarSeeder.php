<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBahanBakarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_bahan_bakars')->insert([
            'name'  => 'Bensin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_bahan_bakars')->insert([
            'name'  => 'Solar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_bahan_bakars')->insert([
            'name'  => 'Gas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
