<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kendaraan - {{ $kendaraan->nomor_kendaraan ?? 'N/A' }}</title>
    <style>
        /* Menggunakan Tailwind CSS dari app.css Anda */
        /* Anda mungkin perlu menyesuaikan agar Tailwind berfungsi dengan baik di PDF generation library (misal: Dompdf) */
        @page { margin: 1cm; }
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            font-size: 10pt;
            color: #333;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 20pt;
            margin-bottom: 5px;
            color: #2c3e50;
        }
        .header p {
            font-size: 12pt;
            color: #7f8c8d;
        }
        .section-title {
            font-size: 14pt;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 2px solid #3498db;
            color: #34495e;
        }
        .data-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }
        .data-item {
            display: flex;
            flex-direction: column;
        }
        .data-label {
            font-weight: bold;
            color: #555;
            margin-bottom: 2px;
            font-size: 9pt;
        }
        .data-value {
            font-size: 10pt;
        }
        .text-center {
            text-align: center;
        }
        .qr-code {
            margin-top: 30px;
            text-align: center;
        }
        /* Style untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Detail Kendaraan</h1>
            <p>UPT PKB Kota Batu</p>
        </div>

        <div class="section-title">Data Kendaraan</div>
        <div class="data-grid">
            <div class="data-item">
                <span class="data-label">Nomor Uji:</span>
                <span class="data-value">{{ $kendaraan->nomor_uji ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Nomor Kendaraan:</span>
                <span class="data-value">{{ $kendaraan->nomor_kendaraan ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Merek:</span>
                <span class="data-value">{{ $kendaraan->merk ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tipe:</span>
                <span class="data-value">{{ $kendaraan->tipe ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tahun Pembuatan:</span>
                <span class="data-value">{{ $kendaraan->tahun ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Jenis Kendaraan:</span>
                <span class="data-value">{{ $kendaraan->keterangan_jenis_kendaraan ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tanggal Mati Uji:</span>
                <span class="data-value">{{ $kendaraan->tanggal_mati_uji ? \Carbon\Carbon::parse($kendaraan->tanggal_mati_uji)->format('Y-m-d') : '-' }}</span>
            </div>
        </div>

        <div class="section-title">Data Pemilik</div>
        <div class="data-grid">
            <div class="data-item">
                <span class="data-label">Nama Pemilik:</span>
                <span class="data-value">{{ $kendaraan->nama_pemilik ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Alamat:</span>
                <span class="data-value">{{ $kendaraan->alamat_pemilik ?? '-' }}, {{ $kendaraan->kelurahan ?? '-' }}, {{ $kendaraan->kecamatan ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Nomor Identitas:</span>
                <span class="data-value">{{ $kendaraan->jenis_identitas ?? '-' }} {{ $kendaraan->nomor_identitas ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Nomor WhatsApp:</span>
                <span class="data-value">{{ $kendaraan->nomor_wa ?? '-' }}</span>
            </div>
        </div>

        <div class="section-title">Sertifikasi Kendaraan</div>
        <div class="data-grid">
            <div class="data-item">
                <span class="data-label">No. Sertifikat Registrasi:</span>
                <span class="data-value">{{ $kendaraan->sertifikat_registrasi_nomor ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tanggal Registrasi:</span>
                <span class="data-value">{{ $kendaraan->sertifikat_registrasi_tanggal ? \Carbon\Carbon::parse($kendaraan->sertifikat_registrasi_tanggal)->format('Y-m-d') : '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">No. Sertifikat Uji:</span>
                <span class="data-value">{{ $kendaraan->sertifikat_uji_nomor ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Tanggal Uji:</span>
                <span class="data-value">{{ $kendaraan->sertifikat_uji_tanggal ? \Carbon\Carbon::parse($kendaraan->sertifikat_uji_tanggal)->format('Y-m-d') : '-' }}</span>
            </div>
        </div>

        <div class="section-title">Spesifikasi Kendaraan</div>
        <div class="data-grid">
            <div class="data-item">
                <span class="data-label">Kubikasi Mesin:</span>
                <span class="data-value">{{ $kendaraan->kubikasi_mesin ?? '-' }} cc</span>
            </div>
            <div class="data-item">
                <span class="data-label">Daya Mesin:</span>
                <span class="data-value">{{ $kendaraan->daya_mesin ?? '-' }} KW</span>
            </div>
            <div class="data-item">
                <span class="data-label">Jenis Bahan Bakar ID:</span>
                <span class="data-value">{{ $kendaraan->jenis_bahan_bakar_id ?? '-' }}</span>
            </div>
            <div class="data-item">
                <span class="data-label">Panjang/Lebar/Tinggi:</span>
                <span class="data-value">{{ $kendaraan->dimensi_panjang ?? '-' }}x{{ $kendaraan->dimensi_lebar ?? '-' }}x{{ $kendaraan->dimensi_tinggi ?? '-' }} mm</span>
            </div>
        </div>

        <div class="section-title">Uraian Sumbu</div>
        <table>
            <thead>
                <tr>
                    <th>Konfigurasi Sumbu</th>
                    <th>Berat Sumbu 1</th>
                    <th>Pemakaian Sumbu 1</th>
                    <th>Daya Sumbu 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $kendaraan->konfigurasi_sumbu ?? '-' }}</td>
                    <td>{{ $kendaraan->berat_sumbu_1 ?? '-' }}</td>
                    <td>{{ $kendaraan->pemakaian_sumbu_1 ?? '-' }}</td>
                    <td>{{ $kendaraan->daya_sumbu_1 ?? '-' }}</td>
                </tr>
                {{-- Anda bisa menambahkan baris lain untuk sumbu 2, 3, dst. jika data tersedia --}}
            </tbody>
        </table>

        {{-- Contoh QR Code --}}
        {{-- <div class="qr-code">
            <img src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(100)->generate($kendaraan->nomor_uji ?? 'N/A')) }}" alt="QR Code">
            <p style="font-size: 8pt; margin-top: 5px;">Scan untuk detail lebih lanjut</p>
        </div> --}}

        <div class="text-center" style="margin-top: 50px; color: #7f8c8d;">
            Dokumen ini dibuat secara otomatis pada {{ \Carbon\Carbon::now()->format('d-m-Y H:i:s') }}
        </div>
    </div>
</body>
</html>
