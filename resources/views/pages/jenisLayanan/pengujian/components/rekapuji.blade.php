<div class="space-y-8">
    <!-- Sertifikasi Kendaraan -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">Rekap
            Uji</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Status Display -->
            <div class="md:col-span-2 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Verifikator</label>
                        <input type="text" name="verifikator_name" value="-"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 focus:outline-none"
                            readonly>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status Uji</label>
                        <input type="text" name="status_uji" value="Menunggu Persetujuan"
                            class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 py-1 px-2 font-bold text-gray-800 focus:outline-none"
                            readonly>
                    </div>
                </div>
            </div>

            <!-- Penguji Approval Section -->
            <div class="md:col-span-2 space-y-4 p-4 border-2 border-dashed border-gray-300 rounded-lg">
                <h3 class="text-base font-semibold text-gray-800">Persetujuan Penguji</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Penguji 1: Needs approval -->
                    <div class="flex flex-col items-center p-3 border border-gray-200 rounded-lg shadow-sm">
                        <span class="font-medium text-sm text-gray-700">Penguji 1</span>
                        <span class="text-xs text-gray-500 my-1">Hamida</span>
                        <div class="flex gap-2 mt-2 w-full">
                            <button type="button"
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-white rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105">
                                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Setujui
                            </button>
                            <button type="button" disabled
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-white rounded-lg bg-gray-400 cursor-not-allowed opacity-50">
                                Batalkan
                            </button>
                        </div>
                    </div>

                    <!-- Penguji 2: Approved -->
                    <div class="flex flex-col items-center p-3 border border-gray-200 rounded-lg shadow-sm bg-green-50">
                        <span class="font-medium text-sm text-gray-700">Penguji 2</span>
                        <span class="text-xs text-gray-500 my-1">Siti Rahayu</span>
                        <div class="flex gap-2 mt-2 w-full">
                            <div
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-green-700 bg-green-200 rounded-lg">
                                <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                Disetujui
                            </div>
                            <button type="button"
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-white rounded-lg bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 shadow-sm transition-transform transform hover:scale-105">
                                Batalkan
                            </button>
                        </div>
                    </div>

                    <!-- Penguji 3: Needs approval -->
                    <div class="flex flex-col items-center p-3 border border-gray-200 rounded-lg shadow-sm">
                        <span class="font-medium text-sm text-gray-700">Penguji 3</span>
                        <span class="text-xs text-gray-500 my-1">Andi Wijaya</span>
                        <div class="flex gap-2 mt-2 w-full">
                            <button type="button"
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-white rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105">
                                <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Setujui
                            </button>
                            <button type="button" disabled
                                class="flex-1 inline-flex items-center justify-center px-2 py-1 text-xs font-medium text-white rounded-lg bg-gray-400 cursor-not-allowed opacity-50">
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons for Verifikator -->
            <div class="md:col-span-2 space-y-4">
                <div class="flex flex-col sm:flex-row gap-4">
                    <!-- Verifikasi button is disabled until all penguji approve -->
                    <button type="button" disabled
                        class="flex-1 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-gradient-to-r from-emerald-600 to-emerald-700 hover:from-emerald-700 hover:to-emerald-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Verifikasi
                    </button>

                    <button type="button"
                        class="flex-1 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-red-600 to-red-700 rounded-lg hover:from-red-700 hover:to-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-transform transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Batalkan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
