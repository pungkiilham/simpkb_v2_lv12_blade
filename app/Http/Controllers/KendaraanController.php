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
        $perPage = $request->input('per_page', 25);
        $asalFilter = $request->input('asal_filter');
        $statusFilter = $request->input('status_filter');

        $query = DB::table('kendaraans')
            ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.id as kendaraan_id', 'kendaraans.nomor_uji', 'kendaraans.nomor_kendaraan',
                'kendaraans.nama_pemilik', 'kendaraans.merk', 'kendaraans.tipe',
                'kendaraans.keterangan_jenis_kendaraan', 'kendaraans.tanggal_mati_uji',
                'kendaraans.kabupaten', 'kendaraans.status' // Pastikan kolom kabupaten dan status ada di sini
            );

        // Terapkan filter 'Asal' (kabupaten)
        if ($asalFilter && $asalFilter !== 'all') {
            $query->where('kendaraans.kabupaten', $asalFilter);
        }

        // Terapkan filter 'Status'
        if ($statusFilter && $statusFilter !== 'all') {
            if ($statusFilter === 'Habis Uji') {
                // Asumsi 'Habis Uji' berarti tanggal_mati_uji sudah lewat
                $query->where('kendaraans.tanggal_mati_uji', '<', Carbon::now());
            } else if ($statusFilter === 'Aktif') {
                // Asumsi 'Aktif' berarti tanggal_mati_uji belum lewat
                $query->where('kendaraans.tanggal_mati_uji', '>=', Carbon::now());
            } else if ($statusFilter === 'Non-aktif') {
                // Asumsi 'Non-aktif' berarti status memang 'Non-aktif' di kolom status
                $query->where('kendaraans.status', 'Non-aktif');
            }
            // Jika ada nilai status lain di database, Anda bisa menambahkannya di sini
        }


        $dataKendaraan = $query->paginate($perPage);

        return view('pages.masterKendaraan.semua', [
            'kendaraanData' => $dataKendaraan,
            'asalFilter' => $asalFilter, // Kirim kembali nilai filter ke view
            'statusFilter' => $statusFilter, // Kirim kembali nilai filter ke view
        ]);
    }

    /**
     * Menampilkan data kendaraan spesifik beserta detail dari tabel terkait.
     * Data diambil berdasarkan 'kendaraanId' yang diberikan.
     *
     * @param  string  $kendaraanId ID dari kendaraan yang ingin dicari.
     * @return \Illuminate\Http\Response
     */
    public function showSpecificKendaraanData(string $kendaraanId)
    {
        // Query untuk mencari kendaraan spesifik dan menggabungkannya
        // dengan tabel terkait. Menggunakan kendaraans.* untuk memastikan semua kolom dari
        // tabel kendaraans diambil.
        $kendaraan = DB::table('kendaraans')
            ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.*', // Mengambil semua kolom dari tabel 'kendaraans'
                'kendaraans.id as kendaraan_id', // Alias ID kendaraan utama
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
                'spesifikasi_kendaraans.berat_kosong', // DITAMBAHKAN
                'spesifikasi_kendaraans.jumlah_berat_diizinkan', // DITAMBAHKAN
                'spesifikasi_kendaraans.muatan_sumbu_terberat', // DITAMBAHKAN
                'spesifikasi_kendaraans.jumlah_berat_kombinasi_diizinkan', // DITAMBAHKAN
                'spesifikasi_kendaraans.daya_angkut_barang', // DITAMBAHKAN
                'spesifikasi_kendaraans.kelas_jalan', // DITAMBAHKAN
                'spesifikasi_kendaraans.mst', // DITAMBAHKAN
                'spesifikasi_kendaraans.ukuran_qr', // DITAMBAHKAN
                'spesifikasi_kendaraans.ukuran_p1', // DITAMBAHKAN
                'spesifikasi_kendaraans.ukuran_p2', // DITAMBAHKAN
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
                'daya_sumbu_1',
                'daya_sumbu_2',
                'daya_sumbu_3',
                'daya_sumbu_4',
                'daya_sumbu_5',
                'daya_sumbu_6'
            )
            ->where('kendaraans.id', $kendaraanId)
            ->first();

        // Jika kendaraan tidak ditemukan, kembalikan respons 404
        if (!$kendaraan) {
            abort(404, 'Data kendaraan tidak ditemukan.');
        }

        // Mengembalikan data kendaraan spesifik ke view 'pages.masterKendaraan.lihat'
        return view('pages.masterKendaraan.lihat', ['kendaraan' => $kendaraan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Logika untuk menampilkan formulir pembuatan kendaraan baru
        return view('pages.masterKendaraan.tambah'); // Contoh view
    }

    /**
     * Menambahkan data kendaraan baru beserta detail terkaitnya ke database.
     * Melakukan validasi input dan menggunakan transaksi database.
     *
     * @param  \Illuminate\Http\Request  $request Data input dari form/API.
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input dari request. Tambahkan semua aturan validasi yang diperlukan.
        $request->validate([
            'nomor_uji' => 'required|string|max:50',
            'nomor_kendaraan' => 'required|string|max:50',
            'nama_pemilik' => 'required|string|max:50',
            "nomor_identitas" => 'required|string|max:50',
            'nomor_rangka' => 'required|string|unique:kendaraans,nomor_rangka|max:50',
            'jenis_kendaraan_id' => 'required|integer',
            'tanggal_mati_uji' => 'required|date',
            // --- Aturan validasi tambahan untuk field nullable ---
            'jenis_pemilik_id' => 'nullable|integer',
            'jenis_identitas' => 'nullable|string|max:50',
            'nomor_identitas' => 'nullable|string|max:50',
            'tempat_lahir' => 'nullable|string|max:50',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string|max:50',
            'alamat_pemilik' => 'nullable|string|max:500',
            'rt' => 'nullable|string|max:5',
            'rw' => 'nullable|string|max:5',
            'kelurahan' => 'nullable|string|max:50',
            'kecamatan' => 'nullable|string|max:50',
            'kabupaten' => 'nullable|string|max:50',
            'provinsi' => 'nullable|string|max:50',
            'awal_pakai' => 'nullable|string|max:50',
            'tahun' => 'nullable|string|max:5',
            'nomor_mesin' => 'nullable|string|max:50',
            'nomor_wa' => 'nullable|string|max:50',
            'keterangan_jenis_kendaraan' => 'nullable|string|max:50',
            'status' => 'nullable|string|max:50',
            'merk' => 'nullable|string|max:50',
            'tipe' => 'nullable|string|max:50',
            'nama_importir' => 'nullable|string|max:50',
            'tanggal_uji' => 'nullable|date',

            // Validasi untuk sertifikasi (dari tambah2)
            'sertifikat_registrasi_nomor' => 'nullable|string|max:50',
            'sertifikat_registrasi_penerbit' => 'nullable|string|max:50',
            'sertifikat_registrasi_tanggal' => 'nullable|date',
            'sertifikat_uji_nomor' => 'nullable|string|max:50',
            'sertifikat_uji_penerbit' => 'nullable|string|max:50',
            'sertifikat_uji_tanggal' => 'nullable|date',
            'sertifikat_rancang_nomor' => 'nullable|string|max:50',
            'sertifikat_rancang_penerbit' => 'nullable|string|max:50',
            'sertifikat_rancang_tanggal' => 'nullable|date',
            // Validasi untuk kemampuan kendaraan (dari tambah2) - asumsi nama kolom
            'berat_kosong' => 'nullable|numeric',
            'jumlah_berat_diizinkan' => 'nullable|numeric',
            'muatan_sumbu_terberat' => 'nullable|numeric',
            'jumlah_berat_kombinasi_diizinkan' => 'nullable|numeric',
            'daya_angkut_orang_spesifikasi' => 'nullable|integer',
            'daya_angkut_barang' => 'nullable|numeric',
            'kelas_jalan' => 'nullable|string|max:50',
            'mst' => 'nullable|string|max:50',
            'ukuran_qr' => 'nullable|string|max:50',
            'ukuran_p1' => 'nullable|string|max:50',
            'ukuran_p2' => 'nullable|string|max:50',

            // Validasi untuk spesifikasi (dari tambah3)
            'kubikasi_mesin' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'daya_mesin' => 'nullable|string|max:50',
            'jenis_bahan_bakar_id' => 'nullable|integer',
            'dimensi_panjang' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'dimensi_lebar' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'dimensi_tinggi' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'bak_panjang' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'bak_lebar' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'bak_tinggi' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'nama_karoseri' => 'nullable|string|max:50',
            'warna_kabin' => 'nullable|string|max:50',
            'warna_bak' => 'nullable|string|max:50',
            'roh' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'foh' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'jarak_terendah' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'jenis_karoseri' => 'nullable|string|max:50',
            'bahan_utama' => 'nullable|string|max:50',
            'tempat_duduk' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru
            'kapasitas_berdiri' => 'nullable|string|max:50', // Mengubah ke string sesuai skema baru

            // Validasi untuk uraian sumbu (dari tambah4)
            'konfigurasi_sumbu' => 'nullable|string|max:50',
            'konfigurasi_sumbu_1' => 'nullable|numeric', // Asumsi ini jarak sumbu 1-2
            'konfigurasi_sumbu_2' => 'nullable|numeric', // Asumsi ini jarak sumbu 2-3
            'konfigurasi_sumbu_3' => 'nullable|numeric', // Asumsi ini jarak sumbu 3-4
            'konfigurasi_sumbu_4' => 'nullable|numeric', // Asumsi ini jarak sumbu 4-5
            'konfigurasi_sumbu_5' => 'nullable|numeric', // Asumsi ini jarak sumbu 5-6
            'berat_sumbu_1' => 'nullable|numeric',
            'berat_sumbu_2' => 'nullable|numeric',
            'berat_sumbu_3' => 'nullable|numeric',
            'berat_sumbu_4' => 'nullable|numeric',
            'berat_sumbu_5' => 'nullable|numeric',
            'berat_sumbu_6' => 'nullable|numeric',
            'pemakaian_sumbu_1' => 'nullable|string|max:50',
            'pemakaian_sumbu_2' => 'nullable|string|max:50',
            'pemakaian_sumbu_3' => 'nullable|string|max:50',
            'pemakaian_sumbu_4' => 'nullable|string|max:50',
            'pemakaian_sumbu_5' => 'nullable|string|max:50',
            'pemakaian_sumbu_6' => 'nullable|string|max:50',
            'daya_sumbu_1' => 'nullable|numeric',
            'daya_sumbu_2' => 'nullable|numeric',
            'daya_sumbu_3' => 'nullable|numeric',
            'daya_sumbu_4' => 'nullable|numeric',
            'daya_sumbu_5' => 'nullable|numeric',
            'daya_sumbu_6' => 'nullable|numeric',
        ]);

        $kendaraanId = Str::uuid()->toString();

        try {
            DB::beginTransaction();

            DB::table('kendaraans')->insert([
                'id' => $kendaraanId,
                'nomor_uji' => $request->nomor_uji,
                'nomor_kendaraan' => $request->nomor_kendaraan,
                'jenis_pemilik_id' => $request->jenis_pemilik_id ?? null,
                'nama_pemilik' => $request->nama_pemilik,
                'jenis_identitas' => $request->jenis_identitas ?? '',
                'nomor_identitas' => $request->nomor_identitas ?? '',
                'tempat_lahir' => $request->tempat_lahir ?? '',
                'tanggal_lahir' => $request->tanggal_lahir ?? null,
                'jenis_kelamin' => $request->jenis_kelamin ?? '',
                'alamat_pemilik' => $request->alamat_pemilik ?? '',
                'rt' => $request->rt ?? '',
                'rw' => $request->rw ?? '',
                'kelurahan' => $request->kelurahan ?? '',
                'kecamatan' => $request->kecamatan ?? '',
                'kabupaten' => $request->kabupaten ?? '',
                'provinsi' => $request->provinsi ?? '',
                'awal_pakai' => $request->awal_pakai ?? '',
                'tahun' => $request->tahun ?? '',
                'nomor_mesin' => $request->nomor_mesin ?? '',
                'nomor_rangka' => $request->nomor_rangka,
                'nomor_wa' => $request->nomor_wa ?? '',
                'jenis_kendaraan_id' => $request->jenis_kendaraan_id,
                'keterangan_jenis_kendaraan' => $request->keterangan_jenis_kendaraan ?? '',
                'status' => $request->status ?? '',
                'merk' => $request->merk ?? '',
                'tipe' => $request->tipe ?? '',
                'nama_importir' => $request->nama_importir ?? '',
                'tanggal_uji' => $request->tanggal_uji ?? null,
                'tanggal_mati_uji' => $request->tanggal_mati_uji,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('sertifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId,
                'sertifikat_registrasi_nomor' => $request->sertifikat_registrasi_nomor ?? '',
                'sertifikat_registrasi_penerbit' => $request->sertifikat_registrasi_penerbit ?? '',
                'sertifikat_registrasi_tanggal' => $request->sertifikat_registrasi_tanggal ?? null,
                'sertifikat_uji_nomor' => $request->sertifikat_uji_nomor ?? '',
                'sertifikat_uji_penerbit' => $request->sertifikat_uji_penerbit ?? '',
                'sertifikat_uji_tanggal' => $request->sertifikat_uji_tanggal ?? null,
                'sertifikat_rancang_nomor' => $request->sertifikat_rancang_nomor ?? '',
                'sertifikat_rancang_penerbit' => $request->sertifikat_rancang_penerbit ?? '',
                'sertifikat_rancang_tanggal' => $request->sertifikat_rancang_tanggal ?? null,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('spesifikasi_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId,
                'kubikasi_mesin' => $request->kubikasi_mesin ?? null,
                'daya_mesin' => $request->daya_mesin ?? '',
                'jenis_bahan_bakar_id' => $request->jenis_bahan_bakar_id ?? null,
                'dimensi_panjang' => $request->dimensi_panjang ?? null,
                'dimensi_lebar' => $request->dimensi_lebar ?? null,
                'dimensi_tinggi' => $request->dimensi_tinggi ?? null,
                'bak_panjang' => $request->bak_panjang ?? null,
                'bak_lebar' => $request->bak_lebar ?? null,
                'bak_tinggi' => $request->bak_tinggi ?? null,
                'nama_karoseri' => $request->nama_karoseri ?? '',
                'warna_kabin' => $request->warna_kabin ?? '',
                'warna_bak' => $request->warna_bak ?? '',
                'roh' => $request->roh ?? null,
                'foh' => $request->foh ?? null,
                'jarak_terendah' => $request->jarak_terendah ?? null,
                'jenis_karoseri' => $request->jenis_karoseri ?? '',
                'bahan_utama' => $request->bahan_utama ?? '',
                'tempat_duduk' => $request->tempat_duduk ?? null,
                'kapasitas_berdiri' => $request->kapasitas_berdiri ?? null,
                'berat_kosong' => $request->berat_kosong ?? null,
                'jumlah_berat_diizinkan' => $request->jumlah_berat_diizinkan ?? null,
                'muatan_sumbu_terberat' => $request->muatan_sumbu_terberat ?? null,
                'jumlah_berat_kombinasi_diizinkan' => $request->jumlah_berat_kombinasi_diizinkan ?? null,
                'daya_angkut_barang' => $request->daya_angkut_barang ?? null,
                'kelas_jalan' => $request->kelas_jalan ?? '',
                'mst' => $request->mst ?? '',
                'ukuran_qr' => $request->ukuran_qr ?? '',
                'ukuran_p1' => $request->ukuran_p1 ?? '',
                'ukuran_p2' => $request->ukuran_p2 ?? '',
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('uraian_sumbu_kendaraans')->insert([
                'id' => Str::uuid()->toString(),
                'kendaraan_id' => $kendaraanId,
                'konfigurasi_sumbu' => $request->konfigurasi_sumbu ?? '',
                'konfigurasi_sumbu_1' => $request->konfigurasi_sumbu_1 ?? null,
                'konfigurasi_sumbu_2' => $request->konfigurasi_sumbu_2 ?? null,
                'konfigurasi_sumbu_3' => $request->konfigurasi_sumbu_3 ?? null,
                'konfigurasi_sumbu_4' => $request->konfigurasi_sumbu_4 ?? null,
                'konfigurasi_sumbu_5' => $request->konfigurasi_sumbu_5 ?? null,
                'berat_sumbu_1' => $request->berat_sumbu_1 ?? null,
                'berat_sumbu_2' => $request->berat_sumbu_2 ?? null,
                'berat_sumbu_3' => $request->berat_sumbu_3 ?? null,
                'berat_sumbu_4' => $request->berat_sumbu_4 ?? null,
                'berat_sumbu_5' => $request->berat_sumbu_5 ?? null,
                'berat_sumbu_6' => $request->berat_sumbu_6 ?? null,
                'pemakaian_sumbu_1' => $request->pemakaian_sumbu_1 ?? '',
                'pemakaian_sumbu_2' => $request->pemakaian_sumbu_2 ?? '',
                'pemakaian_sumbu_3' => $request->pemakaian_sumbu_3 ?? '',
                'pemakaian_sumbu_4' => $request->pemakaian_sumbu_4 ?? '',
                'pemakaian_sumbu_5' => $request->pemakaian_sumbu_5 ?? '',
                'pemakaian_sumbu_6' => $request->pemakaian_sumbu_6 ?? '',
                'daya_sumbu_1' => $request->daya_sumbu_1 ?? null,
                'daya_sumbu_2' => $request->daya_sumbu_2 ?? null,
                'daya_sumbu_3' => $request->daya_sumbu_3 ?? null,
                'daya_sumbu_4' => $request->daya_sumbu_4 ?? null,
                'daya_sumbu_5' => $request->daya_sumbu_5 ?? null,
                'daya_sumbu_6' => $request->daya_sumbu_6 ?? null,
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::commit();
            return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('kendaraan.index')->withInput()->with('error', 'Gagal menambahkan kendaraan: ' . $e->getMessage());
        }
    }

    /**
     * Menampilkan formulir untuk mengedit data kendaraan spesifik.
     * Mengambil data kendaraan berdasarkan ID dan memuat view 'pages.masterKendaraan.ubah'.
     *
     * @param  string  $kendaraanId ID dari kendaraan yang ingin diedit.
     * @return \Illuminate\Http\Response
     */
    public function edit(string $kendaraanId)
    {
        // Mirip dengan showSpecificKendaraanData, kita perlu mengambil semua data terkait
        $kendaraan = DB::table('kendaraans')
            ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
            ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
            ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
            ->select(
                'kendaraans.*', // Mengambil semua kolom dari tabel 'kendaraans'
                'kendaraans.id as kendaraan_id', // Alias ID kendaraan utama
                // Sertifikasi Kendaraan
                'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
                'sertifikasi_kendaraans.sertifikat_registrasi_penerbit',
                'sertifikasi_kendaraans.sertifikat_registrasi_tanggal',
                'sertifikasi_kendaraans.sertifikat_uji_nomor',
                'sertifikasi_kendaraans.sertifikat_uji_penerbit',
                'sertifikasi_kendaraans.sertifikat_uji_tanggal',
                'sertifikasi_kendaraans.sertifikat_rancang_nomor',
                'sertifikasi_kendaraans.sertifikat_rancang_penerbit',
                'sertifikasi_kendaraans.sertifikat_rancang_tanggal',
                // Spesifikasi Kendaraan - KOLOM YANG DIBUTUHKAN UNTUK UBAH2
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
                'spesifikasi_kendaraans.berat_kosong',
                'spesifikasi_kendaraans.jumlah_berat_diizinkan',
                'spesifikasi_kendaraans.muatan_sumbu_terberat',
                'spesifikasi_kendaraans.jumlah_berat_kombinasi_diizinkan',
                'spesifikasi_kendaraans.daya_angkut_barang',
                'spesifikasi_kendaraans.kelas_jalan',
                'spesifikasi_kendaraans.mst',
                'spesifikasi_kendaraans.ukuran_qr',
                'spesifikasi_kendaraans.ukuran_p1',
                'spesifikasi_kendaraans.ukuran_p2',
                // Uraian Sumbu
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
            abort(404, 'Data kendaraan tidak ditemukan.');
        }

        // Muat view 'pages.masterKendaraan.ubah' dan kirim data kendaraan
        return view('pages.masterKendaraan.ubah', ['kendaraan' => $kendaraan]);
    }

    /**
     * Mengupdate data kendaraan dan detail terkaitnya di database.
     * Melakukan validasi input dan menggunakan transaksi database.
     *
     * @param  \Illuminate\Http\Request  $request Data input dari form/API untuk update.
     * @param  string  $kendaraanId ID dari kendaraan yang ingin diupdate.
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $kendaraanId)
    {
        // Validasi input dari request. 'sometimes' digunakan agar kolom tidak wajib
        // ada dalam request, tetapi jika ada, validasi diterapkan.
        $request->validate([
            'nomor_uji' => 'sometimes|string|max:50',
            'nomor_kendaraan' => 'sometimes|string|max:50',
            'nama_pemilik' => 'sometimes|string|max:50',
            'nomor_rangka' => 'sometimes|string|unique:kendaraans,nomor_rangka,' . $kendaraanId . ',id|max:50', // Unique, tapi abaikan ID ini
            'jenis_kendaraan_id' => 'sometimes|integer',
            'tanggal_mati_uji' => 'sometimes|date', // Ini harus required
            // --- Aturan validasi tambahan untuk field nullable ---
            'jenis_pemilik_id' => 'nullable|integer',
            'jenis_identitas' => 'nullable|string|max:50',
            'nomor_identitas' => 'nullable|string|max:50',
            'tempat_lahir' => 'nullable|string|max:50',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string|max:50',
            'alamat_pemilik' => 'nullable|string|max:500',
            'rt' => 'nullable|string|max:5',
            'rw' => 'nullable|string|max:5',
            'kelurahan' => 'nullable|string|max:50',
            'kecamatan' => 'nullable|string|max:50',
            'kabupaten' => 'nullable|string|max:50',
            'provinsi' => 'nullable|string|max:50',
            'awal_pakai' => 'nullable|string|max:50',
            'tahun' => 'nullable|string|max:5',
            'nomor_mesin' => 'nullable|string|max:50',
            'nomor_wa' => 'nullable|string|max:50',
            'keterangan_jenis_kendaraan' => 'nullable|string|max:50',
            'status' => 'nullable|string|max:50',
            'merk' => 'nullable|string|max:50',
            'tipe' => 'nullable|string|max:50',
            'nama_importir' => 'nullable|string|max:50',
            'tanggal_uji' => 'nullable|date',

            // Validasi untuk sertifikasi (dari tambah2)
            'sertifikat_registrasi_nomor' => 'nullable|string|max:50',
            'sertifikat_registrasi_penerbit' => 'nullable|string|max:50',
            'sertifikat_registrasi_tanggal' => 'nullable|date',
            'sertifikat_uji_nomor' => 'nullable|string|max:50',
            'sertifikat_uji_penerbit' => 'nullable|string|max:50',
            'sertifikat_uji_tanggal' => 'nullable|date',
            'sertifikat_rancang_nomor' => 'nullable|string|max:50',
            'sertifikat_rancang_penerbit' => 'nullable|string|max:50',
            'sertifikat_rancang_tanggal' => 'nullable|date',
            // Validasi untuk kemampuan kendaraan (dari tambah2) - asumsi nama kolom
            'berat_kosong' => 'nullable|numeric',
            'jumlah_berat_diizinkan' => 'nullable|numeric',
            'muatan_sumbu_terberat' => 'nullable|numeric',
            'jumlah_berat_kombinasi_diizinkan' => 'nullable|numeric',
            'daya_angkut_orang_spesifikasi' => 'nullable|integer',
            'daya_angkut_barang' => 'nullable|numeric',
            'kelas_jalan' => 'nullable|string|max:50',
            'mst' => 'nullable|string|max:50',
            'ukuran_qr' => 'nullable|string|max:50',
            'ukuran_p1' => 'nullable|string|max:50',
            'ukuran_p2' => 'nullable|string|max:50',

            // Validasi untuk spesifikasi (dari tambah3)
            'kubikasi_mesin' => 'nullable|numeric',
            'daya_mesin' => 'nullable|string|max:50',
            'jenis_bahan_bakar_id' => 'nullable|integer',
            'dimensi_panjang' => 'nullable|numeric',
            'dimensi_lebar' => 'nullable|numeric',
            'dimensi_tinggi' => 'nullable|numeric',
            'bak_panjang' => 'nullable|numeric',
            'bak_lebar' => 'nullable|numeric',
            'bak_tinggi' => 'nullable|numeric',
            'nama_karoseri' => 'nullable|string|max:50',
            'warna_kabin' => 'nullable|string|max:50',
            'warna_bak' => 'nullable|string|max:50',
            'roh' => 'nullable|numeric',
            'foh' => 'nullable|numeric',
            'jarak_terendah' => 'nullable|numeric',
            'jenis_karoseri' => 'nullable|string|max:50',
            'bahan_utama' => 'nullable|string|max:50',
            'kapasitas_berdiri' => 'nullable|integer',

            // Validasi untuk uraian sumbu (dari tambah4)
            'konfigurasi_sumbu' => 'nullable|string|max:50',
            'konfigurasi_sumbu_1' => 'nullable|numeric',
            'konfigurasi_sumbu_2' => 'nullable|numeric',
            'konfigurasi_sumbu_3' => 'nullable|numeric',
            'konfigurasi_sumbu_4' => 'nullable|numeric',
            'konfigurasi_sumbu_5' => 'nullable|numeric',
            'berat_sumbu_1' => 'nullable|numeric',
            'berat_sumbu_2' => 'nullable|numeric',
            'berat_sumbu_3' => 'nullable|numeric',
            'berat_sumbu_4' => 'nullable|numeric',
            'berat_sumbu_5' => 'nullable|numeric',
            'berat_sumbu_6' => 'nullable|numeric',
            'pemakaian_sumbu_1' => 'nullable|string|max:50',
            'pemakaian_sumbu_2' => 'nullable|string|max:50',
            'pemakaian_sumbu_3' => 'nullable|string|max:50',
            'pemakaian_sumbu_4' => 'nullable|string|max:50',
            'pemakaian_sumbu_5' => 'nullable|string|max:50',
            'pemakaian_sumbu_6' => 'nullable|string|max:50',
            'daya_sumbu_1' => 'nullable|numeric',
            'daya_sumbu_2' => 'nullable|numeric',
            'daya_sumbu_3' => 'nullable|numeric',
            'daya_sumbu_4' => 'nullable|numeric',
            'daya_sumbu_5' => 'nullable|numeric',
            'daya_sumbu_6' => 'nullable|numeric',
        ]);

        try {
            DB::beginTransaction();

            // Update data di tabel 'kendaraans'
            $updatedKendaraan = DB::table('kendaraans')
                ->where('id', $kendaraanId)
                ->update([
                    'nomor_uji' => $request->input('nomor_uji', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_uji')),
                    'nomor_kendaraan' => $request->input('nomor_kendaraan', DB::table('kendaraans')->where('id', $kendaraanId)->value('nomor_kendaraan')),
                    'jenis_pemilik_id' => $request->input('jenis_pemilik_id', DB::table('kendaraans')->where('id', $kendaraanId)->value('jenis_pemilik_id')),
                    'nama_pemilik' => $request->input('nama_pemilik', DB::table('kendaraans')->where('id', $kendaraanId)->value('nama_pemilik')),
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

            // Jika tidak ada baris yang terupdate di tabel 'kendaraans', berarti ID tidak ditemukan.
            // Walaupun kolom lain bisa jadi diupdate, kita check yang paling utama.
            // Anda bisa memperluas ini untuk memeriksa update di tabel terkait juga.
            if ($updatedKendaraan === 0) {
                DB::rollBack();
                return redirect()->back()->withInput()->with('error', 'Kendaraan tidak ditemukan atau tidak ada perubahan pada data utama.');
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
                    'berat_kosong' => $request->input('berat_kosong', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('berat_kosong')),
                    'jumlah_berat_diizinkan' => $request->input('jumlah_berat_diizinkan', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('jumlah_berat_diizinkan')),
                    'muatan_sumbu_terberat' => $request->input('muatan_sumbu_terberat', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('muatan_sumbu_terberat')),
                    'jumlah_berat_kombinasi_diizinkan' => $request->input('jumlah_berat_kombinasi_diizinkan', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('jumlah_berat_kombinasi_diizinkan')),
                    'daya_angkut_barang' => $request->input('daya_angkut_barang', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('daya_angkut_barang')),
                    'kelas_jalan' => $request->input('kelas_jalan', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('kelas_jalan')),
                    'mst' => $request->input('mst', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('mst')),
                    'ukuran_qr' => $request->input('ukuran_qr', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('ukuran_qr')),
                    'ukuran_p1' => $request->input('ukuran_p1', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('ukuran_p1')),
                    'ukuran_p2' => $request->input('ukuran_p2', DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->value('ukuran_p2')),
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

            DB::commit(); // Commit transaksi jika semua update berhasil.
            return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diupdate!');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback transaksi jika terjadi error.
            return redirect()->back()->withInput()->with('error', 'Gagal mengupdate kendaraan: ' . $e->getMessage());
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
            DB::beginTransaction();

            // Hapus data terkait terlebih dahulu dari tabel anak
            DB::table('sertifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();
            DB::table('spesifikasi_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();
            DB::table('uraian_sumbu_kendaraans')->where('kendaraan_id', $kendaraanId)->delete();

            // Kemudian hapus data kendaraan utama
            $deleted = DB::table('kendaraans')->where('id', $kendaraanId)->delete();

            if ($deleted === 0) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Kendaraan tidak ditemukan atau gagal dihapus.');
            }

            DB::commit();
            return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Gagal menghapus kendaraan: ' . $e->getMessage());
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
        $fileName = 'data_kendaraan_' . now()->format('Ymd_His') . '.csv';

        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        // Definisikan heading untuk CSV. Ini adalah nama kolom yang akan ditampilkan di file CSV.
        // Urutan ini SANGAT penting dan harus sesuai dengan urutan kolom di array $selectColumns.
        $csvHeaders = [
            // Kolom dari tabel 'kendaraans' (berdasarkan seeder)
            'No. Uji',
            'No. Kendaraan (Plat Nomor)',
            'Jenis Pemilik ID', // ID, jika ingin nama perlu join ke tabel 'jenis_pemilik'
            'Nama Pemilik',
            'Jenis Identitas',
            'Nomor Identitas (KTP/NPWP)',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat Pemilik',
            'RT',
            'RW',
            'Kelurahan',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'Awal Pakai',
            'Tahun Pembuatan', // Menggunakan 'tahun' dari DB, display 'Tahun Pembuatan'
            'Nomor Mesin',
            'Nomor Rangka',
            'Nomor WhatsApp', // Menggunakan 'nomor_wa' dari DB
            'Jenis Kendaraan ID', // ID, jika ingin nama perlu join ke tabel 'jenis_kendaraan'
            'Keterangan Jenis Kendaraan',
            'Status', // Status kendaraan (Umum/Tidak Umum)
            'Merk',
            'Tipe',
            'Nama Importir',
            'Tanggal Uji',
            'Tanggal Mati Uji',
            'Aktif', // Status aktif kendaraan (0/1)

            // Kolom dari 'sertifikasi_kendaraans'
            'Sertifikat Registrasi Nomor',
            'Sertifikat Registrasi Penerbit',
            'Sertifikat Registrasi Tanggal',
            'Sertifikat Uji Nomor',
            'Sertifikat Uji Penerbit',
            'Sertifikat Uji Tanggal',
            'Sertifikat Rancang Nomor',
            'Sertifikat Rancang Penerbit',
            'Sertifikat Rancang Tanggal',

            // Kolom dari 'spesifikasi_kendaraans'
            'Kubikasi Mesin',
            'Daya Mesin',
            'Jenis Bahan Bakar ID', // ID, jika ingin nama perlu join ke tabel 'jenis_bahan_bakar'
            'Dimensi Panjang',
            'Dimensi Lebar',
            'Dimensi Tinggi',
            'Bak Panjang',
            'Bak Lebar',
            'Bak Tinggi',
            'Nama Karoseri',
            'Warna Kabin',
            'Warna Bak',
            'ROH (Spesifikasi)',
            'FOH (Spesifikasi)',
            'Jarak Terendah',
            'Jenis Karoseri',
            'Bahan Utama',
            'Tempat Duduk',
            'Kapasitas Berdiri',
            'Berat Kosong',
            'Jumlah Berat Diizinkan',
            'Muatan Sumbu Terberat',
            'Jumlah Berat Kombinasi Diizinkan',
            'Daya Angkut Barang',
            'Kelas Jalan',
            'MST',
            'Ukuran QR',
            'Ukuran P1',
            'Ukuran P2',

            // Kolom dari 'uraian_sumbu_kendaraans'
            'Konfigurasi Sumbu',
            'Konfigurasi Sumbu 1',
            'Konfigurasi Sumbu 2',
            'Konfigurasi Sumbu 3',
            'Konfigurasi Sumbu 4',
            'Konfigurasi Sumbu 5',
            'Berat Sumbu 1',
            'Berat Sumbu 2',
            'Berat Sumbu 3',
            'Berat Sumbu 4',
            'Berat Sumbu 5',
            'Berat Sumbu 6',
            'Pemakaian Sumbu 1',
            'Pemakaian Sumbu 2',
            'Pemakaian Sumbu 3',
            'Pemakaian Sumbu 4',
            'Pemakaian Sumbu 5',
            'Pemakaian Sumbu 6',
            'Daya Sumbu 1',
            'Daya Sumbu 2',
            'Daya Sumbu 3',
            'Daya Sumbu 4',
            'Daya Sumbu 5',
            'Daya Sumbu 6',
        ];

        // Definisikan daftar kolom yang akan di-SELECT dari database.
        // Ini harus sesuai persis dengan nama kolom di database Anda (termasuk prefix tabel).
        // Urutan ini harus sama dengan $csvHeaders.
        $selectColumns = [
            // Kolom dari 'kendaraans' (berdasarkan seeder dan permintaan eksklusi ID)
            'kendaraans.nomor_uji',
            'kendaraans.nomor_kendaraan',
            'kendaraans.jenis_pemilik_id',
            'kendaraans.nama_pemilik',
            'kendaraans.jenis_identitas',
            'kendaraans.nomor_identitas', // Ini adalah 'No. KTP Pemilik'
            'kendaraans.tempat_lahir',
            'kendaraans.tanggal_lahir',
            'kendaraans.jenis_kelamin',
            'kendaraans.alamat_pemilik',
            'kendaraans.rt',
            'kendaraans.rw',
            'kendaraans.kelurahan',
            'kendaraans.kecamatan',
            'kendaraans.kabupaten',
            'kendaraans.provinsi',
            'kendaraans.awal_pakai',
            'kendaraans.tahun', // Ini adalah 'Tahun Pembuatan'
            'kendaraans.nomor_mesin',
            'kendaraans.nomor_rangka',
            'kendaraans.nomor_wa', // Ini adalah 'No. Telp. Pemilik'
            'kendaraans.jenis_kendaraan_id',
            'kendaraans.keterangan_jenis_kendaraan',
            'kendaraans.status',
            'kendaraans.merk', // Ini adalah 'Merek Pabrik'
            'kendaraans.tipe', // Ini adalah 'Tipe Kendaraan'
            'kendaraans.nama_importir',
            'kendaraans.tanggal_uji',
            'kendaraans.tanggal_mati_uji',
            'kendaraans.active',

            // Sertifikasi Kendaraan (sesuai dari metode edit Anda)
            'sertifikasi_kendaraans.sertifikat_registrasi_nomor',
            'sertifikasi_kendaraans.sertifikat_registrasi_penerbit',
            'sertifikasi_kendaraans.sertifikat_registrasi_tanggal',
            'sertifikasi_kendaraans.sertifikat_uji_nomor',
            'sertifikasi_kendaraans.sertifikat_uji_penerbit',
            'sertifikasi_kendaraans.sertifikat_uji_tanggal',
            'sertifikasi_kendaraans.sertifikat_rancang_nomor',
            'sertifikasi_kendaraans.sertifikat_rancang_penerbit',
            'sertifikasi_kendaraans.sertifikat_rancang_tanggal',

            // Spesifikasi Kendaraan (sesuai dari metode edit Anda)
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
            'spesifikasi_kendaraans.berat_kosong',
            'spesifikasi_kendaraans.jumlah_berat_diizinkan',
            'spesifikasi_kendaraans.muatan_sumbu_terberat',
            'spesifikasi_kendaraans.jumlah_berat_kombinasi_diizinkan',
            'spesifikasi_kendaraans.daya_angkut_barang',
            'spesifikasi_kendaraans.kelas_jalan',
            'spesifikasi_kendaraans.mst',
            'spesifikasi_kendaraans.ukuran_qr',
            'spesifikasi_kendaraans.ukuran_p1',
            'spesifikasi_kendaraans.ukuran_p2',

            // Uraian Sumbu (sesuai dari metode edit Anda)
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
        ];


        $callback = function () use ($csvHeaders, $selectColumns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $csvHeaders); // Tulis header kolom

            try {
                // Replikasi query join dari metode showSpecificKendaraanData/edit Anda
                $kendaraanData = DB::table('kendaraans')
                    ->leftJoin('sertifikasi_kendaraans', 'kendaraans.id', '=', 'sertifikasi_kendaraans.kendaraan_id')
                    ->leftJoin('spesifikasi_kendaraans', 'kendaraans.id', '=', 'spesifikasi_kendaraans.kendaraan_id')
                    ->leftJoin('uraian_sumbu_kendaraans', 'kendaraans.id', '=', 'uraian_sumbu_kendaraans.kendaraan_id')
                    ->select($selectColumns) // Gunakan daftar kolom yang sudah didefinisikan
                    ->get();

                foreach ($kendaraanData as $data) {
                    $row = [];
                    foreach ($selectColumns as $column) {
                        // Ambil nama kolom setelah titik (misalnya, 'nama_pemilik' dari 'kendaraans.nama_pemilik')
                        $columnName = last(explode('.', $column));

                        // Cek apakah ada kolom yang perlu diformat (khususnya tanggal)
                        if (str_contains($columnName, 'tanggal') || str_contains($columnName, 'created_at') || str_contains($columnName, 'updated_at')) {
                            $row[] = $data->$columnName ? Carbon::parse($data->$columnName)->format('Y-m-d') : '';
                        } elseif ($columnName === 'active') {
                            $row[] = $data->$columnName == 1 ? 'Aktif' : 'Tidak Aktif';
                        } else {
                            $row[] = $data->$columnName;
                        }
                    }
                    fputcsv($file, $row); // Tulis baris data
                }
            } catch (\Exception $e) {
                // Baris ini dihapus seperti yang diminta:
                // Log::error("CSV Export Error: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
                fputcsv($file, ['Error generating CSV: ' . $e->getMessage()]);
            } finally {
                fclose($file);
            }
        };

        return response()->stream($callback, 200, $headers);
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
