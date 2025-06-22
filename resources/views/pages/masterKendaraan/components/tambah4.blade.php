<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">5. Uraian Sumbu</h2>
    <div class="grid grid-cols-1 gap-6">
        <!-- Konfigurasi Sumbu -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Konfigurasi Sumbu</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I-II (mm)</label>
                    <input type="number" name="jarak_sumbu_1_2" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II-III (mm)</label>
                    <input type="number" name="jarak_sumbu_2_3" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III-IV (mm)</label>
                    <input type="number" name="jarak_sumbu_3_4" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu IV-V</label>
                    <input type="number" name="jarak_sumbu_4_5" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Sumbu V-VI</label>
                    <input type="number" name="jarak_sumbu_5_6" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Berat Kendaraan Per Sumbu -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Berat Kendaraan Per Sumbu (Kg)</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="number" name="berat_sumbu_1" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="berat_sumbu_2" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="berat_sumbu_3" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="berat_sumbu_4" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Berat Kosong</label>
                    <input type="number" name="berat_kosong" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Pemakaian Sumbu Ban -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Pemakaian Sumbu Ban</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="text" name="sumbu_ban_1" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="text" name="sumbu_ban_2" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="text" name="sumbu_ban_3" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="text" name="sumbu_ban_4" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Daya Dukung Sesuai Pabrik -->
        <div>
            <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Dukung Sesuai Pabrik</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu I</label>
                    <input type="number" name="daya_dukung_1" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu II</label>
                    <input type="number" name="daya_dukung_2" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu III</label>
                    <input type="number" name="daya_dukung_3" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sumbu IV</label>
                    <input type="number" name="daya_dukung_4" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>
    </div>
</div>
