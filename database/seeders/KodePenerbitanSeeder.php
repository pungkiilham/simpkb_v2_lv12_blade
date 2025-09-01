<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KodePenerbitanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '1',
            'keterangan'  => 'Daftar Baru',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '2',
            'keterangan'  => 'Perpanjangan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '3',
            'keterangan'  => 'Rusak',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '4',
            'keterangan'  => 'Hilang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '5',
            'keterangan'  => 'Numpang Uji',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('kodepenerbitan')->insert([
            'kodepenerbitan'  => '6',
            'keterangan'  => 'Mutasi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
