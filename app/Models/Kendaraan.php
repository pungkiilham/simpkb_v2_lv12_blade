<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'kendaraans';

    // Kolom yang dapat diisi secara massal. Tambahkan sesuai kebutuhan aplikasi Anda.
    // protected $fillable = [
    //     'id', 'nomor_uji', 'nomor_kendaraan', 'jenis_pemilik_id', 'nama_pemilik',
    //     'jenis_identitas', 'nomor_identitas', 'tempat_lahir', 'tanggal_lahir',
    //     'jenis_kelamin', 'alamat_pemilik', 'rt', 'rw', 'kelurahan', 'kecamatan',
    //     'kabupaten', 'provinsi', 'awal_pakai', 'tahun', 'nomor_mesin',
    //     'nomor_rangka', 'nomor_wa', 'jenis_kendaraan_id', 'keterangan_jenis_kendaraan',
    //     'status', 'merk', 'tipe', 'nama_importir', 'tanggal_uji', 'tanggal_mati_uji',
    //     'active'
    // ];

    // Jika Anda memiliki relasi, Anda bisa menentukannya di sini. Contoh:
    // public function jenisPemilik()
    // {
    //     return $this->belongsTo(JenisPemilik::class, 'jenis_pemilik_id');
    // }

    /**
     * Scope a query to include all necessary joins and select specific columns for detailed vehicle data.
     * This scope mirrors the complex query used in show, edit, and export methods.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function scopeWithAllDetails($query)
    // {
    //     return $query->select(
    //         'kendaraans.*', // Mengambil semua kolom dari tabel 'kendaraans'
    //         'kendaraans.id as kendaraan_id', // Alias ID kendaraan utama untuk konsistensi dengan contoh Anda
    //         // Sertifikasi Kendaraan
    //         'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
    //         'sertifikasi_kendaraans.sertifikat_registrasi_penerbit',
    //         'sertifikasi_kendaraans.sertifikat_registrasi_tanggal',
    //         'sertifikasi_kendaraans.sertifikat_uji_nomor',
    //         'sertifikasi_kendaraans.sertifikat_uji_penerbit',
    //         'sertifikasi_kendaraans.sertifikat_uji_tanggal',
    //         'sertifikasi_kendaraans.sertifikat_rancang_nomor',
    //         'sertifikasi_kendaraans.sertifikat_rancang_penerbit',
    //         'sertifikasi_kendaraans.sertifikat_rancang_tanggal',
    //         // Spesifikasi Kendaraan
    //         'spesifikasi_kendaraans.kubikasi_mesin',
    //         'spesifikasi_kendaraans.daya_mesin',
    //         'spesifikasi_kendaraans.jenis_bahan_bakar_id',
    //         'spesifikasi_kendaraans.dimensi_panjang',
    //         'spesifikasi_kendaraans.dimensi_lebar',
    //         'spesifikasi_kendaraans.dimensi_tinggi',
    //         'spesifikasi_kendaraans.bak_panjang',
    //         'spesifikasi_kendaraans.bak_lebar',
    //         'spesifikasi_kendaraans.bak_tinggi',
    //         'spesifikasi_kendaraans.nama_karoseri',
    //         'spesifikasi_kendaraans.warna_kabin',
    //         'spesifikasi_kendaraans.warna_bak',
    //         'spesifikasi_kendaraans.roh',
    //         'spesifikasi_kendaraans.foh',
    //         'spesifikasi_kendaraans.jarak_terendah',
    //         'spesifikasi_kendaraans.jenis_karoseri',
    //         'spesifikasi_kendaraans.bahan_utama',
    //         'spesifikasi_kendaraans.tempat_duduk',
    //         'spesifikasi_kendaraans.kapasitas_berdiri',
    //         'spesifikasi_kendaraans.berat_kosong',
    //         'spesifikasi_kendaraans.jumlah_berat_diizinkan',
    //         'spesifikasi_kendaraans.muatan_sumbu_terberat',
    //         'spesifikasi_kendaraans.jumlah_berat_kombinasi_diizinkan',
    //         'spesifikasi_kendaraans.daya_angkut_barang',
    //         'spesifikasi_kendaraans.kelas_jalan',
    //         'spesifikasi_kendaraans.mst',
    //         'spesifikasi_kendaraans.ukuran_qr',
    //         'spesifikasi_kendaraans.ukuran_p1',
    //         'spesifikasi_kendaraans.ukuran_p2',
    //         // Uraian Sumbu
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu',
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu_1',
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu_2',
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu_3',
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu_4',
    //         'uraian_sumbu_kendaraans.konfigurasi_sumbu_5',
    //         'uraian_sumbu_kendaraans.berat_sumbu_1',
    //         'uraian_sumbu_kendaraans.berat_sumbu_2',
    //         'uraian_sumbu_kendaraans.berat_sumbu_3',
    //         'uraian_sumbu_kendaraans.berat_sumbu_4',
    //         'uraian_sumbu_kendaraans.berat_sumbu_5',
    //         'uraian_sumbu_kendaraans.berat_sumbu_6',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_1',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_2',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_3',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_4',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_5',
    //         'uraian_sumbu_kendaraans.pemakaian_sumbu_6',
    //         'uraian_sumbu_kendaraans.daya_sumbu_1',
    //         'uraian_sumbu_kendaraans.daya_sumbu_2',
    //         'uraian_sumbu_kendaraans.daya_sumbu_3',
    //         'uraian_sumbu_kendaraans.daya_sumbu_4',
    //         'uraian_sumbu_kendaraans.daya_sumbu_5',
    //         'uraian_sumbu_kendaraans.daya_sumbu_6'
    //     )
    //     ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
    //     ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
    //     ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id');
    // }
}
