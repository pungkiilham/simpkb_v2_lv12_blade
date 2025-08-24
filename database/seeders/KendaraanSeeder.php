<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon; // Untuk tanggal yang mudah diatur

class KendaraanSeeder extends Seeder
{
    /**
     * Jalankan seed database.
     *
     * @return void
     */
    public function run(): void
    {
        // Generate UUIDs for related tables
        $kendaraanId = Str::uuid()->toString();
        $sertifikasiId = Str::uuid()->toString();
        $spesifikasiId = Str::uuid()->toString();
        $uraianSumbuId = Str::uuid()->toString();

        // 1. Insert into 'kendaraans' table
        DB::table('kendaraans')->insert([
            'id' => $kendaraanId,
            'nomor_uji' => 'UJI' . Str::random(7),
            'nomor_kendaraan' => 'N' . Str::random(7),
            'jenis_pemilik_id' => 1, // Example: 1 for Perorangan
            'nama_pemilik' => 'Budi Santoso',
            'jenis_identitas' => 'KTP',
            'nomor_identitas' => '357301' . rand(100000000000, 999999999999),
            'tempat_lahir' => 'Surabaya',
            'tanggal_lahir' => Carbon::parse('1985-05-15'),
            'jenis_kelamin' => 'Laki-Laki',
            'alamat_pemilik' => 'Jl. Merdeka No. 10',
            'rt' => '001',
            'rw' => '002',
            'kelurahan' => 'Waras',
            'kecamatan' => 'Sukorejo',
            'kabupaten' => 'Malang',
            'provinsi' => 'Jawa Timur',
            'awal_pakai' => '2020-01-01',
            'tahun' => '2020',
            'nomor_mesin' => 'MESIN' . Str::random(10),
            'nomor_rangka' => 'RANGKA' . Str::random(10),
            'nomor_wa' => '0812' . rand(10000000, 99999999),
            'jenis_kendaraan_id' => 1, // Example: 1 for PICK UP
            'keterangan_jenis_kendaraan' => 'PICK UP BAK TERBUKA',
            'status' => 'Aktif',
            'merk' => 'ISUZU',
            'tipe' => 'PHR54U-CAAIN1',
            'nama_importir' => 'PT. Isuzu Astra Motor Indonesia',
            'tanggal_uji' => Carbon::now()->subMonths(6),
            'tanggal_mati_uji' => Carbon::now()->addMonths(6),
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Insert into 'sertifikasi_kendaraans' table
        DB::table('sertifikasi_kendaraans')->insert([
            'id' => $sertifikasiId,
            'kendaraan_id' => $kendaraanId,
            'sertifikat_registrasi_nomor' => 'SRUT' . Str::random(8),
            'sertifikat_registrasi_penerbit' => 'Kemenhub',
            'sertifikat_registrasi_tanggal' => Carbon::parse('2019-12-01'),
            'sertifikat_uji_nomor' => 'SUTK' . Str::random(8),
            'sertifikat_uji_penerbit' => 'Balai Uji',
            'sertifikat_uji_tanggal' => Carbon::parse('2020-01-10'),
            'sertifikat_rancang_nomor' => 'SRB' . Str::random(8),
            'sertifikat_rancang_penerbit' => 'Desain Kendaraan',
            'sertifikat_rancang_tanggal' => Carbon::parse('2019-11-20'),
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Insert into 'spesifikasi_kendaraans' table
        DB::table('spesifikasi_kendaraans')->insert([
            'id' => $spesifikasiId,
            'kendaraan_id' => $kendaraanId,
            'kubikasi_mesin' => '2499', // As string based on your Schema::create
            'daya_mesin' => '58.84 kW',
            'jenis_bahan_bakar_id' => 2, // Example: 2 for Solar
            'dimensi_panjang' => '4495',
            'dimensi_lebar' => '1745',
            'dimensi_tinggi' => '1700',
            'bak_panjang' => '2700',
            'bak_lebar' => '1600',
            'bak_tinggi' => '400',
            'nama_karoseri' => 'BAK TERBUKA',
            'warna_kabin' => 'PUTIH',
            'warna_bak' => 'HITAM',
            'roh' => '1265',
            'foh' => '1005',
            'jarak_terendah' => '185',
            'jenis_karoseri' => 'BAK TERBUKA',
            'bahan_utama' => 'BESI PLAT',
            'tempat_duduk' => '3', // As string based on your Schema::create
            'kapasitas_berdiri' => '0', // As string based on your Schema::create
            'berat_kosong' => 1470.00, // Decimal
            'jumlah_berat_diizinkan' => 2950.00, // Decimal
            'muatan_sumbu_terberat' => 1680.00, // Decimal
            'jumlah_berat_kombinasi_diizinkan' => 5000.00, // Decimal
            'daya_angkut_barang' => 1300.00, // Decimal
            'kelas_jalan' => 'III',
            'mst' => '3000',
            'ukuran_qr' => '195R14C8PR',
            'ukuran_p1' => '2.0',
            'ukuran_p2' => '3.0',
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. Insert into 'uraian_sumbu_kendaraans' table
        DB::table('uraian_sumbu_kendaraans')->insert([
            'id' => $uraianSumbuId,
            'kendaraan_id' => $kendaraanId,
            'konfigurasi_sumbu' => '2-1',
            'konfigurasi_sumbu_1' => 2700, // Jarak sumbu I-II
            'konfigurasi_sumbu_2' => 0, // Tidak ada sumbu ketiga
            'konfigurasi_sumbu_3' => 0,
            'konfigurasi_sumbu_4' => 0,
            'konfigurasi_sumbu_5' => 0,
            'berat_sumbu_1' => 1220,
            'berat_sumbu_2' => 1730,
            'berat_sumbu_3' => 0,
            'berat_sumbu_4' => 0,
            'berat_sumbu_5' => 0,
            'berat_sumbu_6' => 0,
            'pemakaian_sumbu_1' => '195R14C8PR',
            'pemakaian_sumbu_2' => '195R14C8PR',
            'pemakaian_sumbu_3' => '',
            'pemakaian_sumbu_4' => '',
            'pemakaian_sumbu_5' => '',
            'pemakaian_sumbu_6' => '',
            'daya_sumbu_1' => 1220,
            'daya_sumbu_2' => 1730,
            'daya_sumbu_3' => 0,
            'daya_sumbu_4' => 0,
            'daya_sumbu_5' => 0,
            'daya_sumbu_6' => 0,
            'active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
