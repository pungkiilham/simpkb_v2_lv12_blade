{{-- resources/views/pages/masterKendaraan/components/lihat4.blade.php --}}
<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">5. Uraian Sumbu</h2>
    <div class="grid grid-cols-1 gap-6">
        <!-- Konfigurasi Sumbu (Asumsi ini adalah Jarak Sumbu) -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Konfigurasi Jarak Sumbu (mm)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                {{-- Catatan: Nama input ini (jarak_sumbu_X_Y) tidak secara langsung ada di skema uraian_sumbu_kendaraans.
                     Asumsi Anda akan memetakan ini ke kolom yang sesuai di controller atau menambahkannya.
                     Untuk saat ini, saya akan menggunakan properti placeholder. --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I-II (mm)</label>
                    <input type="number" name="jarak_sumbu_1_2"
                        value="{{ $kendaraan->jarak_sumbu_1_2 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II-III (mm)</label>
                    <input type="number" name="jarak_sumbu_2_3"
                        value="{{ $kendaraan->jarak_sumbu_2_3 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III-IV (mm)</label>
                    <input type="number" name="jarak_sumbu_3_4"
                        value="{{ $kendaraan->jarak_sumbu_3_4 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu IV-V (mm)</label>
                    <input type="number" name="jarak_sumbu_4_5"
                        value="{{ $kendaraan->jarak_sumbu_4_5 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu V-VI (mm)</label>
                    <input type="number" name="jarak_sumbu_5_6"
                        value="{{ $kendaraan->jarak_sumbu_5_6 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
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
                        value="{{ $kendaraan->berat_sumbu_1 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="berat_sumbu_2"
                        value="{{ $kendaraan->berat_sumbu_2 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="berat_sumbu_3"
                        value="{{ $kendaraan->berat_sumbu_3 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="berat_sumbu_4"
                        value="{{ $kendaraan->berat_sumbu_4 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="number" name="berat_sumbu_5"
                        value="{{ $kendaraan->berat_sumbu_5 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="number" name="berat_sumbu_6"
                        value="{{ $kendaraan->berat_sumbu_6 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
            </div>
        </div>

        <!-- Pemakaian Sumbu Ban -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Pemakaian Sumbu Ban</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="text" name="pemakaian_sumbu_1"
                        value="{{ $kendaraan->pemakaian_sumbu_1 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="text" name="pemakaian_sumbu_2"
                        value="{{ $kendaraan->pemakaian_sumbu_2 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="text" name="pemakaian_sumbu_3"
                        value="{{ $kendaraan->pemakaian_sumbu_3 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="text" name="pemakaian_sumbu_4"
                        value="{{ $kendaraan->pemakaian_sumbu_4 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="text" name="pemakaian_sumbu_5"
                        value="{{ $kendaraan->pemakaian_sumbu_5 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="text" name="pemakaian_sumbu_6"
                        value="{{ $kendaraan->pemakaian_sumbu_6 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
            </div>
        </div>

        <!-- Daya Dukung Sesuai Pabrik -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Dukung Sesuai Pabrik (Kg)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="number" name="daya_sumbu_1"
                        value="{{ $kendaraan->daya_sumbu_1 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="daya_sumbu_2"
                        value="{{ $kendaraan->daya_sumbu_2 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="daya_sumbu_3"
                        value="{{ $kendaraan->daya_sumbu_3 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="daya_sumbu_4"
                        value="{{ $kendaraan->daya_sumbu_4 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu V</label>
                    <input type="number" name="daya_sumbu_5"
                        value="{{ $kendaraan->daya_sumbu_5 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu VI</label>
                    <input type="number" name="daya_sumbu_6"
                        value="{{ $kendaraan->daya_sumbu_6 ?? '-' }}"
                        class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                        disabled>
                </div>
            </div>
        </div>
    </div>
</div>
