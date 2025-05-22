<nav class="flex flex-col space-y-6">
    <!-- Logo Section -->
    {{-- <div class="p-2 flex justify-start items-center">
        <div class="flex justify-center items-center mb-2 mr-4">
            <img src="{{ asset('assets/logodishub.png') }}" class="h-18 w-auto" alt="Logo Dishub">
        </div>
        <div>
            <h1 class="text-white text-xl font-bold">SIM PKB</h1>
            <h1 class=" text-white text-lg font-bold">Kota Batu</h1>
        </div>
    </div> --}}

    <!-- Main Navigation -->
    <div class="space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}"
            class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white {{ request()->routeIs('dashboard') ? 'bg-white/20' : 'hover:bg-white/10' }}">
            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
            </svg>
            Dashboard
        </a>

        <!-- Antrian -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">Antrian Kendaraan</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                    </svg>
                    Display Antrian
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                    </svg>
                    Cetak Antrian
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                    Panggil Antrian
                </a>
            </div>
        </div>

        <!-- Master Data -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">Master Data</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="/semuakendaraan"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Semua Kendaraan
                </a>
                <a href="/tambahkendaraan"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    Tambah Kendaraan
                </a>
            </div>
        </div>

        <!-- Jenis Layanan -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">Jenis Layanan</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Pendaftaran
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Pendaftaran
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Pengujian
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Numpang Masuk
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                    </svg>
                    Numpang Keluar
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Ubah Bentuk/Sifat
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Hilang/Rusak
                </a>
            </div>
        </div>

        <!-- IKM -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">IKM</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Pengajuan IKM
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Pengaturan IKM
                </a>
            </div>
        </div>

        <!-- WA Notifikasi -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">WA Notifikasi</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    Daftar Notifikasi
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                    Pengaturan Notifikasi
                </a>
            </div>
        </div>

        <!-- Laporan -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">Laporan</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    Riwayat Uji
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Laporan Pelayanan
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                    </svg>
                    Laporan IKM
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Log Aktivitas
                </a>
            </div>
        </div>

        <!-- Settings -->
        <div x-data="{ open: false }" class="pt-4">
            <button @click="open = !open"
                class="flex items-center justify-between w-full px-3 py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg">
                <div class="flex items-center">
                    <h2 class="text-xs font-semibold uppercase tracking-wider">Pengaturan</h2>
                </div>
                <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div x-show="open" class="mt-2 space-y-1">
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    Manajemen User
                </a>
                <a href="#"
                    class="flex items-center px-3 py-2 text-sm font-medium rounded-lg text-white hover:bg-white/10">
                    <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Pengaturan Role
                </a>
            </div>
        </div>
    </div>
</nav>
