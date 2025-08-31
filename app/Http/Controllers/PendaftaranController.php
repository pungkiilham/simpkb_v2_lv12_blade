<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran; // Assuming you have a Pendaftaran model
use App\Models\Kendaraan; // Assuming you have a Kendaraan model
use App\Models\Pemilik;   // Assuming you have a Pemilik model
use Illuminate\Http\Request;
use Exception;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Peta untuk mengubah status_pendaftaran dari integer menjadi string yang lebih deskriptif.
        $statusMap = [
            0 => 'Menunggu',
            1 => 'Diterima',
            2 => 'Ditolak',
        ];

        // Eager loading relasi yang dibutuhkan:
        // - 'kendaraan' (di dalamnya juga di-eager load 'pemilik')
        // - 'jenisKendaraan'
        // - 'jenisPengujian'
        $pendaftarans = Pendaftaran::with(['kendaraan.pemilik', 'jenisKendaraan', 'jenisPengujian'])->get();

        // Mengubah koleksi data menjadi format yang diinginkan.
        $formattedData = $pendaftarans->map(function ($pendaftaran) use ($statusMap) {
            // Mengakses data melalui relasi yang sudah di-load.
            $kendaraan = $pendaftaran->kendaraan;
            $pemilik = $kendaraan->pemilik ?? null;
            $jenisKendaraan = $pendaftaran->jenisKendaraan;
            $jenisPengujian = $pendaftaran->jenisPengujian;

            return [
                'id' => $pendaftaran->id,
                'nama_pemilik' => $pemilik->nama_pemilik ?? 'N/A',
                'nomor_kendaraan' => $kendaraan->nomor_kendaraan ?? 'N/A',
                'nomor_uji' => $kendaraan->nomor_uji ?? 'N/A',
                'jenis_kendaraan' => $jenisKendaraan->nama_jenis_kendaraan ?? 'N/A',
                'jenis_layanan' => $jenisPengujian->nama_layanan ?? 'N/A',
                'status_pendaftaran' => $pendaftaran->status_pendaftaran,
            ];
        });

        // Perbaikan: Mengirim data ke view dengan nama variabel 'pendaftarans'
        return view('pages.jenisLayanan.pendaftaran.listPendaftaran', ['pendaftarans' => $formattedData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // This method should return the view for adding a new registration form.
        return view('pages.jenisLayanan.pendaftaran.pendaftaran');
    }

    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'nomor_ktp' => 'required|string|max:255',
            'alamat_pemilik' => 'required|string',
            'nomor_whatsapp' => 'nullable|string|max:255',
            'nomor_polisi' => 'required|string|max:255',
            'nomor_mesin' => 'required|string|max:255',
            'jenis_kendaraan' => 'required|string|in:mobil_penumpang,mobil_bus,mobil_barang,kendaraan_khusus',
            'tanggal_mati_uji' => 'required|date',
            'jenis_layanan' => 'required|string|in:baru,berkala,mutasi_keluar,mutasi_masuk,numpang_keluar,numpang_masuk,hilang,rusak,ubah_bentuk,ubah_sifat',
            'tanggal_pengujian' => 'required|date',
            'ganti_kartu' => 'required|string|in:ya,tidak',
            'dikuasakan' => 'required|string|in:ya,tidak',
            'status_pendaftaran' => 'required|string|in:diterima,ditolak',
            'keterangan_ditolak' => 'nullable|string',
        ]);

        try {
            // 2. Create the new Pendaftaran record
            Pendaftaran::create($validatedData);

            // 3. Redirect back with a success message
            return redirect('/listpendaftaran')->with('success', 'Pendaftaran berhasil disimpan.');
        } catch (\Exception $e) {
            // Log the error for debugging
            // \Log::error('Failed to create pendaftaran: ' . $e->getMessage());

            // Redirect back with an error message
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        // This method shows the details of a single registration.
        // The Pendaftaran model is automatically fetched by Laravel (Route Model Binding).
        return view('pendaftaran.show', compact('pendaftaran'));
    }

    public function searchKendaraan(Request $request)
    {
        // Set ke TRUE untuk melihat pesan error spesifik, lalu kembalikan ke FALSE setelah selesai.
        $debugMode = true;

        try {
            $searchValue = $request->query('search_value');

            // Cek jika input pencarian kosong
            if (empty($searchValue)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Nilai pencarian tidak boleh kosong.'
                ], 400); // 400 Bad Request
            }

            // Cari data kendaraan berdasarkan nomor_uji atau nomor_rangka
            $kendaraan = Kendaraan::where('nomor_uji', 'like', "%{$searchValue}%")
                ->orWhere('nomor_rangka', 'like', "%{$searchValue}%")
                ->first();

            if ($kendaraan) {
                // Buat objek data yang sesuai dengan permintaan, langsung dari objek kendaraan
                $responseData = [
                    'nama_pemilik' => $kendaraan->nama_pemilik,
                    'no_ktp' => $kendaraan->nomor_identitas,
                    'alamat' => $kendaraan->alamat_pemilik,
                    'no_telpon' => $kendaraan->nomor_wa,
                    'no_polisi' => $kendaraan->nomor_kendaraan,
                    'no_mesin' => $kendaraan->nomor_mesin,
                    'jenis_kendaraan' => $kendaraan->keterangan_jenis_kendaraan,
                    'tanggal_mati_uji' => $kendaraan->tanggal_mati_uji,
                ];

                // Kembalikan data dalam format JSON
                return response()->json([
                    'success' => true,
                    'data' => $responseData
                ]);
            } else {
                // Jika kendaraan tidak ditemukan
                return response()->json([
                    'success' => false,
                    'message' => 'Data kendaraan tidak ditemukan.'
                ], 404); // 404 Not Found
            }

        } catch (Exception $e) {
            // Tangani semua kesalahan dan kembalikan respons JSON
            if ($debugMode) {
                // Saat mode debug aktif, kembalikan pesan error detail
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan server: ' . $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ], 500);
            } else {
                // Saat mode debug non-aktif, kembalikan pesan error umum
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan pada server saat mencari data.'
                ], 500); // 500 Internal Server Error
            }
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        // This method shows the form to edit an existing registration.
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        // Validate and update the data
        $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20',
            // Add other validation rules here
        ]);

        $pendaftaran->update($request->all());

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        // Delete the registration record
        $pendaftaran->delete();

        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil dihapus!');
    }
}
