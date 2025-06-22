<div class="space-y-8">
    <!-- Sertifikasi Kendaraan -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">2. Sertifikasi Kendaraan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- SRUT -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Registrasi Uji Tipe Kendaraan</label>
                    <input type="text" name="nomor_srut" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="penerbit_srut" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="tanggal_srut" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                </div>
            </div>

            <!-- SUTK -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Uji Tipe Kendaraan</label>
                    <input type="text" name="nomor_sutk" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="penerbit_sutk" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="tanggal_sutk" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                </div>
            </div>

            <!-- Rancang Bangun -->
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Sertifikat Rancang Bangun</label>
                    <input type="text" name="nomor_srb" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Diterbitkan Oleh</label>
                        <input type="text" name="penerbit_srb" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                        <input type="date" name="tanggal_srb" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
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
                        <input type="number" name="jbb" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKB (Kg)</label>
                        <input type="number" name="jbkb" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBI (Kg)</label>
                        <input type="number" name="jbi" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">JBKI (Kg)</label>
                        <input type="number" name="jbki" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                </div>
            </div>

            <!-- Daya Angkut -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Daya Angkut</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Orang</label>
                        <input type="number" name="daya_angkut_orang" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Barang (Kg)</label>
                        <input type="number" name="daya_angkut_barang" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                </div>
            </div>

            <!-- Kelas Jalan -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelas Jalan</label>
                <input type="text" name="kelas_jalan" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
            </div>

            <!-- MST -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">MST</label>
                <input type="text" name="mst" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
            </div>

            <!-- Ukuran -->
            <div class="md:col-span-2">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Ukuran</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">q/r</label>
                        <input type="text" name="ukuran_qr" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">p1</label>
                        <input type="text" name="ukuran_p1" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">p2</label>
                        <input type="text" name="ukuran_p2" class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
