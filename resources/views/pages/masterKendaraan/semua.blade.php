@extends('layouts.admin')

@section('content')
    {{-- Memindahkan x-data ke elemen pembungkus terluar untuk cakupan global --}}
    <div x-data="{ showDeleteModal: false, deleteTargetUrl: '' }" class="p-3 md:p-4 max-w-full">
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
                            {{-- <p class="text-sm text-gray-600">Total: <span class="font-medium">{{ $kendaraanData->count() }}
                                    Kendaraan</span></p> --}}
                            <p class="text-sm text-gray-600">Total: <span class="font-medium">{{ $kendaraanData->total() }}
                                    Kendaraan</span></p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ route('kendaraan.create') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-amber-500 to-amber-600 rounded-lg hover:from-amber-600 hover:to-amber-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah
                    </a>
                    <a href="{{ route('kendaraan.exportAllCsv') }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Export All (CSV)
                    </a>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Tools Section (Search and Filters) -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-3 mb-4">
                {{-- Uncomment and implement search/filters if needed --}}
                {{-- <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search..."
                        class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500/20" />
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div> --}}

                <div class="flex justify-ends gap-6">
                    <form method="GET" action="{{ route('kendaraan.index') }}"
                        class="flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-4 w-full md:w-auto">
                        {{-- Filter Asal --}}
                        <div class="flex items-center gap-2">
                            <label for="asal_filter" class="text-sm text-gray-600">Asal:</label>
                            <select name="asal_filter" id="asal_filter" onchange="this.form.submit()"
                                class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                <option value="all" {{ $asalFilter == 'all' ? 'selected' : '' }}>Semua</option>
                                <option value="Batu" {{ $asalFilter == 'Batu' ? 'selected' : '' }}>Batu</option>
                                <option value="Numpang" {{ $asalFilter == 'Numpang' ? 'selected' : '' }}>Numpang</option>
                                <option value="Mutasi" {{ $asalFilter == 'Mutasi' ? 'selected' : '' }}>Mutasi</option>
                            </select>
                        </div>

                        {{-- Filter Status --}}
                        <div class="flex items-center gap-2">
                            <label for="status_filter" class="text-sm text-gray-600">Status:</label>
                            <select name="status_filter" id="status_filter" onchange="this.form.submit()"
                                class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                <option value="all" {{ $statusFilter == 'all' ? 'selected' : '' }}>Semua</option>
                                <option value="Habis Uji" {{ $statusFilter == 'Habis Uji' ? 'selected' : '' }}>Habis Uji
                                </option>
                                <option value="Aktif" {{ $statusFilter == 'Aktif' ? 'selected' : '' }}>Aktif (Hidup)
                                </option>
                                <option value="Non-aktif" {{ $statusFilter == 'Non-aktif' ? 'selected' : '' }}>Non-aktif
                                    (Mati)</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto -mx-3 md:-mx-4">
                {{-- <div class="inline-block min-w-full align-middle"> --}}
                <div class="inline-block min-w-full align-middle" x-data="{
                    showDeleteModal: false,
                    deleteUrl: '',
                    openModal(url) {
                        this.deleteUrl = url;
                        this.showDeleteModal = true;
                    }
                }" x-cloak>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-50">
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    No</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-left whitespace-nowrap">
                                    Data Pemilik</th>
                                <th
                                    class="hidden sm:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    No. Uji</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    No. Pol</th>
                                <th
                                    class="hidden md:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Jenis Kendaraan</th>
                                <th
                                    class="hidden md:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Asal</th>
                                <th
                                    class="hidden lg:table-cell px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Habis Uji</th>
                                <th
                                    class="px-2 py-2 text-sm text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($kendaraanData as $kendaraan)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    {{-- <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $loop->iteration }}</td> --}}
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ ($kendaraanData->currentPage() - 1) * $kendaraanData->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-2 py-2 text-sm text-gray-900">
                                        <div class="flex flex-col">
                                            <span class="font-medium">{{ $kendaraan->nama_pemilik ?? 'N/A' }}</span>
                                            <span
                                                class="text-xs text-gray-500 sm:hidden">{{ $kendaraan->nomor_uji ?? 'N/A' }}</span>
                                            <span
                                                class="text-xs text-gray-500 md:hidden">{{ $kendaraan->keterangan_jenis_kendaraan ?? 'N/A' }}</span>
                                            <span
                                                class="text-xs text-gray-500 md:hidden">{{ $kendaraan->kabupaten ?? 'N/A' }}</span>
                                            <span
                                                class="text-xs text-gray-500 lg:hidden">{{ $kendaraan->tanggal_mati_uji ? \Carbon\Carbon::parse($kendaraan->tanggal_mati_uji)->format('Y-m-d') : 'N/A' }}</span>
                                        </div>
                                    </td>
                                    <td
                                        class="hidden sm:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $kendaraan->nomor_uji ?? 'N/A' }}</td>
                                    <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $kendaraan->nomor_kendaraan ?? 'N/A' }}</td>
                                    <td
                                        class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $kendaraan->keterangan_jenis_kendaraan ?? 'N/A' }}</td>
                                    <td
                                        class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $kendaraan->kabupaten ?? 'N/A' }}</td>
                                    <td
                                        class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $kendaraan->tanggal_mati_uji ? \Carbon\Carbon::parse($kendaraan->tanggal_mati_uji)->format('Y-m-d') : 'N/A' }}
                                    </td>
                                    <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                        <div class="flex justify-center items-center space-x-2">
                                            <a href="{{ route('kendaraan.show', $kendaraan->kendaraan_id) }}"
                                                class="text-blue-600 hover:text-blue-800" title="Lihat Detail">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('kendaraan.edit', $kendaraan->kendaraan_id) }}"
                                                class="text-emerald-600 hover:text-emerald-800" title="Ubah Data">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            {{-- Tombol Hapus dengan Alpine.js --}}
                                            {{-- <button type="button" class="text-red-600 hover:text-red-800"
                                                title="Hapus Data"
                                                @click="showDeleteModal = true; deleteTargetUrl = '{{ route('kendaraan.destroy', $kendaraan->kendaraan_id) }}'">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button> --}}
                                            <!-- hapus modal -->
                                            {{-- <div class="relative" x-data="{ open: false }">
                                                <div class="flex items-center">
                                                    <button @click="open = !open"
                                                        class="flex items-center text-red-600 hover:text-red-800"
                                                        title="Hapus Data">
                                                        <div class="flex-shrink-0">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                                <!-- Dropdown Hapus -->
                                                <div x-show="open" @click.away="open = false"
                                                    class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 z-50">
                                                    <div class="px-4 py-2">
                                                        <p class="text-md font-medium border-b-2">Anda yakin ingin
                                                            <br>menghapus data
                                                            ini?
                                                        </p>
                                                        <p class="text-sm opacity-70 mt-2 font-medium">
                                                            {{ $kendaraan->nama_pemilik ?? 'N/A' }}</p>
                                                        <p class="text-sm opacity-70">{{ $kendaraan->nomor_uji ?? 'N/A' }}
                                                        </p>
                                                        <p class="text-sm opacity-70">
                                                            {{ $kendaraan->nomor_kendaraan ?? 'N/A' }}</p>
                                                    </div>
                                                    <form
                                                        :action="{{ route('kendaraan.destroy', $kendaraan->kendaraan_id) }}"
                                                        method="POST" class="flex items-center justify-center">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="block w-full text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                                            <div
                                                                class="flex items-center justify-center font-medium text-red-600 gap-2">
                                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                    viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                                Hapus
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div> --}}

                                            <!-- Tombol Hapus: Membuka modal dan mengatur URL -->
                                            <button type="button"
                                                @click="openModal('{{ route('kendaraan.destroy', $kendaraan->kendaraan_id) }}')"
                                                class="text-red-600 hover:text-red-900 transition-colors"
                                                title="Hapus Data">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-2 py-4 text-sm text-gray-500 text-center">Tidak ada data
                                        kendaraan ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div x-show="showDeleteModal" class="fixed inset-0 z-50 overflow-y-auto"
                        style="background-color: rgba(0,0,0,0.5);" x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" x-on:click.away="showDeleteModal = false">
                        <div class="flex items-center justify-center min-h-screen p-4">
                            <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm w-full"
                                x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Konfirmasi Hapus</h3>
                                <p class="text-sm text-gray-500 mb-2">
                                    Anda yakin ingin menghapus data kendaraan ini?
                                </p>
                                <p class="text-sm opacity-70 mt-2 font-medium">
                                    {{ $kendaraan->nama_pemilik ?? 'N/A' }}</p>
                                <p class="text-sm opacity-70">{{ $kendaraan->nomor_uji ?? 'N/A' }}
                                </p>
                                <p class="text-sm opacity-70">
                                    {{ $kendaraan->nomor_kendaraan ?? 'N/A' }}</p>
                                <p class="text-sm text-gray-500 mb-4 mt-2">
                                    *Tindakan ini tidak dapat dibatalkan.
                                </p>
                                <form :action="deleteUrl" method="POST" class="flex flex-col gap-4">
                                    @csrf
                                    @method('DELETE')

                                    <div class="flex justify-end space-x-3">
                                        <button type="button" @click="showDeleteModal = false"
                                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 transition-colors">
                                            Batal
                                        </button>
                                        <button type="submit"
                                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 transition-colors">
                                            Hapus
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" mt-4">
            {{-- Laravel's default pagination links (menampilkan nomor halaman 1, 2, 3...) --}}
            {{-- Anda bisa memilih untuk menampilkan ini atau tidak --}}
            {{ $kendaraanData->links() }}
        </div>
    </div>
    {{-- <p>Type of $kendaraanData: {{ dd($kendaraanData) }}</p> --}}
@endsection
