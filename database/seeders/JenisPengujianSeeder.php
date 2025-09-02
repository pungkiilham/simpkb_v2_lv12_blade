<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisPengujianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jenis_pengujians')->insert([
            'name'  => 'Baru',
            'loket_id'  => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Berkala',
            'loket_id'  => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Numpang Masuk',
            'loket_id'  => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Mutasi Masuk',
            'loket_id'  => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Numpang Keluar',
            'loket_id'  => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Mutasi Keluar',
            'loket_id'  => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Ubah Sifat',
            'loket_id'  => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_pengujians')->insert([
            'name'  => 'Ubah Bentuk',
            'loket_id'  => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
