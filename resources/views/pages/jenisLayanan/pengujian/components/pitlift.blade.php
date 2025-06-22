<div class="space-y-8">
    <!-- Sertifikasi Kendaraan -->
    <div class="space-y-6">
        <div class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1">
            <h2 class="text-lg font-bold text-white">4. Pit-lift</h2>
            <button type="submit"
                class="inline-flex items-center p-1 bg-white text-indigo-600 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all text-sm font-semibold gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                </svg>
                Simpan
            </button>
        </div>


        <!-- Nama Penguji -->
        <div class="md:col-span-2 space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Penguji</label>
                    <input type="text" name="penerbit_srut"
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Hasil Pit-lift</label>
                    <select
                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                        <option value="">Pilih</option>
                        <option value="lulus">Lulus</option>
                        <option value="tidak">Tidak Lulus</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- Keterangan Tidak Lulus -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Tidak Lulus</label>
            <textarea name="keterangan_tidak_lulus" rows="3"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"></textarea>
        </div>
    </div>
</div>
