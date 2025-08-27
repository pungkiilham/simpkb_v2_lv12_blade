{{-- resources/views/pages/masterKendaraan/components/ubah2.blade.php --}}
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
                        value="{{ old('sertifikat_registrasi_nomor', $kendaraan->sertifikat_registrasi_nomor) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('sertifikat_registrasi_nomor')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_registrasi_penerbit"
                            value="{{ old('sertifikat_registrasi_penerbit', $kendaraan->sertifikat_registrasi_penerbit) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_registrasi_penerbit')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="sertifikat_registrasi_tanggal"
                            value="{{ old('sertifikat_registrasi_tanggal', $kendaraan->sertifikat_registrasi_tanggal) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_registrasi_tanggal')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- SUTK (Sertifikat Uji Tipe Kendaraan) -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Uji Tipe Kendaraan</label>
                    <input type="text" name="sertifikat_uji_nomor"
                        value="{{ old('sertifikat_uji_nomor', $kendaraan->sertifikat_uji_nomor) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('sertifikat_uji_nomor')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_uji_penerbit"
                            value="{{ old('sertifikat_uji_penerbit', $kendaraan->sertifikat_uji_penerbit) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_uji_penerbit')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="sertifikat_uji_tanggal"
                            value="{{ old('sertifikat_uji_tanggal', $kendaraan->sertifikat_uji_tanggal) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_uji_tanggal')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Rancang Bangun (Sertifikat Rancang Bangun) -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Rancang Bangun</label>
                    <input type="text" name="sertifikat_rancang_nomor"
                        value="{{ old('sertifikat_rancang_nomor', $kendaraan->sertifikat_rancang_nomor) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('sertifikat_rancang_nomor')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="sertifikat_rancang_penerbit"
                            value="{{ old('sertifikat_rancang_penerbit', $kendaraan->sertifikat_rancang_penerbit) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_rancang_penerbit')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="sertifikat_rancang_tanggal"
                            value="{{ old('sertifikat_rancang_tanggal', $kendaraan->sertifikat_rancang_tanggal) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('sertifikat_rancang_tanggal')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kemampuan Kendaraan -->
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
                            value="{{ old('berat_kosong', $kendaraan->berat_kosong) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('berat_kosong')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKB (Kg)</label>
                        <input type="number" name="jumlah_berat_diizinkan"
                            value="{{ old('jumlah_berat_diizinkan', $kendaraan->jumlah_berat_diizinkan) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('jumlah_berat_diizinkan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBI (Kg)</label>
                        <input type="number" name="muatan_sumbu_terberat"
                            value="{{ old('muatan_sumbu_terberat', $kendaraan->muatan_sumbu_terberat) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('muatan_sumbu_terberat')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKI (Kg)</label>
                        <input type="number" name="jumlah_berat_kombinasi_diizinkan"
                            value="{{ old('jumlah_berat_kombinasi_diizinkan', $kendaraan->jumlah_berat_kombinasi_diizinkan) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('jumlah_berat_kombinasi_diizinkan')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
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
                            value="{{ old('tempat_duduk', $kendaraan->tempat_duduk) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('tempat_duduk')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Barang (Kg)</label>
                        <input type="number" name="daya_angkut_barang"
                            value="{{ old('daya_angkut_barang', $kendaraan->daya_angkut_barang) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('daya_angkut_barang')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Kelas Jalan -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelas Jalan</label>
                <input type="text" name="kelas_jalan"
                    value="{{ old('kelas_jalan', $kendaraan->kelas_jalan) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('kelas_jalan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- MST -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">MST</label>
                <input type="text" name="mst"
                    value="{{ old('mst', $kendaraan->mst) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('mst')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Ukuran -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Ukuran</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Q/R</label>
                        <input type="text" name="ukuran_qr"
                            value="{{ old('ukuran_qr', $kendaraan->ukuran_qr) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('ukuran_qr')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">P1</label>
                        <input type="text" name="ukuran_p1"
                            value="{{ old('ukuran_p1', $kendaraan->ukuran_p1) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('ukuran_p1')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">P2</label>
                        <input type="text" name="ukuran_p2"
                            value="{{ old('ukuran_p2', $kendaraan->ukuran_p2) }}"
                            class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        @error('ukuran_p2')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
