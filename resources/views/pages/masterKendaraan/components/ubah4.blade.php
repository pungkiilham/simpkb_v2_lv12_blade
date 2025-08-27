{{-- resources/views/pages/masterKendaraan/components/ubah4.blade.php --}}
<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">5. Uraian Sumbu</h2>
    <div class="grid grid-cols-1 gap-6">
        <!-- Konfigurasi Sumbu (Jarak Sumbu) -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Konfigurasi Jarak Sumbu (mm)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I-II (mm)</label>
                    <input type="number" name="konfigurasi_sumbu_1"
                        value="{{ old('konfigurasi_sumbu_1', $kendaraan->konfigurasi_sumbu_1) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu_1')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II-III (mm)</label>
                    <input type="number" name="konfigurasi_sumbu_2"
                        value="{{ old('konfigurasi_sumbu_2', $kendaraan->konfigurasi_sumbu_2) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu_2')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III-IV (mm)</label>
                    <input type="number" name="konfigurasi_sumbu_3"
                        value="{{ old('konfigurasi_sumbu_3', $kendaraan->konfigurasi_sumbu_3) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu_3')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu IV-V (mm)</label>
                    <input type="number" name="konfigurasi_sumbu_4"
                        value="{{ old('konfigurasi_sumbu_4', $kendaraan->konfigurasi_sumbu_4) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu_4')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu V-VI (mm)</label>
                    <input type="number" name="konfigurasi_sumbu_5"
                        value="{{ old('konfigurasi_sumbu_5', $kendaraan->konfigurasi_sumbu_5) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu_5')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div> --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Konfigurasi Sumbu</label>
                    <input type="text" name="konfigurasi_sumbu"
                           value="{{ old('konfigurasi_sumbu', $kendaraan->konfigurasi_sumbu) }}"
                           class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('konfigurasi_sumbu')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Berat Kendaraan Per Sumbu -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Berat Kendaraan Per Sumbu (Kg)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="number" name="berat_sumbu_1"
                        value="{{ old('berat_sumbu_1', $kendaraan->berat_sumbu_1) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_1')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="berat_sumbu_2"
                        value="{{ old('berat_sumbu_2', $kendaraan->berat_sumbu_2) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_2')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="berat_sumbu_3"
                        value="{{ old('berat_sumbu_3', $kendaraan->berat_sumbu_3) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_3')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="berat_sumbu_4"
                        value="{{ old('berat_sumbu_4', $kendaraan->berat_sumbu_4) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_4')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Total Berat Sumbu</label>
                    <input type="number" name="berat_sumbu_4"
                        value="{{ $kendaraan->berat_sumbu_4 + $kendaraan->berat_sumbu_3 + $kendaraan->berat_sumbu_2 + $kendaraan->berat_sumbu_1 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="number" name="berat_sumbu_5"
                        value="{{ old('berat_sumbu_5', $kendaraan->berat_sumbu_5) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_5')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="number" name="berat_sumbu_6"
                        value="{{ old('berat_sumbu_6', $kendaraan->berat_sumbu_6) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('berat_sumbu_6')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div> --}}
            </div>
        </div>

        <!-- Pemakaian Sumbu Ban -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Pemakaian Sumbu Ban</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="text" name="pemakaian_sumbu_1"
                        value="{{ old('pemakaian_sumbu_1', $kendaraan->pemakaian_sumbu_1) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_1')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="text" name="pemakaian_sumbu_2"
                        value="{{ old('pemakaian_sumbu_2', $kendaraan->pemakaian_sumbu_2) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_2')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="text" name="pemakaian_sumbu_3"
                        value="{{ old('pemakaian_sumbu_3', $kendaraan->pemakaian_sumbu_3) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_3')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="text" name="pemakaian_sumbu_4"
                        value="{{ old('pemakaian_sumbu_4', $kendaraan->pemakaian_sumbu_4) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_4')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="text" name="pemakaian_sumbu_5"
                        value="{{ old('pemakaian_sumbu_5', $kendaraan->pemakaian_sumbu_5) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_5')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="text" name="pemakaian_sumbu_6"
                        value="{{ old('pemakaian_sumbu_6', $kendaraan->pemakaian_sumbu_6) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('pemakaian_sumbu_6')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div> --}}
            </div>
        </div>

        <!-- Daya Dukung Sesuai Pabrik -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Dukung Sesuai Pabrik (Kg)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="number" name="daya_sumbu_1"
                        value="{{ old('daya_sumbu_1', $kendaraan->daya_sumbu_1) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_1')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="daya_sumbu_2"
                        value="{{ old('daya_sumbu_2', $kendaraan->daya_sumbu_2) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_2')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="daya_sumbu_3"
                        value="{{ old('daya_sumbu_3', $kendaraan->daya_sumbu_3) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_3')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="daya_sumbu_4"
                        value="{{ old('daya_sumbu_4', $kendaraan->daya_sumbu_4) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_4')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="number" name="daya_sumbu_5"
                        value="{{ old('daya_sumbu_5', $kendaraan->daya_sumbu_5) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_5')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="number" name="daya_sumbu_6"
                        value="{{ old('daya_sumbu_6', $kendaraan->daya_sumbu_6) }}"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    @error('daya_sumbu_6')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div> --}}
            </div>
        </div>
    </div>
</div>
