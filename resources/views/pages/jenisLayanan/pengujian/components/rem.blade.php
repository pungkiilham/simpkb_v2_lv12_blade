<div class="space-y-8">
    <!-- Sertifikasi Kendaraan -->
    <div class="space-y-6">
        <div class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1">
            <h2 class="text-lg font-bold text-white">6. Rem</h2>
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


        <!-- Penguji & Status -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-50 p-4 rounded-xl border border-gray-200">
            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1 ml-1">Nama Penguji</label>
                <input type="text" name="nama_penguji"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1.5 px-3"
                    placeholder="Masukkan nama penguji..." required>
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1 ml-1">Hasil Uji Rem</label>
                <select name="hasil_rem"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1.5 px-3 font-semibold">
                    <option value="">-- Pilih Status --</option>
                    <option value="lulus" class="text-green-600 font-bold text-sm">LULUS</option>
                    <option value="tidak" class="text-red-600 font-bold text-sm">TIDAK LULUS</option>
                </select>
            </div>
            <div class="md:col-span-2">
                <label class="block text-xs font-bold text-gray-500 uppercase mb-1 ml-1">Keterangan (Jika Tidak
                    Lulus)</label>
                <textarea name="keterangan_tidak_lulus" rows="2"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-2 px-3 placeholder:text-gray-400"
                    placeholder="Berikan alasan teknis jika kendaraan tidak lulus uji rem..."></textarea>
            </div>
        </div>

        <!-- Daya Rem Grid (L & R) -->
        <div class="space-y-4">
            <div class="flex items-center gap-2 border-b border-gray-100 pb-2">
                <h3 class="text-md font-bold text-gray-800">Daya Rem (KgF / Nm)</h3>
                <span
                    class="text-[10px] bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full font-black uppercase">Technical
                    Data</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                <!-- Sumbu I -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            I - L</label>
                        <input type="number" name="daya_rem_s1_l"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            I - R</label>
                        <input type="number" name="daya_rem_s1_r"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                </div>

                <!-- Sumbu II -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            II - L</label>
                        <input type="number" name="daya_rem_s2_l"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            II - R</label>
                        <input type="number" name="daya_rem_s2_r"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                </div>

                <!-- Sumbu III -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            III - L</label>
                        <input type="number" name="daya_rem_s3_l"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            III - R</label>
                        <input type="number" name="daya_rem_s3_r"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                </div>

                <!-- Sumbu IV -->
                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            IV - L</label>
                        <input type="number" name="daya_rem_s4_l"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-tighter mb-1">Sumbu
                            IV - R</label>
                        <input type="number" name="daya_rem_s4_r"
                            class="w-full rounded-lg border-2 border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all py-1 px-2 text-sm font-semibold">
                    </div>
                </div>

                <!-- Sumbu Parkir -->
                <div class="grid grid-cols-2 gap-3 md:col-span-2 pt-2 border-t border-dashed border-gray-200">
                    <div>
                        <label
                            class="block text-[10px] font-black text-indigo-500 uppercase tracking-tighter mb-1">Sumbu
                            Parkir - L</label>
                        <input type="number" name="daya_rem_parkir_l"
                            class="w-full rounded-lg border-2 border-indigo-100 bg-indigo-50/30 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition-all py-1 px-2 text-sm font-bold text-indigo-700">
                    </div>
                    <div>
                        <label
                            class="block text-[10px] font-black text-indigo-500 uppercase tracking-tighter mb-1">Sumbu
                            Parkir - R</label>
                        <input type="number" name="daya_rem_parkir_r"
                            class="w-full rounded-lg border-2 border-indigo-100 bg-indigo-50/30 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 outline-none transition-all py-1 px-2 text-sm font-bold text-indigo-700">
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
