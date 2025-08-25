<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class KendaraanSeeder extends Seeder
{
    /**
     * Jalankan seed database.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Menggunakan lokal Indonesia untuk data yang lebih relevan
        $numberOfVehicles = 500; // Jumlah data kendaraan yang ingin Anda buat

        // Mapping sederhana untuk ID ke nama (jika Anda punya tabel master, ini bisa di-query)
        // $jenisPemilik = ['Perorangan', 'Badan Usaha', 'Pemerintah'];
        $jenisIdentitas = ['KTP', 'SIM', 'NPWP'];
        $jenisKelamin = ['Laki-laki', 'Perempuan'];
        $jenisKendaraan = ['Penumpang', 'Barang', 'Khusus'];
        $statusKendaraan = ['Umum', 'Tidak Umum'];
        $merkPabrik = ['Toyota', 'Honda', 'Mitsubishi', 'Suzuki', 'Daihatsu', 'Hino', 'Isuzu', 'Mercedes-Benz'];
        $tipeKendaraan = ['Sedan', 'SUV', 'MPV', 'Truck', 'Bus', 'Pick Up'];
        $namaKaroseri = ['Adiputro', 'Laksana', 'Tentrem', 'New Armada', 'Piala Mas'];
        $warna = ['Merah', 'Biru', 'Hijau', 'Hitam', 'Putih', 'Abu-abu'];
        $jenisKaroseri = ['Box', 'Bak Terbuka', 'Tangki', 'Bus', 'Blind Van', 'Crane'];
        $bahanUtama = ['Baja', 'Aluminium', 'Fiberglass'];
        $kelasJalan = ['Kelas I', 'Kelas II', 'Kelas III'];
        $konfigurasiSumbu = ['1.1', '1.2', '1.2.1', '1.2.2'];


        for ($i = 0; $i < $numberOfVehicles; $i++) {
            $kendaraanId = (string) Str::uuid(); // Membuat UUID untuk ID kendaraan

            // Data untuk tabel 'kendaraans'
            DB::table('kendaraans')->insert([
                'id' => $kendaraanId,
                'nomor_uji' => $faker->unique()->randomNumber(5, true) . Str::upper(Str::random(2)),
                'nomor_kendaraan' => $faker->regexify('[A-Z]{1,2} [0-9]{1,4} [A-Z]{1,3}'),
                // 'jenis_pemilik_id' => $faker->randomElement([Str::uuid(), Str::uuid(), Str::uuid()]), // Dummy UUID
                'nama_pemilik' => $faker->name,
                'jenis_identitas' => $faker->randomElement($jenisIdentitas),
                'nomor_identitas' => $faker->numerify('################'), // 16 digit KTP/NPWP
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2000-01-01'),
                'jenis_kelamin' => $faker->randomElement($jenisKelamin),
                'alamat_pemilik' => $faker->address,
                'rt' => $faker->numerify('###'),
                'rw' => $faker->numerify('###'),
                'kelurahan' => $faker->citySuffix,
                'kecamatan' => $faker->city,
                'kabupaten' => $faker->city,
                'provinsi' => $faker->state,
                'awal_pakai' => $faker->date('Y-m-d', '2010-01-01'),
                'tahun' => $faker->year('now'),
                'nomor_mesin' => $faker->unique()->regexify('[A-Z0-9]{10}'),
                'nomor_rangka' => $faker->unique()->regexify('[A-Z0-9]{17}'),
                'nomor_wa' => $faker->phoneNumber,
                // 'jenis_kendaraan_id' => $faker->randomElement([Str::uuid(), Str::uuid(), Str::uuid()]), // Dummy UUID
                'keterangan_jenis_kendaraan' => $faker->randomElement($jenisKendaraan),
                'status' => $faker->randomElement($statusKendaraan),
                'merk' => $faker->randomElement($merkPabrik),
                'tipe' => $faker->randomElement($tipeKendaraan),
                'nama_importir' => $faker->company,
                'tanggal_uji' => $faker->date('Y-m-d', 'now'),
                'tanggal_mati_uji' => $faker->date('Y-m-d', '+1 year'),
                'active' => $faker->boolean(90), // 90% aktif
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Data untuk tabel 'sertifikasi_kendaraans'
            DB::table('sertifikasi_kendaraans')->insert([
                'id' => (string) Str::uuid(),
                'kendaraan_id' => $kendaraanId,
                'sertifikat_registrasi_nomor' => $faker->unique()->randomNumber(9, true),
                'sertifikat_registrasi_penerbit' => $faker->company,
                'sertifikat_registrasi_tanggal' => $faker->date('Y-m-d', '-1 year'),
                'sertifikat_uji_nomor' => $faker->unique()->randomNumber(9, true),
                'sertifikat_uji_penerbit' => $faker->company,
                'sertifikat_uji_tanggal' => $faker->date('Y-m-d', '-6 months'),
                'sertifikat_rancang_nomor' => $faker->unique()->randomNumber(9, true),
                'sertifikat_rancang_penerbit' => $faker->company,
                'sertifikat_rancang_tanggal' => $faker->date('Y-m-d', '-2 years'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Data untuk tabel 'spesifikasi_kendaraans'
            DB::table('spesifikasi_kendaraans')->insert([
                'id' => (string) Str::uuid(),
                'kendaraan_id' => $kendaraanId,
                'kubikasi_mesin' => $faker->numberBetween(1000, 5000),
                'daya_mesin' => $faker->numberBetween(50, 300),
                // 'jenis_bahan_bakar_id' => $faker->randomElement([Str::uuid(), Str::uuid()]), // Dummy UUID
                'dimensi_panjang' => $faker->numberBetween(3000, 12000),
                'dimensi_lebar' => $faker->numberBetween(1500, 3000),
                'dimensi_tinggi' => $faker->numberBetween(1500, 4000),
                'bak_panjang' => $faker->numberBetween(2000, 9000),
                'bak_lebar' => $faker->numberBetween(1500, 2500),
                'bak_tinggi' => $faker->numberBetween(500, 2500),
                'nama_karoseri' => $faker->randomElement($namaKaroseri),
                'warna_kabin' => $faker->randomElement($warna),
                'warna_bak' => $faker->randomElement($warna),
                'roh' => $faker->numberBetween(500, 2000),
                'foh' => $faker->numberBetween(500, 2000),
                'jarak_terendah' => $faker->numberBetween(150, 400),
                'jenis_karoseri' => $faker->randomElement($jenisKaroseri),
                'bahan_utama' => $faker->randomElement($bahanUtama),
                'tempat_duduk' => $faker->numberBetween(2, 60),
                'kapasitas_berdiri' => $faker->numberBetween(0, 40),
                'berat_kosong' => $faker->numberBetween(1000, 10000),
                'jumlah_berat_diizinkan' => $faker->numberBetween(5000, 20000),
                'muatan_sumbu_terberat' => $faker->numberBetween(1000, 10000),
                'jumlah_berat_kombinasi_diizinkan' => $faker->numberBetween(10000, 40000),
                'daya_angkut_barang' => $faker->numberBetween(1000, 15000),
                'kelas_jalan' => $faker->randomElement($kelasJalan),
                'mst' => $faker->numberBetween(1000, 10000),
                'ukuran_qr' => $faker->word,
                'ukuran_p1' => $faker->word,
                'ukuran_p2' => $faker->word,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Data untuk tabel 'uraian_sumbu_kendaraans'
            DB::table('uraian_sumbu_kendaraans')->insert([
                'id' => (string) Str::uuid(),
                'kendaraan_id' => $kendaraanId,
                'konfigurasi_sumbu' => $faker->randomElement($konfigurasiSumbu),
                'konfigurasi_sumbu_1' => $faker->randomDigitNotNull(),
                'konfigurasi_sumbu_2' => $faker->optional(0.7)->randomDigitNotNull(), // 70% kemungkinan ada
                'konfigurasi_sumbu_3' => $faker->optional(0.5)->randomDigitNotNull(),
                'konfigurasi_sumbu_4' => $faker->optional(0.3)->randomDigitNotNull(),
                'konfigurasi_sumbu_5' => $faker->optional(0.2)->randomDigitNotNull(),
                'berat_sumbu_1' => $faker->numberBetween(1000, 5000),
                'berat_sumbu_2' => $faker->optional(0.7)->numberBetween(1000, 5000),
                'berat_sumbu_3' => $faker->optional(0.5)->numberBetween(1000, 5000),
                'berat_sumbu_4' => $faker->optional(0.3)->numberBetween(1000, 5000),
                'berat_sumbu_5' => $faker->optional(0.2)->numberBetween(1000, 5000),
                'berat_sumbu_6' => $faker->optional(0.1)->numberBetween(1000, 5000),
                'pemakaian_sumbu_1' => $faker->word,
                'pemakaian_sumbu_2' => $faker->optional(0.7)->word,
                'pemakaian_sumbu_3' => $faker->optional(0.5)->word,
                'pemakaian_sumbu_4' => $faker->optional(0.3)->word,
                'pemakaian_sumbu_5' => $faker->optional(0.2)->word,
                'pemakaian_sumbu_6' => $faker->optional(0.1)->word,
                'daya_sumbu_1' => $faker->numberBetween(1000, 5000),
                'daya_sumbu_2' => $faker->optional(0.7)->numberBetween(1000, 5000),
                'daya_sumbu_3' => $faker->optional(0.5)->numberBetween(1000, 5000),
                'daya_sumbu_4' => $faker->optional(0.3)->numberBetween(1000, 5000),
                'daya_sumbu_5' => $faker->optional(0.2)->numberBetween(1000, 5000),
                'daya_sumbu_6' => $faker->optional(0.1)->numberBetween(1000, 5000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
    // {
    //     // Generate UUIDs for related tables
    //     $kendaraanId = Str::uuid()->toString();
    //     $sertifikasiId = Str::uuid()->toString();
    //     $spesifikasiId = Str::uuid()->toString();
    //     $uraianSumbuId = Str::uuid()->toString();

    //     // 1. Insert into 'kendaraans' table
    //     DB::table('kendaraans')->insert([
    //         'id' => $kendaraanId,
    //         'nomor_uji' => 'UJI' . Str::random(7),
    //         'nomor_kendaraan' => 'N' . Str::random(7),
    //         'jenis_pemilik_id' => 1, // Example: 1 for Perorangan
    //         'nama_pemilik' => 'Budi Santoso',
    //         'jenis_identitas' => 'KTP',
    //         'nomor_identitas' => '357301' . rand(100000000000, 999999999999),
    //         'tempat_lahir' => 'Surabaya',
    //         'tanggal_lahir' => Carbon::parse('1985-05-15'),
    //         'jenis_kelamin' => 'Laki-Laki',
    //         'alamat_pemilik' => 'Jl. Merdeka No. 10',
    //         'rt' => '001',
    //         'rw' => '002',
    //         'kelurahan' => 'Waras',
    //         'kecamatan' => 'Sukorejo',
    //         'kabupaten' => 'Malang',
    //         'provinsi' => 'Jawa Timur',
    //         'awal_pakai' => '2020-01-01',
    //         'tahun' => '2020',
    //         'nomor_mesin' => 'MESIN' . Str::random(10),
    //         'nomor_rangka' => 'RANGKA' . Str::random(10),
    //         'nomor_wa' => '0812' . rand(10000000, 99999999),
    //         'jenis_kendaraan_id' => 1, // Example: 1 for PICK UP
    //         'keterangan_jenis_kendaraan' => 'PICK UP BAK TERBUKA',
    //         'status' => 'Aktif',
    //         'merk' => 'ISUZU',
    //         'tipe' => 'PHR54U-CAAIN1',
    //         'nama_importir' => 'PT. Isuzu Astra Motor Indonesia',
    //         'tanggal_uji' => Carbon::now()->subMonths(6),
    //         'tanggal_mati_uji' => Carbon::now()->addMonths(6),
    //         'active' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // 2. Insert into 'sertifikasi_kendaraans' table
    //     DB::table('sertifikasi_kendaraans')->insert([
    //         'id' => $sertifikasiId,
    //         'kendaraan_id' => $kendaraanId,
    //         'sertifikat_registrasi_nomor' => 'SRUT' . Str::random(8),
    //         'sertifikat_registrasi_penerbit' => 'Kemenhub',
    //         'sertifikat_registrasi_tanggal' => Carbon::parse('2019-12-01'),
    //         'sertifikat_uji_nomor' => 'SUTK' . Str::random(8),
    //         'sertifikat_uji_penerbit' => 'Balai Uji',
    //         'sertifikat_uji_tanggal' => Carbon::parse('2020-01-10'),
    //         'sertifikat_rancang_nomor' => 'SRB' . Str::random(8),
    //         'sertifikat_rancang_penerbit' => 'Desain Kendaraan',
    //         'sertifikat_rancang_tanggal' => Carbon::parse('2019-11-20'),
    //         'active' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // 3. Insert into 'spesifikasi_kendaraans' table
    //     DB::table('spesifikasi_kendaraans')->insert([
    //         'id' => $spesifikasiId,
    //         'kendaraan_id' => $kendaraanId,
    //         'kubikasi_mesin' => '2499', // As string based on your Schema::create
    //         'daya_mesin' => '58.84 kW',
    //         'jenis_bahan_bakar_id' => 2, // Example: 2 for Solar
    //         'dimensi_panjang' => '4495',
    //         'dimensi_lebar' => '1745',
    //         'dimensi_tinggi' => '1700',
    //         'bak_panjang' => '2700',
    //         'bak_lebar' => '1600',
    //         'bak_tinggi' => '400',
    //         'nama_karoseri' => 'BAK TERBUKA',
    //         'warna_kabin' => 'PUTIH',
    //         'warna_bak' => 'HITAM',
    //         'roh' => '1265',
    //         'foh' => '1005',
    //         'jarak_terendah' => '185',
    //         'jenis_karoseri' => 'BAK TERBUKA',
    //         'bahan_utama' => 'BESI PLAT',
    //         'tempat_duduk' => '3', // As string based on your Schema::create
    //         'kapasitas_berdiri' => '0', // As string based on your Schema::create
    //         'berat_kosong' => 1470.00, // Decimal
    //         'jumlah_berat_diizinkan' => 2950.00, // Decimal
    //         'muatan_sumbu_terberat' => 1680.00, // Decimal
    //         'jumlah_berat_kombinasi_diizinkan' => 5000.00, // Decimal
    //         'daya_angkut_barang' => 1300.00, // Decimal
    //         'kelas_jalan' => 'III',
    //         'mst' => '3000',
    //         'ukuran_qr' => '195R14C8PR',
    //         'ukuran_p1' => '2.0',
    //         'ukuran_p2' => '3.0',
    //         'active' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);

    //     // 4. Insert into 'uraian_sumbu_kendaraans' table
    //     DB::table('uraian_sumbu_kendaraans')->insert([
    //         'id' => $uraianSumbuId,
    //         'kendaraan_id' => $kendaraanId,
    //         'konfigurasi_sumbu' => '2-1',
    //         'konfigurasi_sumbu_1' => 2700, // Jarak sumbu I-II
    //         'konfigurasi_sumbu_2' => 0, // Tidak ada sumbu ketiga
    //         'konfigurasi_sumbu_3' => 0,
    //         'konfigurasi_sumbu_4' => 0,
    //         'konfigurasi_sumbu_5' => 0,
    //         'berat_sumbu_1' => 1220,
    //         'berat_sumbu_2' => 1730,
    //         'berat_sumbu_3' => 0,
    //         'berat_sumbu_4' => 0,
    //         'berat_sumbu_5' => 0,
    //         'berat_sumbu_6' => 0,
    //         'pemakaian_sumbu_1' => '195R14C8PR',
    //         'pemakaian_sumbu_2' => '195R14C8PR',
    //         'pemakaian_sumbu_3' => '',
    //         'pemakaian_sumbu_4' => '',
    //         'pemakaian_sumbu_5' => '',
    //         'pemakaian_sumbu_6' => '',
    //         'daya_sumbu_1' => 1220,
    //         'daya_sumbu_2' => 1730,
    //         'daya_sumbu_3' => 0,
    //         'daya_sumbu_4' => 0,
    //         'daya_sumbu_5' => 0,
    //         'daya_sumbu_6' => 0,
    //         'active' => 1,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //     ]);
    // }
}
