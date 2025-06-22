@extends('layouts.admin')

@section('content')
    <div class="p-3 md:p-4 max-w-full">
        <!-- Header -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <!-- Title and Actions -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Master Data Kendaraan</h1>
                        <div class="flex items-center gap-2 mt-1">
                            {{-- <p class="text-sm text-gray-600">Mengelola data kendaraan uji</p>
                        <span class="text-sm text-gray-400">•</span> --}}
                            <p class="text-sm text-gray-600">Total: <span class="font-medium">3 Kendaraan</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <div class="relative">
                        <button id="categoryDropdown"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span>Semua</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="categoryMenu"
                            class="absolute right-0 z-10 w-48 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg hidden">
                            <div class="py-1">
                                <button
                                    class="block w-full px-4 py-2 text-sm text-left text-white bg-blue-600 hover:bg-blue-700">Semua</button>
                                <button
                                    class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Kota
                                    Batu</button>
                                <button
                                    class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Numpang
                                    Uji</button>
                                <button
                                    class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Mutasi
                                    Keluar</button>
                                {{-- <button class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100">Lainnya</button> --}}
                            </div>
                        </div>
                    </div>
                    <a href="{{ URL::to('/') }}/tambahkendaraan"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-amber-500 to-amber-600 rounded-lg hover:from-amber-600 hover:to-amber-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah
                    </a>
                    <button data-toggle="modal" data-target="#uploadModalLabel"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                        Import
                    </button>
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-lg hover:from-emerald-600 hover:to-emerald-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Export
                    </button>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Tools Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-3 mb-4">
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search..."
                        class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500/20" />
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <div class="flex items-center">
                    <label class="text-sm text-gray-600 mr-2">Baris:</label>
                    <select
                        class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                        <option>200</option>
                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto -mx-3 md:-mx-4">
                <div class="inline-block min-w-full align-middle">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">No</th>
                                <th class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-left whitespace-nowrap">Data Pemilik</th>
                                <th class="hidden sm:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">No. Uji</th>
                                <th class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">No. Pol</th>
                                <th class="hidden md:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">Jenis Kendaraan</th>
                                <th class="hidden md:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">Asal</th>
                                <th class="hidden lg:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">Habis Uji</th>
                                <th class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">John Doe</span>
                                        <span class="text-xs text-gray-500 sm:hidden">UJI-001</span>
                                        <span class="text-xs text-gray-500 md:hidden">Bus</span>
                                        <span class="text-xs text-gray-500 md:hidden">Kota Batu</span>
                                        <span class="text-xs text-gray-500 lg:hidden">2024-12-31</span>
                                    </div>
                                </td>
                                <td class="hidden sm:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">UJI-001</td>
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">N 1234 AB</td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Bus</td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Kota Batu</td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">2024-12-31</td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-800" title="Ubah">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <button class="text-red-600 hover:text-red-800" title="Hapus" onclick="confirmDelete">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">2</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">PT. Transport Sejahtera</span>
                                        <span class="text-xs text-gray-500 sm:hidden">UJI-002</span>
                                        <span class="text-xs text-gray-500 md:hidden">Truk</span>
                                        <span class="text-xs text-gray-500 md:hidden">Numpang Uji</span>
                                        <span class="text-xs text-gray-500 lg:hidden">2024-11-30</span>
                                    </div>
                                </td>
                                <td class="hidden sm:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">UJI-002</td>
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">N 5678 CD</td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Truk</td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Numpang Uji</td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">2024-11-30</td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-800" title="Ubah">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <button class="text-red-600 hover:text-red-800" title="Hapus" onclick="confirmDelete">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">3</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">Jane Smith</span>
                                        <span class="text-xs text-gray-500 sm:hidden">UJI-003</span>
                                        <span class="text-xs text-gray-500 md:hidden">Minibus</span>
                                        <span class="text-xs text-gray-500 md:hidden">Mutasi Keluar</span>
                                        <span class="text-xs text-gray-500 lg:hidden">2024-10-31</span>
                                    </div>
                                </td>
                                <td class="hidden sm:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">UJI-003</td>
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">N 9012 EF
                                </td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Minibus</td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">Mutasi Keluar</td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">2024-10-31</td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-800" title="Ubah">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <button class="text-red-600 hover:text-red-800" title="Hapus" onclick="confirmDelete">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-4 flex items-center justify-between">
            <div class="flex-1 text-sm text-gray-700">
                Showing <span class="font-medium">1</span> to <span class="font-medium">3</span> of <span
                    class="font-medium">3</span> results
            </div>
            <div class="flex items-center space-x-2">
                <button
                    class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
                    disabled>
                    Previous
                </button>
                <button
                    class="px-3 py-1 text-sm text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700">
                    1
                </button>
                <button
                    class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed"
                    disabled>
                    Next
                </button>
            </div>
        </div>
    @endsection

    <!-- Add this script at the end of your file -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.getElementById('categoryDropdown');
            const menu = document.getElementById('categoryMenu');

            dropdown.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!dropdown.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>
