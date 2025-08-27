{{-- resources/views/pages/masterKendaraan/components/lihat2.blade.php --}}
<div class="space-y-8">
    <!-- Sertifikasi Kendaraan -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">2. Sertifikasi Kendaraan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- SRUT (Sertifikat Registrasi Uji Tipe) -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Registrasi Uji Tipe Kendaraan</label>
                    <input type="text" name="sertifikat_registrasi_nomor"
                        value="{{ $kendaraan->sertifikat_registrasi_nomor ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_registrasi_penerbit"
                            value="{{ $kendaraan->sertifikat_registrasi_penerbit ?? '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="text" name="sertifikat_registrasi_tanggal"
                            value="{{ (isset($kendaraan->sertifikat_registrasi_tanggal) && $kendaraan->sertifikat_registrasi_tanggal && $kendaraan->sertifikat_registrasi_tanggal != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->sertifikat_registrasi_tanggal)->format('d/m/Y') : '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>

            <!-- SUTK (Sertifikat Uji Tipe Kendaraan) -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Uji Tipe Kendaraan</label>
                    <input type="text" name="sertifikat_uji_nomor"
                        value="{{ $kendaraan->sertifikat_uji_nomor ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_uji_penerbit"
                            value="{{ $kendaraan->sertifikat_uji_penerbit ?? '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="text" name="sertifikat_uji_tanggal"
                            value="{{ (isset($kendaraan->sertifikat_uji_tanggal) && $kendaraan->sertifikat_uji_tanggal && $kendaraan->sertifikat_uji_tanggal != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->sertifikat_uji_tanggal)->format('d/m/Y') : '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>

            <!-- Rancang Bangun (Sertifikat Rancang Bangun) -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Rancang Bangun</label>
                    <input type="text" name="sertifikat_rancang_nomor"
                        value="{{ $kendaraan->sertifikat_rancang_nomor ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_rancang_penerbit"
                            value="{{ $kendaraan->sertifikat_rancang_penerbit ?? '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="text" name="sertifikat_rancang_tanggal"
                            value="{{ (isset($kendaraan->sertifikat_rancang_tanggal) && $kendaraan->sertifikat_rancang_tanggal && $kendaraan->sertifikat_rancang_tanggal != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->sertifikat_rancang_tanggal)->format('d/m/Y') : '-' }}"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kemampuan Kendaraan (Ini adalah data dari spesifikasi_kendaraans atau bisa juga uraian_sumbu_kendaraans) -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">3. Kemampuan Kendaraan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Jumlah Berat Yang Diperbolehkan -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Jumlah Berat Yang Diperbolehkan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBB (Kg)</label>
                        <input type="number" name="berat_kosong"
                            value="{{ $kendaraan->berat_kosong ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKB (Kg)</label>
                        <input type="number" name="jumlah_berat_diizinkan"
                            value="{{ $kendaraan->jumlah_berat_diizinkan ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBI (Kg)</label>
                        <input type="number" name="muatan_sumbu_terberat"
                            value="{{ $kendaraan->berat_sumbu_1 ?? '-' }}" {{-- Menggunakan berat_sumbu_1 sebagai contoh --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                     <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKI (Kg)</label>
                        <input type="number" name="jumlah_berat_kombinasi_diizinkan"
                            value="{{ $kendaraan->jumlah_berat_kombinasi_diizinkan ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>

            <!-- Daya Angkut -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Angkut</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Orang</label>
                        <input type="number" name="tempat_duduk"
                            value="{{ $kendaraan->tempat_duduk ?? '-' }}" {{-- Menggunakan tempat_duduk dari spesifikasi --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Barang (Kg)</label>
                        <input type="number" name="daya_angkut_barang"
                            value="{{ $kendaraan->daya_angkut_barang ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>

            <!-- Kelas Jalan -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelas Jalan</label>
                <input type="text" name="kelas_jalan"
                    value="{{ $kendaraan->kelas_jalan ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                    disabled>
            </div>

            <!-- MST -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">MST</label>
                <input type="text" name="mst"
                    value="{{ $kendaraan->mst ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                    class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                    disabled>
            </div>

            <!-- Ukuran -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Ukuran</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Q/R</label>
                        <input type="text" name="ukuran_qr"
                            value="{{ $kendaraan->ukuran_qr ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">P1</label>
                        <input type="text" name="ukuran_p1"
                            value="{{ $kendaraan->ukuran_p1 ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">P2</label>
                        <input type="text" name="ukuran_p2"
                            value="{{ $kendaraan->ukuran_p2 ?? '-' }}" {{-- Anda perlu memastikan kolom ini ada di query Anda --}}
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
