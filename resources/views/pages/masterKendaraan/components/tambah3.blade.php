<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">4. Spesifikasi Kendaraan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Daya Mesin -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Mesin</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kubikasi Mesin (CC)</label>
                    <input type="number" name="kubikasi_mesin" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Daya Mesin (PS/KW)</label>
                    <input type="text" name="daya_mesin" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Bahan Bakar</label>
                    <select name="jenis_bahan_bakar" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                        <option value="">Pilih Jenis Bahan Bakar</option>
                        <option value="bensin">Bensin</option>
                        <option value="solar">Solar</option>
                        <option value="gas">Gas</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Dimensi Utama -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Dimensi Utama</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Panjang (mm)</label>
                    <input type="number" name="dimensi_panjang" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lebar (mm)</label>
                    <input type="number" name="dimensi_lebar" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tinggi (mm)</label>
                    <input type="number" name="dimensi_tinggi" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Dimensi Bak Muatan/Tangki -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Dimensi Bak Muatan/Tangki</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Panjang (mm)</label>
                    <input type="number" name="bak_panjang" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lebar (mm)</label>
                    <input type="number" name="bak_lebar" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tinggi (mm)</label>
                    <input type="number" name="bak_tinggi" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Uraian -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Uraian</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Karoseri</label>
                    <input type="text" name="nama_karoseri" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Warna Kabin</label>
                    <input type="text" name="warna_kabin" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Warna Bak</label>
                    <input type="text" name="warna_bak" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Bagian Menjulur -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Bagian Menjulur</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ke Belakang/ROH (mm)</label>
                    <input type="number" name="roh" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Ke Depan/FOH (mm)</label>
                    <input type="number" name="foh" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jarak Terendah (mm)</label>
                    <input type="number" name="jarak_terendah" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>

        <!-- Karoseri -->
        <div class="md:col-span-2">
            <h3 class="text-sm font-medium text-gray-700 mb-3">Karoseri</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis</label>
                    <input type="text" name="karoseri_jenis" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bahan Utama</label>
                    <input type="text" name="karoseri_bahan" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Duduk</label>
                    <input type="number" name="tempat_duduk" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Berdiri</label>
                    <input type="number" name="tempat_berdiri" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
            </div>
        </div>
    </div>
</div>
