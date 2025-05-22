@include('layouts.head')

<body class="antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#1a237e] shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/logodishub.png') }}" alt="Dishub Logo" class="h-10 w-auto">
                    </div>
                    <span class="ml-3 text-white font-semibold text-lg">DISHUB KOTA BATU</span>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-white hover:text-[#1a237e] transition duration-150 ease-in-out">
                        Masuk
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-24 pb-16 bg-gradient-to-br from-[#1a237e] to-[#283593] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                    <span class="block">Selamat Datang di</span>
                    <span class="block text-blue-200">SIM PKB DISHUB KOTA BATU</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Aplikasi ini berfungsi sebagai media informasi dalam melakukan manajemen pelayanan publik secara
                    terstruktur dan akuntabel pada UPT Pengujian Kendaraan Bermotor.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="rounded-md shadow">
                        <a href="{{ route('login') }}"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-[#1a237e] bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10">
                            Mulai Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keunggulan Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-[#1a237e]">Keunggulan</h2>
                <p class="mt-4 text-lg text-gray-600">Sistem yang handal dan terpercaya</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Keunggulan 1 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-xl transition duration-300 border border-gray-200">
                    <div class="text-[#1a237e] mb-4">
                        <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e]">Terintegrasi</h3>
                    <p class="mt-4 text-gray-600">Sistem terintegrasi yang memudahkan pengelolaan dan pemantauan data
                        secara real-time.</p>
                </div>

                <!-- Keunggulan 2 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-xl transition duration-300 border border-gray-200">
                    <div class="text-[#1a237e] mb-4">
                        <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e]">Keamanan Tinggi</h3>
                    <p class="mt-4 text-gray-600">Dilengkapi dengan sistem keamanan berlapis untuk melindungi data dan
                        informasi penting.</p>
                </div>

                <!-- Keunggulan 3 -->
                <div class="bg-gray-50 rounded-xl p-8 hover:shadow-xl transition duration-300 border border-gray-200">
                    <div class="text-[#1a237e] mb-4">
                        <svg class="h-12 w-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e]">Performa Optimal</h3>
                    <p class="mt-4 text-gray-600">Kinerja sistem yang cepat dan efisien untuk mendukung pelayanan yang
                        maksimal.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-[#1a237e] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-4">
                    <p class="text-4xl font-bold text-white">5000+</p>
                    <p class="mt-2 text-xl text-blue-200">Kendaraan Diuji</p>
                </div>
                <div class="p-4">
                    <p class="text-4xl font-bold text-white">98%</p>
                    <p class="mt-2 text-xl text-blue-200">Kepuasan Pelanggan</p>
                </div>
                <div class="p-4">
                    <p class="text-4xl font-bold text-white">95%</p>
                    <p class="mt-2 text-xl text-blue-200">Tingkat Kelulusan Uji</p>
                </div>
            </div>
        </div>
    </div>



    <!-- About Developer Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-[#1a237e]">Dikembangkan Oleh</h2>
                <p class="mt-4 text-lg text-gray-600">Professional Software Development Company</p>
            </div>
            <div class="bg-gray-50 rounded-2xl p-8 shadow-lg border border-gray-100">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h3 class="text-2xl font-bold text-[#1a237e] mb-4">CV. ESTRO HUTAMA</h3>
                        <p class="text-gray-600 mb-4">Spesialisasi dalam pengembangan solusi perangkat lunak yang
                            inovatif dan berkualitas tinggi untuk sektor pemerintahan dan bisnis.</p>
                        <div class="space-y-2 text-gray-600">
                            <p class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-[#1a237e]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                10+ Tahun Pengalaman
                            </p>
                            <p class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-[#1a237e]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Terpercaya & Profesional
                            </p>
                            <p class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-[#1a237e]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Berbasis di Malang, Jawa Timur
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-lg shadow text-center">
                                <p class="text-3xl font-bold text-[#1a237e]">100+</p>
                                <p class="text-gray-600">Proyek Selesai</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow text-center">
                                <p class="text-3xl font-bold text-[#1a237e]">50+</p>
                                <p class="text-gray-600">Klien Puas</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow text-center">
                                <p class="text-3xl font-bold text-[#1a237e]">15+</p>
                                <p class="text-gray-600">Tim Ahli</p>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow text-center">
                                <p class="text-3xl font-bold text-[#1a237e]">24/7</p>
                                <p class="text-gray-600">Dukungan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="py-16 bg-[#1a237e]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-white">Hubungi Kami</h2>
                <p class="mt-4 text-lg text-blue-200">Mari diskusikan solusi terbaik untuk kebutuhan Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-[#1a237e] mb-4">CV. ESTRO HUTAMA</h3>
                    <div class="space-y-4">
                        <p class="flex items-center text-gray-600">
                            <svg class="h-5 w-5 mr-3 text-[#1a237e]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Jl. Raya Tlogomas No.246, Malang, Jawa Timur
                        </p>
                        <p class="flex items-center text-gray-600">
                            <svg class="h-5 w-5 mr-3 text-[#1a237e]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@estrohutama.com
                        </p>
                        <p class="flex items-center text-gray-600">
                            <svg class="h-5 w-5 mr-3 text-[#1a237e]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +62 341 123456
                        </p>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-[#1a237e] mb-4">Jam Kerja</h3>
                    <div class="space-y-2">
                        <p class="flex justify-between text-gray-600">
                            <span>Senin - Jumat:</span>
                            <span>08:00 - 17:00</span>
                        </p>
                        <p class="flex justify-between text-gray-600">
                            <span>Sabtu:</span>
                            <span>09:00 - 14:00</span>
                        </p>
                        <p class="flex justify-between text-gray-600">
                            <span>Minggu:</span>
                            <span>Tutup</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/logoestro.png') }}" alt="Logo" class="h-8 w-auto mr-3">
                    <span class="text-xl font-bold text-[#1a237e]">CV. ESTRO HUTAMA</span>
                </div>
                <p class="text-gray-500 text-center">Powered by CV. ESTRO HUTAMA<br>&copy; {{ date('Y') }} All
                    rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
