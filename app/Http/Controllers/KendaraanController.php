<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Kendaraan;
use Symfony\Component\HttpFoundation\StreamedResponse; // Digunakan untuk mengekspor data ke CSV
use Barryvdh\DomPDF\Facade\Pdf; // Tambahkan ini untuk Dompdf


class KendaraanController extends Controller
{
    public function showCombinedKendaraanData(Request $request)
    {
        // Mengambil data dari tabel 'kendaraans' dan menggabungkannya
        // dengan 'sertifikasi_kendaraans', 'spesifikasi_kendaraans', dan 'uraian_sumbu_kendaraans'
        // menggunakan 'kendaraan_id' sebagai kunci join.
        $dataKendaraan = DB::table('kendaraans')
            ->join('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->join('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->join('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.id as kendaraan_id', // Alias untuk ID kendaraan utama
                'kendaraans.nomor_uji',
                'kendaraans.nomor_kendaraan',
                'kendaraans.nama_pemilik',
                'kendaraans.merk',
                'kendaraans.tipe',
                'kendaraans.tipe',
                'kendaraans.keterangan_jenis_kendaraan',
                // 'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
                // 'sertifikasi_kendaraans.sertifikat_uji_nomor',
                // 'sertifikasi_kendaraans.sertifikat_rancang_nomor',
                // 'spesifikasi_kendaraans.kubikasi_mesin',
                // 'spesifikasi_kendaraans.daya_mesin',
                // 'spesifikasi_kendaraans.dimensi_panjang',
                // 'spesifikasi_kendaraans.dimensi_lebar',
                // 'spesifikasi_kendaraans.dimensi_tinggi',
                // 'spesifikasi_kendaraans.nama_karoseri',
                // 'uraian_sumbu_kendaraans.konfigurasi_sumbu',
                // 'uraian_sumbu_kendaraans.berat_sumbu_1',
                // 'uraian_sumbu_kendaraans.daya_sumbu_1'
            )
            ->get(); // Mengambil semua hasil

        // Kamu bisa mengembalikan data ini ke view atau dalam format JSON
        return view('pages.masterKendaraan.semua', ['kendaraanData' => $dataKendaraan]);
    }

    /**
     * Menampilkan data kendaraan spesifik dengan detail dari tabel terkait.
     *
     * @param  string  $kendaraanId ID dari kendaraan yang ingin dicari.
     * @return \Illuminate\Http\Response
     */
    public function showSpecificKendaraanData(string $kendaraanId)
    {
        // Mengambil data kendaraan spesifik berdasarkan kendaraanId
        // dan menggabungkannya dengan tabel terkait.
        $kendaraan = DB::table('kendaraans')
            ->join('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->join('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->join('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.*', // Mengambil semua kolom dari tabel 'kendaraans'
                // Aliaskan 'id' dari kendaraans sebagai 'kendaraan_id' untuk konsistensi dengan rute
                'kendaraans.id as kendaraan_id',
                // Ambil semua kolom yang diperlukan dari tabel sertifikasi_kendaraans
                'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
                'sertifikasi_kendaraans.sertifikat_registrasi_penerbit',
                'sertifikasi_kendaraans.sertifikat_registrasi_tanggal',
                'sertifikasi_kendaraans.sertifikat_uji_nomor',
                'sertifikasi_kendaraans.sertifikat_uji_penerbit',
                'sertifikasi_kendaraans.sertifikat_uji_tanggal',
                'sertifikasi_kendaraans.sertifikat_rancang_nomor',
                'sertifikasi_kendaraans.sertifikat_rancang_penerbit',
                'sertifikasi_kendaraans.sertifikat_rancang_tanggal',
                // Ambil semua kolom yang diperlukan dari tabel spesifikasi_kendaraans
                'spesifikasi_kendaraans.kubikasi_mesin',
                'spesifikasi_kendaraans.daya_mesin',
                'spesifikasi_kendaraans.jenis_bahan_bakar_id',
                'spesifikasi_kendaraans.dimensi_panjang',
                'spesifikasi_kendaraans.dimensi_lebar',
                'spesifikasi_kendaraans.dimensi_tinggi',
                'spesifikasi_kendaraans.bak_panjang',
                'spesifikasi_kendaraans.bak_lebar',
                'spesifikasi_kendaraans.bak_tinggi',
                'spesifikasi_kendaraans.nama_karoseri',
                'spesifikasi_kendaraans.warna_kabin',
                'spesifikasi_kendaraans.warna_bak',
                'spesifikasi_kendaraans.roh',
                'spesifikasi_kendaraans.foh',
                'spesifikasi_kendaraans.jarak_terendah',
                'spesifikasi_kendaraans.jenis_karoseri',
                'spesifikasi_kendaraans.bahan_utama',
                'spesifikasi_kendaraans.tempat_duduk',
                'spesifikasi_kendaraans.kapasitas_berdiri',
                // Ambil semua kolom yang diperlukan dari tabel uraian_sumbu_kendaraans
                'uraian_sumbu_kendaraans.konfigurasi_sumbu',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_1',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_2',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_3',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_4',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_5',
                'uraian_sumbu_kendaraans.berat_sumbu_1',
                'uraian_sumbu_kendaraans.berat_sumbu_2',
                'uraian_sumbu_kendaraans.berat_sumbu_3',
                'uraian_sumbu_kendaraans.berat_sumbu_4',
                'uraian_sumbu_kendaraans.berat_sumbu_5',
                'uraian_sumbu_kendaraans.berat_sumbu_6',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_1',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_2',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_3',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_4',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_5',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_6',
                'uraian_sumbu_kendaraans.daya_sumbu_1',
                'uraian_sumbu_kendaraans.daya_sumbu_2',
                'uraian_sumbu_kendaraans.daya_sumbu_3',
                'uraian_sumbu_kendaraans.daya_sumbu_4',
                'uraian_sumbu_kendaraans.daya_sumbu_5',
                'uraian_sumbu_kendaraans.daya_sumbu_6'
            )
            ->where('kendaraans.id', $kendaraanId) // Menambahkan kondisi WHERE
            ->first(); // Mengambil hanya satu baris hasil

        // Jika kendaraan tidak ditemukan
        if (!$kendaraan) {
            return response()->json(['message' => 'Kendaraan tidak ditemukan'], 404);
        }
        // dd($kendaraan);
        // Mengembalikan data kendaraan spesifik ke view atau dalam format JSON
        return view('pages.masterKendaraan.lihat', ['kendaraan' => $kendaraan]);
        // Atau untuk API:
        // return response()->json($kendaraan);
    }

    /**
     * Menambahkan data kendaraan baru beserta detail terkaitnya.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'nomor_uji' => 'required|string|max:50',
            'nomor_kendaraan' => 'required|string|max:50',
            'nama_pemilik' => 'required|string|max:50',
            "nomor_identitas" => 'required',
            'nomor_rangka' => 'required',
            'jenis_kendaraan_id' => 'required',
            'tanggal_mati_uji' => 'required'
            // Tambahkan validasi untuk kolom lain sesuai kebutuhan
        ]);

        // Generate UUID untuk kendaraan baru
        $kendaraanId = Str::uuid()->toString();

        try {
            DB::beginTransaction(); // Memulai transaksi database

            // Masukkan data ke tabel 'kendaraans'
            DB::table('kendaraans')->insert([
                'id' => $kendaraanId,
                'nomor_uji' => $request->nomor_uji,
                'nomor_kendaraan' => $request->nomor_kendaraan,
                'nama_pemilik' => $request->nama_pemilik,
                // Tambahkan semua kolom lain yang diperlukan dari tabel kendaraans
                'jenis_pemilik_id' => $request->jenis_pemilik_id,
                'jenis_identitas' => $request->jenis_identitas,
                'nomor_identitas' => $request->nomor_identitas,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat_pemilik' => $request->alamat_pemilik,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'kabupaten' => $request->kabupaten,
                'provinsi' => $request->provinsi,
                'awal_pakai' => $request->awal_pakai,
                'tahun' => $request->tahun,
                'nomor_mesin' => $request->nomor_mesin,
                'nomor_rangka' => $request->nomor_rangka,
                'nomor_wa' => $request->nomor_wa,
                'jenis_kendaraan_id' => $request->jenis_kendaraan_id,
                'keterangan_jenis_kendaraan' => $request->keterangan_jenis_kendaraan,
                'status' => $request->status,
                'merk' => $request->merk,
                'tipe' => $request->tipe,
                'nama_importir' => $request->nama_importir,
                'tanggal_uji' => $request->tanggal_uji,
                'tanggal_mati_uji' => $request->tanggal_mati_uji,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Masukkan data ke tabel 'sertifikasi_kendaraans'
            DB::table('sertifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(), // UUID baru untuk sertifikasi
                'kendaraan_id' => $kendaraanId,
                'sertifikat_registrasi_nomor' => $request->sertifikat_registrasi_nomor,
                // Tambahkan kolom sertifikasi lainnya
                'sertifikat_registrasi_penerbit' => $request->sertifikat_registrasi_penerbit,
                'sertifikat_registrasi_tanggal' => $request->sertifikat_registrasi_tanggal,
                'sertifikat_uji_nomor' => $request->sertifikat_uji_nomor,
                'sertifikat_uji_penerbit' => $request->sertifikat_uji_penerbit,
                'sertifikat_uji_tanggal' => $request->sertifikat_uji_tanggal,
                'sertifikat_rancang_nomor' => $request->sertifikat_rancang_nomor,
                'sertifikat_rancang_penerbit' => $request->sertifikat_rancang_penerbit,
                'sertifikat_rancang_tanggal' => $request->sertifikat_rancang_tanggal,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Masukkan data ke tabel 'spesifikasi_kendaraans'
            DB::table('spesifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(), // UUID baru untuk spesifikasi
                'kendaraan_id' => $kendaraanId,
                'kubikasi_mesin' => $request->kubikasi_mesin,
                // Tambahkan kolom spesifikasi lainnya
                'daya_mesin' => $request->daya_mesin,
                'jenis_bahan_bakar_id' => $request->jenis_bahan_bakar_id,
                'dimensi_panjang' => $request->dimensi_panjang,
                'dimensi_lebar' => $request->dimensi_lebar,
                'dimensi_tinggi' => $request->dimensi_tinggi,
                'bak_panjang' => $request->bak_panjang,
                'bak_lebar' => $request->bak_lebar,
                'bak_tinggi' => $request->bak_tinggi,
                'nama_karoseri' => $request->nama_karoseri,
                'warna_kabin' => $request->warna_kabin,
                'warna_bak' => $request->warna_bak,
                'roh' => $request->roh,
                'foh' => $request->foh,
                'jarak_terendah' => $request->jarak_terendah,
                'jenis_karoseri' => $request->jenis_karoseri,
                'bahan_utama' => $request->bahan_utama,
                'tempat_duduk' => $request->tempat_duduk,
                'kapasitas_berdiri' => $request->kapasitas_berdiri,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Masukkan data ke tabel 'uraian_sumbu_kendaraans'
            DB::table('uraian_sumbu_kendaraans')->insert([
                'id' => Str::uuid()->toString(), // UUID baru untuk uraian sumbu
                'kendaraan_id' => $kendaraanId,
                'konfigurasi_sumbu' => $request->konfigurasi_sumbu,
                // Tambahkan kolom uraian sumbu lainnya
                'konfigurasi_sumbu_1' => $request->konfigurasi_sumbu_1,
                'konfigurasi_sumbu_2' => $request->konfigurasi_sumbu_2,
                'konfigurasi_sumbu_3' => $request->konfigurasi_sumbu_3,
                'konfigurasi_sumbu_4' => $request->konfigurasi_sumbu_4,
                'konfigurasi_sumbu_5' => $request->konfigurasi_sumbu_5,
                'berat_sumbu_1' => $request->berat_sumbu_1,
                'berat_sumbu_2' => $request->berat_sumbu_2,
                'berat_sumbu_3' => $request->berat_sumbu_3,
                'berat_sumbu_4' => $request->berat_sumbu_4,
                'berat_sumbu_5' => $request->berat_sumbu_5,
                'berat_sumbu_6' => $request->berat_sumbu_6,
                'pemakaian_sumbu_1' => $request->pemakaian_sumbu_1,
                'pemakaian_sumbu_2' => $request->pemakaian_sumbu_2,
                'pemakaian_sumbu_3' => $request->pemakaian_sumbu_3,
                'pemakaian_sumbu_4' => $request->pemakaian_sumbu_4,
                'pemakaian_sumbu_5' => $request->pemakaian_sumbu_5,
                'pemakaian_sumbu_6' => $request->pemakaian_sumbu_6,
                'daya_sumbu_1' => $request->daya_sumbu_1,
                'daya_sumbu_2' => $request->daya_sumbu_2,
                'daya_sumbu_3' => $request->daya_sumbu_3,
                'daya_sumbu_4' => $request->daya_sumbu_4,
                'daya_sumbu_5' => $request->daya_sumbu_5,
                'daya_sumbu_6' => $request->daya_sumbu_6,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit(); // Komit transaksi jika semua berhasil
            return response()->json(['message' => 'Kendaraan dan detail terkait berhasil ditambahkan', 'kendaraan_id' => $kendaraanId], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi error
            return response()->json(['message' => 'Gagal menambahkan kendaraan', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Mengupdate data kendaraan dan detail terkaitnya.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $kendaraanId ID dari kendaraan yang ingin diupdate.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $kendaraanId)
    {
        // Validasi input dari request
        $request->validate([
            'nomor_uji' => 'sometimes|string|max:50',
            'nomor_kendaraan' => 'sometimes|string|max:50',
            'nama_pemilik' => 'sometimes|string|max:50',
            // Tambahkan validasi untuk kolom lain sesuai kebutuhan, gunakan 'sometimes'
            // jika kolom tidak harus selalu ada dalam request update
        ]);

        try {
            DB::beginTransaction(); // Memulai transaksi database

            // Update data di tabel 'kendaraans'
            $updatedKendaraan = DB::table('kendaraans')
                ->where('id', $kendaraanId)
                ->update([
                    'nomor_uji' => $request->input('nomor_uji', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_uji')), // Contoh: Ambil nilai lama jika tidak disediakan
                    'nomor_kendaraan' => $request->input('nomor_kendaraan', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_kendaraan')),
                    'nama_pemilik' => $request->input('nama_pemilik', DB::table('kendaraans')->where('id', $kendaraanId)->value('nama_pemilik')),
                    // Lanjutkan untuk semua kolom yang bisa diupdate di tabel kendaraans
                    'jenis_pemilik_id' => $request->input('jenis_pemilik_id', DB::table('kendaraans')->where('id', $kendaraanId)->value('jenis_pemilik_id')),
                    'jenis_identitas' => $request->input('jenis_identitas', DB::table('kendaraans')->where('id', $kendaraanId)->value('jenis_identitas')),
                    'nomor_identitas' => $request->input('nomor_identitas', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_identitas')),
                    'tempat_lahir' => $request->input('tempat_lahir', DB::table('kendaraans')->where('id', $kendaraanId)->value('tempat_lahir')),
                    'tanggal_lahir' => $request->input('tanggal_lahir', DB::table('kendaraans')->where('id', $kendaraanId)->value('tanggal_lahir')),
                    'jenis_kelamin' => $request->input('jenis_kelamin', DB::table('kendaraans')->where('id', $kendaraanId)->value('jenis_kelamin')),
                    'alamat_pemilik' => $request->input('alamat_pemilik', DB::table('kendaraans')->where('id', $kendaraanId)->value('alamat_pemilik')),
                    'rt' => $request->input('rt', DB::table('kendaraans')->where('id', $kendaraanId)->value('rt')),
                    'rw' => $request->input('rw', DB::table('kendaraans')->where('id', $kendaraanId)->value('rw')),
                    'kelurahan' => $request->input('kelurahan', DB::table('kendaraans')->where('id', $kendaraanId)->value('kelurahan')),
                    'kecamatan' => $request->input('kecamatan', DB::table('kendaraans')->where('id', $kendaraanId)->value('kecamatan')),
                    'kabupaten' => $request->input('kabupaten', DB::table('kendaraans')->where('id', $kendaraanId)->value('kabupaten')),
                    'provinsi' => $request->input('provinsi', DB::table('kendaraans')->where('id', $kendaraanId)->value('provinsi')),
                    'awal_pakai' => $request->input('awal_pakai', DB::table('kendaraans')->where('id', $kendaraanId)->value('awal_pakai')),
                    'tahun' => $request->input('tahun', DB::table('kendaraans')->where('id', $kendaraanId)->value('tahun')),
                    'nomor_mesin' => $request->input('nomor_mesin', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_mesin')),
                    'nomor_rangka' => $request->input('nomor_rangka', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_rangka')),
                    'nomor_wa' => $request->input('nomor_wa', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_wa')),
                    'jenis_kendaraan_id' => $request->input('jenis_kendaraan_id', DB::table('kendaraans')->where('id', $kendaraanId)->value('jenis_kendaraan_id')),
                    'keterangan_jenis_kendaraan' => $request->input('keterangan_jenis_kendaraan', DB::table('kendaraans')->where('id', $kendaraanId)->value('keterangan_jenis_kendaraan')),
                    'status' => $request->input('status', DB::table('kendaraans')->where('id', $kendaraanId)->value('status')),
                    'merk' => $request->input('merk', DB::table('kendaraans')->where('id', $kendaraanId)->value('merk')),
                    'tipe' => $request->input('tipe', DB::table('kendaraans')->where('id', $kendaraanId)->value('tipe')),
                    'nama_importir' => $request->input('nama_importir', DB::table('kendaraans')->where('id', $kendaraanId)->value('nama_importir')),
                    'tanggal_uji' => $request->input('tanggal_uji', DB::table('kendaraans')->where('id', $kendaraanId)->value('tanggal_uji')),
                    'tanggal_mati_uji' => $request->input('tanggal_mati_uji', DB::table('kendaraans')->where('id', $kendaraanId)->value('tanggal_mati_uji')),
                    'active' => $request->input('active', DB::table('kendaraans')->where('id', $kendaraanId)->value('active')),
                    'updated_at' => now(),
                ]);

            if ($updatedKendaraan === 0) {
                DB::rollBack();
                return response()->json(['message' => 'Kendaraan tidak ditemukan atau tidak ada perubahan'], 404);
            }

            // Update data di tabel 'sertifikasi_kendaraans'
            DB::table('sertifikasi_kendaraans')
                ->where('kendaraan_id', $kendaraanId)
                ->update([
                    'sertifikat_registrasi_nomor' => $request->input('sertifikat_registrasi_nomor', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_registrasi_nomor')),
                    'sertifikat_registrasi_penerbit' => $request->input('sertifikat_registrasi_penerbit', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_registrasi_penerbit')),
                    'sertifikat_registrasi_tanggal' => $request->input('sertifikat_registrasi_tanggal', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_registrasi_tanggal')),
                    'sertifikat_uji_nomor' => $request->input('sertifikat_uji_nomor', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_uji_nomor')),
                    'sertifikat_uji_penerbit' => $request->input('sertifikat_uji_penerbit', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_uji_penerbit')),
                    'sertifikat_uji_tanggal' => $request->input('sertifikat_uji_tanggal', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_uji_tanggal')),
                    'sertifikat_rancang_nomor' => $request->input('sertifikat_rancang_nomor', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_rancang_nomor')),
                    'sertifikat_rancang_penerbit' => $request->input('sertifikat_rancang_penerbit', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_rancang_penerbit')),
                    'sertifikat_rancang_tanggal' => $request->input('sertifikat_rancang_tanggal', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('sertifikat_rancang_tanggal')),
                    'active' => $request->input('active', DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('active')),
                    'updated_at' => now(),
                ]);

            // Update data di tabel 'spesifikasi_kendaraans'
            DB::table('spesifikasi_kendaraans')
                ->where('kendaraan_id', $kendaraanId)
                ->update([
                    'kubikasi_mesin' => $request->input('kubikasi_mesin', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('kubikasi_mesin')),
                    'daya_mesin' => $request->input('daya_mesin', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_mesin')),
                    'jenis_bahan_bakar_id' => $request->input('jenis_bahan_bakar_id', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('jenis_bahan_bakar_id')),
                    'dimensi_panjang' => $request->input('dimensi_panjang', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('dimensi_panjang')),
                    'dimensi_lebar' => $request->input('dimensi_lebar', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('dimensi_lebar')),
                    'dimensi_tinggi' => $request->input('dimensi_tinggi', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('dimensi_tinggi')),
                    'bak_panjang' => $request->input('bak_panjang', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('bak_panjang')),
                    'bak_lebar' => $request->input('bak_lebar', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('bak_lebar')),
                    'bak_tinggi' => $request->input('bak_tinggi', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('bak_tinggi')),
                    'nama_karoseri' => $request->input('nama_karoseri', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('nama_karoseri')),
                    'warna_kabin' => $request->input('warna_kabin', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('warna_kabin')),
                    'warna_bak' => $request->input('warna_bak', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('warna_bak')),
                    'roh' => $request->input('roh', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('roh')),
                    'foh' => $request->input('foh', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('foh')),
                    'jarak_terendah' => $request->input('jarak_terendah', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('jarak_terendah')),
                    'jenis_karoseri' => $request->input('jenis_karoseri', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('jenis_karoseri')),
                    'bahan_utama' => $request->input('bahan_utama', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('bahan_utama')),
                    'tempat_duduk' => $request->input('tempat_duduk', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('tempat_duduk')),
                    'kapasitas_berdiri' => $request->input('kapasitas_berdiri', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('kapasitas_berdiri')),
                    'active' => $request->input('active', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('active')),
                    'updated_at' => now(),
                ]);

            // Update data di tabel 'uraian_sumbu_kendaraans'
            DB::table('uraian_sumbu_kendaraans')
                ->where('kendaraan_id', $kendaraanId)
                ->update([
                    'konfigurasi_sumbu' => $request->input('konfigurasi_sumbu', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu')),
                    'konfigurasi_sumbu_1' => $request->input('konfigurasi_sumbu_1', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu_1')),
                    'konfigurasi_sumbu_2' => $request->input('konfigurasi_sumbu_2', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu_2')),
                    'konfigurasi_sumbu_3' => $request->input('konfigurasi_sumbu_3', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu_3')),
                    'konfigurasi_sumbu_4' => $request->input('konfigurasi_sumbu_4', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu_4')),
                    'konfigurasi_sumbu_5' => $request->input('konfigurasi_sumbu_5', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('konfigurasi_sumbu_5')),
                    'berat_sumbu_1' => $request->input('berat_sumbu_1', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_1')),
                    'berat_sumbu_2' => $request->input('berat_sumbu_2', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_2')),
                    'berat_sumbu_3' => $request->input('berat_sumbu_3', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_3')),
                    'berat_sumbu_4' => $request->input('berat_sumbu_4', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_4')),
                    'berat_sumbu_5' => $request->input('berat_sumbu_5', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_5')),
                    'berat_sumbu_6' => $request->input('berat_sumbu_6', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_sumbu_6')),
                    'pemakaian_sumbu_1' => $request->input('pemakaian_sumbu_1', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_1')),
                    'pemakaian_sumbu_2' => $request->input('pemakaian_sumbu_2', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_2')),
                    'pemakaian_sumbu_3' => $request->input('pemakaian_sumbu_3', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_3')),
                    'pemakaian_sumbu_4' => $request->input('pemakaian_sumbu_4', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_4')),
                    'pemakaian_sumbu_5' => $request->input('pemakaian_sumbu_5', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_5')),
                    'pemakaian_sumbu_6' => $request->input('pemakaian_sumbu_6', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('pemakaian_sumbu_6')),
                    'daya_sumbu_1' => $request->input('daya_sumbu_1', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_1')),
                    'daya_sumbu_2' => $request->input('daya_sumbu_2', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_2')),
                    'daya_sumbu_3' => $request->input('daya_sumbu_3', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_3')),
                    'daya_sumbu_4' => $request->input('daya_sumbu_4', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_4')),
                    'daya_sumbu_5' => $request->input('daya_sumbu_5', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_5')),
                    'daya_sumbu_6' => $request->input('daya_sumbu_6', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_sumbu_6')),
                    'active' => $request->input('active', DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->value('active')),
                    'updated_at' => now(),
                ]);

            DB::commit(); // Komit transaksi jika semua berhasil
            return response()->json(['message' => 'Kendaraan dan detail terkait berhasil diupdate'], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi error
            return response()->json(['message' => 'Gagal mengupdate kendaraan', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Menghapus data kendaraan dan detail terkaitnya.
     *
     * @param  string  $kendaraanId ID dari kendaraan yang ingin dihapus.
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $kendaraanId)
    {
        try {
            DB::beginTransaction(); // Memulai transaksi database

            // Hapus data dari tabel terkait terlebih dahulu untuk menghindari constraint foreign key
            DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();
            DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();
            DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();

            // Kemudian, hapus data dari tabel 'kendaraans'
            $deleted = DB::table('kendaraans')->where('id', $kendaraanId)->delete();

            if ($deleted === 0) {
                DB::rollBack();
                return response()->json(['message' => 'Kendaraan tidak ditemukan'], 404);
            }

            DB::commit(); // Komit transaksi jika semua berhasil
            return response()->json(['message' => 'Kendaraan dan detail terkait berhasil dihapus'], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi error
            return response()->json(['message' => 'Gagal menghapus kendaraan', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Mengekspor semua data kendaraan beserta detail terkaitnya ke file CSV.
     * Menggunakan StreamedResponse untuk efisiensi memori.
     *
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function exportAllKendaraanData()
    {
        // Headers HTTP untuk mengunduh file CSV.
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="data_kendaraan_' . date('Ymd_His') . '.csv"',
        ];

        // Lakukan query join yang sama seperti showCombinedKendaraanData untuk mendapatkan semua data.
        $dataKendaraan = DB::table('kendaraans')
            ->join('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->join('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->join('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.id as kendaraan_id',
                'kendaraans.nomor_uji',
                'kendaraans.nomor_kendaraan',
                'kendaraans.nama_pemilik',
                'kendaraans.merk',
                'kendaraans.tipe',
                'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
                'sertifikasi_kendaraans.sertifikat_uji_nomor',
                'sertifikasi_kendaraans.sertifikat_rancang_nomor',
                'spesifikasi_kendaraans.kubikasi_mesin',
                'spesifikasi_kendaraans.daya_mesin',
                'spesifikasi_kendaraans.dimensi_panjang',
                'spesifikasi_kendaraans.dimensi_lebar',
                'spesifikasi_kendaraans.dimensi_tinggi',
                'spesifikasi_kendaraans.bak_panjang',
                'spesifikasi_kendaraans.bak_lebar',
                'spesifikasi_kendaraans.bak_tinggi',
                'spesifikasi_kendaraans.nama_karoseri',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu',
                'uraian_sumbu_kendaraans.berat_sumbu_1',
                'uraian_sumbu_kendaraans.daya_sumbu_1'
                // Tambahkan semua kolom lain yang ingin Anda sertakan dalam CSV
                // Misalnya: 'kendaraans.nomor_mesin', 'sertifikasi_kendaraans.sertifikat_registrasi_penerbit', dll.
            )
            ->get();

        // Callback function untuk menulis data CSV secara stream.
        $callback = function () use ($dataKendaraan) {
            $file = fopen('php://output', 'w'); // Membuka aliran output ke browser.

            // Tulis baris header CSV. Diambil dari kunci objek pertama.
            if ($dataKendaraan->isNotEmpty()) {
                $columns = array_keys((array) $dataKendaraan->first());
                fputcsv($file, $columns);
            }

            // Tulis data baris demi baris ke file CSV.
            foreach ($dataKendaraan as $row) {
                fputcsv($file, (array) $row); // Mengonversi objek ke array.
            }

            fclose($file); // Menutup aliran file.
        };

        return new StreamedResponse($callback, 200, $headers); // Mengembalikan StreamedResponse.
    }

    /**
     * Mengekspor data kendaraan spesifik ke file PDF yang diformat
     * menyerupai template yang diberikan.
     *
     * @param  string  $kendaraanId ID dari kendaraan yang ingin diekspor.
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function exportSpecificKendaraanToPdf(string $kendaraanId)
    {
        // Ambil semua data yang diperlukan dari database untuk kendaraan spesifik
        $kendaraan = DB::table('kendaraans')
            ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.*', // Ambil semua kolom dari tabel kendaraans
                // Ambil semua kolom yang diperlukan dari tabel sertifikasi_kendaraans
                'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
                'sertifikasi_kendaraans.sertifikat_registrasi_penerbit',
                'sertifikasi_kendaraans.sertifikat_registrasi_tanggal',
                'sertifikasi_kendaraans.sertifikat_uji_nomor',
                'sertifikasi_kendaraans.sertifikat_uji_penerbit',
                'sertifikasi_kendaraans.sertifikat_uji_tanggal',
                'sertifikasi_kendaraans.sertifikat_rancang_nomor',
                'sertifikasi_kendaraans.sertifikat_rancang_penerbit',
                'sertifikasi_kendaraans.sertifikat_rancang_tanggal',
                // Ambil semua kolom yang diperlukan dari tabel spesifikasi_kendaraans
                'spesifikasi_kendaraans.kubikasi_mesin',
                'spesifikasi_kendaraans.daya_mesin',
                'spesifikasi_kendaraans.jenis_bahan_bakar_id',
                'spesifikasi_kendaraans.dimensi_panjang',
                'spesifikasi_kendaraans.dimensi_lebar',
                'spesifikasi_kendaraans.dimensi_tinggi',
                'spesifikasi_kendaraans.bak_panjang',
                'spesifikasi_kendaraans.bak_lebar',
                'spesifikasi_kendaraans.bak_tinggi',
                'spesifikasi_kendaraans.nama_karoseri',
                'spesifikasi_kendaraans.warna_kabin',
                'spesifikasi_kendaraans.warna_bak',
                'spesifikasi_kendaraans.roh',
                'spesifikasi_kendaraans.foh',
                'spesifikasi_kendaraans.jarak_terendah',
                'spesifikasi_kendaraans.jenis_karoseri',
                'spesifikasi_kendaraans.bahan_utama',
                'spesifikasi_kendaraans.tempat_duduk',
                'spesifikasi_kendaraans.kapasitas_berdiri',
                // Ambil semua kolom yang diperlukan dari tabel uraian_sumbu_kendaraans
                'uraian_sumbu_kendaraans.konfigurasi_sumbu',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_1',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_2',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_3',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_4',
                'uraian_sumbu_kendaraans.konfigurasi_sumbu_5',
                'uraian_sumbu_kendaraans.berat_sumbu_1',
                'uraian_sumbu_kendaraans.berat_sumbu_2',
                'uraian_sumbu_kendaraans.berat_sumbu_3',
                'uraian_sumbu_kendaraans.berat_sumbu_4',
                'uraian_sumbu_kendaraans.berat_sumbu_5',
                'uraian_sumbu_kendaraans.berat_sumbu_6',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_1',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_2',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_3',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_4',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_5',
                'uraian_sumbu_kendaraans.pemakaian_sumbu_6',
                'uraian_sumbu_kendaraans.daya_sumbu_1',
                'uraian_sumbu_kendaraans.daya_sumbu_2',
                'uraian_sumbu_kendaraans.daya_sumbu_3',
                'uraian_sumbu_kendaraans.daya_sumbu_4',
                'uraian_sumbu_kendaraans.daya_sumbu_5',
                'uraian_sumbu_kendaraans.daya_sumbu_6'
            )
            ->where('kendaraans.id', $kendaraanId)
            ->first();

        // Jika kendaraan tidak ditemukan, kembalikan respons 404
        if (!$kendaraan) {
            return response()->json(['message' => 'Kendaraan tidak ditemukan'], 404);
        }

        // Helper untuk mapping jenis bahan bakar (contoh sederhana)
        $jenisBahanBakarMap = [
            1 => 'Bensin',
            2 => 'Solar',
            3 => 'CNG/LPG',
            4 => 'Listrik',
            5 => 'Lain Lain',
        ];

        // Muat view Blade untuk PDF dan kirim data kendaraan
        $pdf = Pdf::loadView('kendaraan_detail_pdf', [
            'kendaraan' => $kendaraan, // Mengirimkan objek kendaraan lengkap ke view
            'jenisBahanBakarMap' => $jenisBahanBakarMap, // Mengirimkan map untuk digunakan di view
        ]);

        // Atur ukuran kertas ke A4 (atau 'letter', dll.) dan orientasi ('portrait' atau 'landscape')
        // Contoh: $pdf->setPaper('A4', 'landscape');

        // Mengatur nama file untuk diunduh
        $fileName = 'kartu_induk_kendaraan_' . ($kendaraan->nomor_uji ?? $kendaraanId) . '_' . date('Ymd_His') . '.pdf';

        // Mengembalikan PDF sebagai unduhan
        return $pdf->download($fileName);
    }
}
