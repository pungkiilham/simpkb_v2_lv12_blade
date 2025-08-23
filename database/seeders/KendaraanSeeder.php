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
    public function run()
    {
        // Contoh data untuk jenis bahan bakar (jika ada tabel terpisah)
        $jenisBahanBakarIds = [
            1 => 'Bensin',
            2 => 'Solar',
            3 => 'CNG/LPG',
            4 => 'Listrik',
            5 => 'Lain Lain',
        ];
        // Asumsi Anda memiliki tabel 'jenis_bahan_bakars' atau ID ini valid.
        // Jika tidak, Anda bisa menghapus bagian ini atau membuat seeder untuk jenis_bahan_bakars.
        $randomBahanBakarId = array_rand($jenisBahanBakarIds);


        DB::beginTransaction(); // Memulai transaksi untuk memastikan semua insert berhasil atau tidak sama sekali

        try {
            // --- DATA KENDARAAN 1 ---
            $kendaraanId1 = Str::uuid()->toString();
            DB::table('kendaraans')->insert([
                'id' => $kendaraanId1,
                'nomor_uji' => 'BF79C251413',
                'nomor_kendaraan' => 'N 1234 ABC',
                'jenis_pemilik_id' => 1,
                'nama_pemilik' => 'Budi Santoso',
                'jenis_identitas' => 'KTP',
                'nomor_identitas' => '3578011234567890',
                'tempat_lahir' => 'Surabaya',
                'tanggal_lahir' => Carbon::parse('1985-05-15'),
                'jenis_kelamin' => 'Laki-laki',
                'alamat_pemilik' => 'Jl. Merdeka No. 10',
                'rt' => '001',
                'rw' => '002',
                'kelurahan' => 'Ketabang',
                'kecamatan' => 'Genteng',
                'kabupaten' => 'Surabaya',
                'provinsi' => 'Jawa Timur',
                'awal_pakai' => '2025',
                'tahun' => '2024',
                'nomor_mesin' => 'ABCD1234567',
                'nomor_rangka' => 'EFGH7890123',
                'nomor_wa' => '081234567890',
                'jenis_kendaraan_id' => 1,
                'keterangan_jenis_kendaraan' => 'PICK UP',
                'status' => 'Umum',
                'merk' => 'ISUZU',
                'tipe' => 'PHR54U-CAAIN1',
                'nama_importir' => 'PT Astra International',
                'tanggal_uji' => Carbon::parse('2025-01-20'),
                'tanggal_mati_uji' => Carbon::parse('2026-01-20'),
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('sertifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId1,
                'sertifikat_registrasi_nomor' => 'SR12345',
                'sertifikat_registrasi_penerbit' => 'Dishub',
                'sertifikat_registrasi_tanggal' => Carbon::parse('2025-01-10'),
                'sertifikat_uji_nomor' => 'SU67890',
                'sertifikat_uji_penerbit' => 'Dishub',
                'sertifikat_uji_tanggal' => Carbon::parse('2025-01-20'),
                'sertifikat_rancang_nomor' => 'SRN1122',
                'sertifikat_rancang_penerbit' => 'Kemenhub',
                'sertifikat_rancang_tanggal' => Carbon::parse('2024-12-01'),
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('spesifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId1,
                'kubikasi_mesin' => '2499.0',
                'daya_mesin' => '58.84',
                'jenis_bahan_bakar_id' => 2, // Solar
                'dimensi_panjang' => '4400',
                'dimensi_lebar' => '1695',
                'dimensi_tinggi' => '1850',
                'bak_panjang' => '2700',
                'bak_lebar' => '1600',
                'bak_tinggi' => '400',
                'nama_karoseri' => 'XYZ Karoseri',
                'warna_kabin' => 'PUTIH',
                'warna_bak' => 'BIRU',
                'roh' => '1265.0',
                'foh' => '1005.0',
                'jarak_terendah' => '185.0',
                'jenis_karoseri' => 'BAK TERBUKA',
                'bahan_utama' => 'BESI PLAT',
                'tempat_duduk' => '3',
                'kapasitas_berdiri' => '0',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('uraian_sumbu_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId1,
                'konfigurasi_sumbu' => '1.2',
                'konfigurasi_sumbu_1' => '2 roda',
                'konfigurasi_sumbu_2' => '4 roda',
                'konfigurasi_sumbu_3' => null,
                'konfigurasi_sumbu_4' => null,
                'konfigurasi_sumbu_5' => null,
                'berat_sumbu_1' => '1220.0',
                'berat_sumbu_2' => '1730.0',
                'berat_sumbu_3' => null,
                'berat_sumbu_4' => null,
                'berat_sumbu_5' => null,
                'berat_sumbu_6' => null,
                'pemakaian_sumbu_1' => '195R14C8PR',
                'pemakaian_sumbu_2' => '195R14C8PR',
                'pemakaian_sumbu_3' => null,
                'pemakaian_sumbu_4' => null,
                'pemakaian_sumbu_5' => null,
                'pemakaian_sumbu_6' => null,
                'daya_sumbu_1' => '1680.0',
                'daya_sumbu_2' => '2500.0',
                'daya_sumbu_3' => null,
                'daya_sumbu_4' => null,
                'daya_sumbu_5' => null,
                'daya_sumbu_6' => null,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // --- DATA KENDARAAN 2 (Contoh lainnya) ---
            $kendaraanId2 = Str::uuid()->toString();
            DB::table('kendaraans')->insert([
                'id' => $kendaraanId2,
                'nomor_uji' => 'BG12C2023001',
                'nomor_kendaraan' => 'L 5678 DEF',
                'jenis_pemilik_id' => 2,
                'nama_pemilik' => 'PT Makmur Jaya',
                'jenis_identitas' => 'NPWP',
                'nomor_identitas' => '012345678901234',
                'tempat_lahir' => null,
                'tanggal_lahir' => null,
                'jenis_kelamin' => null,
                'alamat_pemilik' => 'Jl. Majapahit No. 5',
                'rt' => '003',
                'rw' => '001',
                'kelurahan' => 'Wonokromo',
                'kecamatan' => 'Wonokromo',
                'kabupaten' => 'Surabaya',
                'provinsi' => 'Jawa Timur',
                'awal_pakai' => '2023',
                'tahun' => '2023',
                'nomor_mesin' => 'ZXC98765432',
                'nomor_rangka' => 'VBNM34567890',
                'nomor_wa' => '087654321098',
                'jenis_kendaraan_id' => 2,
                'keterangan_jenis_kendaraan' => 'TRUK BOX',
                'status' => 'Tidak Umum',
                'merk' => 'HINO',
                'tipe' => 'DUTRO 130 MD',
                'nama_importir' => null,
                'tanggal_uji' => Carbon::parse('2023-03-10'),
                'tanggal_mati_uji' => Carbon::parse('2024-03-10'),
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('sertifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId2,
                'sertifikat_registrasi_nomor' => 'SR00011',
                'sertifikat_registrasi_penerbit' => 'Dishub',
                'sertifikat_registrasi_tanggal' => Carbon::parse('2023-03-01'),
                'sertifikat_uji_nomor' => 'SU00022',
                'sertifikat_uji_penerbit' => 'Dishub',
                'sertifikat_uji_tanggal' => Carbon::parse('2023-03-10'),
                'sertifikat_rancang_nomor' => 'SRN3344',
                'sertifikat_rancang_penerbit' => 'Kemenhub',
                'sertifikat_rancang_tanggal' => Carbon::parse('2022-11-15'),
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('spesifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId2,
                'kubikasi_mesin' => '4009',
                'daya_mesin' => '95.00',
                'jenis_bahan_bakar_id' => 2, // Solar
                'dimensi_panjang' => '6000',
                'dimensi_lebar' => '2000',
                'dimensi_tinggi' => '2500',
                'bak_panjang' => '4500',
                'bak_lebar' => '1800',
                'bak_tinggi' => '1800',
                'nama_karoseri' => 'BOX Karoseri',
                'warna_kabin' => 'HIJAU',
                'warna_bak' => 'PUTIH',
                'roh' => '1500.0',
                'foh' => '1000.0',
                'jarak_terendah' => '200.0',
                'jenis_karoseri' => 'BOX',
                'bahan_utama' => 'ALUMINIUM',
                'tempat_duduk' => '2',
                'kapasitas_berdiri' => '0',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('uraian_sumbu_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId2,
                'konfigurasi_sumbu' => '1.2',
                'konfigurasi_sumbu_1' => '2 roda',
                'konfigurasi_sumbu_2' => '4 roda',
                'konfigurasi_sumbu_3' => null,
                'konfigurasi_sumbu_4' => null,
                'konfigurasi_sumbu_5' => null,
                'berat_sumbu_1' => '2500.0',
                'berat_sumbu_2' => '4500.0',
                'berat_sumbu_3' => null,
                'berat_sumbu_4' => null,
                'berat_sumbu_5' => null,
                'berat_sumbu_6' => null,
                'pemakaian_sumbu_1' => '7.50-16-14PR',
                'pemakaian_sumbu_2' => '7.50-16-14PR',
                'pemakaian_sumbu_3' => null,
                'pemakaian_sumbu_4' => null,
                'pemakaian_sumbu_5' => null,
                'pemakaian_sumbu_6' => null,
                'daya_sumbu_1' => '3000.0',
                'daya_sumbu_2' => '6000.0',
                'daya_sumbu_3' => null,
                'daya_sumbu_4' => null,
                'daya_sumbu_5' => null,
                'daya_sumbu_6' => null,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::commit(); // Komit transaksi jika semua operasi berhasil.
            $this->command->info('Data kendaraan berhasil di-seed!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi kesalahan.
            $this->command->error('Gagal men-seed data kendaraan: ' . $e->getMessage());
        }
    }
}
