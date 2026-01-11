@extends('layouts.admin')

@section('content')
    <div class="p-3 md:p-4 max-w-full">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">List Pengujian (Baru, Berkala, Numpang
                            Masuk)</h1>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 mt-1 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <span class="font-medium">Total:</span>
                                <span>0 Pengujian</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Lulus:
                                    0</span>
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Tidak
                                    Lulus: 0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Tools Section -->
            <div class="flex flex-col md:flex-row justify-ends items-start md:items-center gap-3 mb-4">
                {{-- <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Cari..."
                        class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div> --}}
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600">Layanan:</label>
                    <select
                        class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="all">Semua</option>
                        <option value="baru">Baru</option>
                        <option value="berkala">Berkala</option>
                        <option value="numpang">Numpang Masuk</option>
                        {{-- <option value="mutasi">Mutasi</option>
                        <option value="perubahan">Perubahan</option>
                        <option value="cetak">Cetak Ulang</option> --}}
                    </select>
                </div>
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600">Status:</label>
                    <select
                        class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="all">Semua</option>
                        <option value="belum">Belum Uji</option>
                        <option value="berlangsung">Berlangsung</option>
                        <option value="lulus">Lulus</option>
                        <option value="tidak_lulus">Tidak Lulus</option>

                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto -mx-3 md:-mx-4">
                <div class="inline-block min-w-full align-middle">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    No</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-left whitespace-nowrap">
                                    Nama Pemilik</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    No. Pol / Uji</th>
                                <th
                                    class="hidden md:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Jenis Kendaraan</th>
                                <th
                                    class="hidden lg:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Pengujian</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Status</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">John Doe</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 1234 AB</span>
                                        <span>UJIAB123456</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Mobil Bus</td>
                                <td
                                    class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Baru</td>
                                <td class="space-y-1 px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Lulus</span>
                                    <br>
                                    <span
                                        class="inline-flex items-center  px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Belum
                                        Approval</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800" title="Sinkron">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">PT. Maju</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 3234 AB</span>
                                        <span>UJIAB123456</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Mobil Pickup</td>
                                <td
                                    class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Berkala</td>
                                <td class="space-y-1 px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Lulus</span>
                                    <br>
                                    <span
                                        class="inline-flex items-center  px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Sukses
                                        Approval</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800" title="Sinkron">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">PT. Mayindo Perkasa</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 3234 AB</span>
                                        <span>UJIAB123456</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Mobil Pickup</td>
                                <td
                                    class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Berkala</td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Belum
                                        Uji </span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="/pengujian" class="text-emerald-600 hover:text-emerald-800"
                                            title="Ubah">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">John Doe</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 1234 AB</span>
                                        <span>UJIAB123456</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Mobil Bus</td>
                                <td
                                    class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Numpang Masuk</td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Tidak
                                        Lulus</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-800" title="Cetak">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col">
                                        <span class="font-medium">John Doe</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 1234 AB</span>
                                        <span>UJIAB123456</span>
                                    </div>
                                </td>
                                <td
                                    class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Mobil Bus</td>
                                <td
                                    class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                    Numpang Masuk</td>
                                <td class="space-y-1 px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Lulus</span>
                                    <br>
                                    <span
                                        class="inline-flex items-center  px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">Sudah
                                        Cetak
                                    </span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <a href="#" class="text-blue-600 hover:text-blue-800" title="Lihat">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <a href="#" class="text-red-600 hover:text-red-800" title="Sinkron">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                    <label class="text-sm text-gray-600 mr-2">Baris per halaman:</label>
                    <select
                        class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
                <div class="flex items-center space-x-2">
                    <button
                        class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50"
                        disabled>
                        Previous
                    </button>
                    <div class="text-sm text-gray-500">Page 1 of 1</div>
                    <button
                        class="px-3 py-1 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50"
                        disabled>
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
