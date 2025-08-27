{{-- resources/views/pages/masterKendaraan/components/ubah3.blade.php --}}
<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">4. Spesifikasi Kendaraan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Daya Mesin -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Mesin</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kubikasi Mesin (CC)</label>
                    <input type="number" name="kubikasi_mesin"
                        value="{{ old('kubikasi_mesin', $kendaraan->kubikasi_mesin) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('kubikasi_mesin')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Daya Mesin (PS/KW)</label>
                    <input type="text" name="daya_mesin"
                        value="{{ old('daya_mesin', $kendaraan->daya_mesin) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_mesin')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Bahan Bakar</label>
                    <select name="jenis_bahan_bakar_id"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        <option value="">Pilih Jenis Bahan Bakar</option>
                        <option value="1" {{ old('jenis_bahan_bakar_id', $kendaraan->jenis_bahan_bakar_id) == '1' ? 'selected' : '' }}>Bensin</option>
                        <option value="2" {{ old('jenis_bahan_bakar_id', $kendaraan->jenis_bahan_bakar_id) == '2' ? 'selected' : '' }}>Solar</option>
                        <option value="3" {{ old('jenis_bahan_bakar_id', $kendaraan->jenis_bahan_bakar_id) == '3' ? 'selected' : '' }}>CNG/LPG</option>
                        <option value="4" {{ old('jenis_bahan_bakar_id', $kendaraan->jenis_bahan_bakar_id) == '4' ? 'selected' : '' }}>Listrik</option>
                        <option value="5" {{ old('jenis_bahan_bakar_id', $kendaraan->jenis_bahan_bakar_id) == '5' ? 'selected' : '' }}>Lain Lain</option>
                    </select>
                    @error('jenis_bahan_bakar_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Dimensi Utama -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Dimensi Utama</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Panjang (mm)</label>
                    <input type="number" name="dimensi_panjang"
                        value="{{ old('dimensi_panjang', $kendaraan->dimensi_panjang) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('dimensi_panjang')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lebar (mm)</label>
                    <input type="number" name="dimensi_lebar"
                        value="{{ old('dimensi_lebar', $kendaraan->dimensi_lebar) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('dimensi_lebar')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tinggi (mm)</label>
                    <input type="number" name="dimensi_tinggi"
                        value="{{ old('dimensi_tinggi', $kendaraan->dimensi_tinggi) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('dimensi_tinggi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Dimensi Bak Muatan/Tangki -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Dimensi Bak Muatan/Tangki</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Panjang (mm)</label>
                    <input type="number" name="bak_panjang"
                        value="{{ old('bak_panjang', $kendaraan->bak_panjang) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('bak_panjang')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lebar (mm)</label>
                    <input type="number" name="bak_lebar"
                        value="{{ old('bak_lebar', $kendaraan->bak_lebar) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('bak_lebar')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tinggi (mm)</label>
                    <input type="number" name="bak_tinggi"
                        value="{{ old('bak_tinggi', $kendaraan->bak_tinggi) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('bak_tinggi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Uraian -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Uraian</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Karoseri</label>
                    <input type="text" name="nama_karoseri"
                        value="{{ old('nama_karoseri', $kendaraan->nama_karoseri) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('nama_karoseri')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Warna Kabin</label>
                    <input type="text" name="warna_kabin"
                        value="{{ old('warna_kabin', $kendaraan->warna_kabin) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('warna_kabin')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Warna Bak</label>
                    <input type="text" name="warna_bak"
                        value="{{ old('warna_bak', $kendaraan->warna_bak) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('warna_bak')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Bagian Menjulur -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Bagian Menjulur</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">ROH / Belakang (mm)</label>
                    <input type="number" name="roh"
                        value="{{ old('roh', $kendaraan->roh) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('roh')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">FOH / Depan (mm)</label>
                    <input type="number" name="foh"
                        value="{{ old('foh', $kendaraan->foh) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('foh')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Terendah (mm)</label>
                    <input type="number" name="jarak_terendah"
                        value="{{ old('jarak_terendah', $kendaraan->jarak_terendah) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('jarak_terendah')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Karoseri -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Karoseri</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis</label>
                    <input type="text" name="jenis_karoseri"
                        value="{{ old('jenis_karoseri', $kendaraan->jenis_karoseri) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('jenis_karoseri')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bahan Utama</label>
                    <input type="text" name="bahan_utama"
                        value="{{ old('bahan_utama', $kendaraan->bahan_utama) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('bahan_utama')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Duduk</label>
                    <input type="number" name="tempat_duduk"
                        value="{{ old('tempat_duduk', $kendaraan->tempat_duduk) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('tempat_duduk')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Berdiri</label>
                    <input type="number" name="kapasitas_berdiri"
                        value="{{ old('kapasitas_berdiri', $kendaraan->kapasitas_berdiri) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('kapasitas_berdiri')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
