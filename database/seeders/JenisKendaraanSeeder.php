<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JenisKendaraan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Penumpang Sedan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Penumpang Bukan Sedan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Kecil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Sedang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Besar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Maxi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Gandeng',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Tempel',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Bus Tingkat',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Barang Bak Terbuka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Barang Bak Tertutup',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Tangki',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Penarik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Gandeng Bak Terbuka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Gandeng Bak Tertutup',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Mobil Gandeng Tangki',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Tempelan Bak Terbuka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Tempelan Bak Tertutup',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Tempelan Kaki',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Bermotor Roda Tiga Angkutan Barang Bak Muatan Terbuka',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Bermotor Roda Tiga Angkutan Barang Bak Muatan Tertutup',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Bermotor Roda Tiga Angkutan Penumpang',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kereta Bermotor Roda Tiga Angkutan Barang Tangki',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('jenis_kendaraans')->insert([
            'name'  => 'Kendaraan Khusus',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
