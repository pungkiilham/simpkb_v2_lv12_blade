@extends('layouts.admin')

@section('content')
<div class="p-4 max-w-7xl mx-auto">
    <!-- Header Section -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
        <div class="flex items-center mb-4">
            <div class="p-2 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg mr-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-800">Detail Pengujian Kendaraan</h1>
        </div>

        <!-- Vehicle Information -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="space-y-3">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">No. Polisi:</span>
                    <span class="text-gray-800">N8464KJ</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">No. Uji:</span>
                    <span class="text-gray-800">UJIAB123456</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">Jenis Pengujian:</span>
                    <span class="text-gray-800">Berkala</span>
                </div>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">Tanggal Uji:</span>
                    <span class="text-gray-800">23-05-2025</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">Tanggal Mati Uji:</span>
                    <span class="text-gray-800">23-11-2025</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="font-medium text-gray-600">Status Pengujian:</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                </div>
            </div>
        </div>

        <!-- Test Sections -->
        <div class="space-y-6">
            <!-- Vehicle Photos -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">1. Foto Kendaraan</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Photo placeholders -->
                    <div class="aspect-video bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="text-gray-400">Foto 1</span>
                    </div>
                    <div class="aspect-video bg-gray-100 rounded-lg flex items-center justify-center">
                        <span class="text-gray-400">Foto 2</span>
                    </div>
                </div>
            </div>

            <!-- Pre-Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">2. Pra Uji</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Nama Penguji:</span>
                        <span class="text-gray-800">Heri Purwanto</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Hasil Pra Uji:</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                    </div>
                </div>
            </div>

            <!-- Emission Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">3. Pengujian Emisi Solar / Bensin</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Emisi Bensin CO (%):</span>
                            <span class="text-gray-800">0</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Emisi Bensin HC (ppm):</span>
                            <span class="text-gray-800">0</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Emisi Diesel (%):</span>
                            <span class="text-gray-800">38</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Nama Penguji:</span>
                            <span class="text-gray-800">Heri Purwanto</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Hasil Uji Emisi:</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pit Lift Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">4. Pengujian Pit Lift</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Nama Penguji:</span>
                        <span class="text-gray-800">Heri Purwanto</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Hasil Uji Pit Lift:</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                    </div>
                </div>
            </div>

            <!-- Headlight Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">5. Pengujian Lampu Utama</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Kuat Pancar Kiri (hcd):</span>
                            <span class="text-gray-800">15000</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Kuat Pancar Kanan (hcd):</span>
                            <span class="text-gray-800">22000</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Simpangan Kiri (Derajat):</span>
                            <span class="text-gray-800">1.01</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Simpangan Kanan (Derajat):</span>
                            <span class="text-gray-800">0.1</span>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Nama Penguji:</span>
                            <span class="text-gray-800">Heri Purwanto</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium text-gray-600">Hasil Uji Lampu:</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Brake Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">6. Pengujian Rem</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Brake Power -->
                    <div>
                        <h3 class="font-medium text-gray-700 mb-3">Daya Rem</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu I:</span>
                                <span class="text-gray-800">440</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu II:</span>
                                <span class="text-gray-800">240</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu III:</span>
                                <span class="text-gray-800">0</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu IV:</span>
                                <span class="text-gray-800">0</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu Parkir:</span>
                                <span class="text-gray-800">210</span>
                            </div>
                        </div>
                    </div>
                    <!-- Brake Power Difference -->
                    <div>
                        <h3 class="font-medium text-gray-700 mb-3">Selisih Daya Rem</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu I (%):</span>
                                <span class="text-gray-800">0</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu II (%):</span>
                                <span class="text-gray-800">18</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu III (%):</span>
                                <span class="text-gray-800">0</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu IV (%):</span>
                                <span class="text-gray-800">0</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Sumbu Parkir (%):</span>
                                <span class="text-gray-800">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Nama Penguji:</span>
                        <span class="text-gray-800">Heri Purwanto</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Hasil Uji Rem:</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                    </div>
                </div>
            </div>

            <!-- Wheel Alignment Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">7. Pengujian Kuncup Roda</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Lebar Kuncup (mm/m):</span>
                        <span class="text-gray-800">0.24</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Nama Penguji:</span>
                        <span class="text-gray-800">Heri Purwanto</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Hasil Uji Kuncup:</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                    </div>
                </div>
            </div>

            <!-- Speedometer Test -->
            <div class="border rounded-lg p-4">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">8. Pengujian Speedo</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Kecepatan (Km/jam):</span>
                        <span class="text-gray-800">45</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Nama Penguji:</span>
                        <span class="text-gray-800">Heri Purwanto</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-medium text-gray-600">Hasil Uji Speedo:</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">Lulus</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
