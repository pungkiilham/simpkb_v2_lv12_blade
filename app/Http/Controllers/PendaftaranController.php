<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran; // Assuming you have a Pendaftaran model
use Illuminate\Http\Request;

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
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'no_polisi' => 'required|string|max:20',
            // Add other validation rules here
        ]);

        // Create a new Pendaftaran record in the database
        Pendaftaran::create($request->all());

        // Redirect back to the index page with a success message
        return redirect()->route('pendaftaran.index')->with('success', 'Pendaftaran berhasil ditambahkan!');
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
