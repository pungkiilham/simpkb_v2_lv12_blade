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
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">List Pendaftaran Layanan</h1>
                        <p class="text-sm text-gray-600 mt-1">Total: <span class="font-medium">0 Pendaftaran</span></p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <a href="{{ URL::to('/') }}/pendaftaranbaru"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Tambah Baru
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Tools Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-3 mb-4">
                <div class="flex justify-ends gap-6">
                    <div class="flex items-center gap-2">
                        <label class="text-sm text-gray-600">Layanan:</label>
                        <select
                            class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            <option value="all">Semua</option>
                            <option value="baru">Baru</option>
                            <option value="berkala">Berkala</option>
                            <option value="numpang">Numpang</option>
                            <option value="mutasi">Mutasi</option>
                            <option value="perubahan">Perubahan</option>
                            <option value="cetak">Cetak Ulang</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-2">
                        <label class="text-sm text-gray-600">Status:</label>
                        <select
                            class="text-sm border border-gray-200 rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                            <option value="all">Semua</option>
                            <option value="approved">Diterima</option>
                            <option value="rejected">Ditolak</option>
                        </select>
                    </div>
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
                                    Jenis Layanan</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Status</th>
                                <th
                                    class="px-2 py-2 text-xs font-medium text-gray-500 uppercase tracking-wider text-center whitespace-nowrap">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($pendaftarans as $pendaftaran)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <!-- Kolom No. -->
                                    <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $loop->iteration }}</td>

                                    <!-- Kolom Nama Pemilik -->
                                    <td class="px-2 py-2 text-sm text-gray-900">
                                        <div class="flex flex-col">
                                            <span
                                                class="font-medium">{{ $pendaftaran->kendaraan->pemilik->nama_pemilik ?? 'N/A' }}</span>
                                        </div>
                                    </td>

                                    <!-- Kolom No. Pol / Uji -->
                                    <td class="px-2 py-2 text-sm text-gray-900">
                                        <div class="flex flex-col space-y-1 text-center">
                                            <span>{{ $pendaftaran->kendaraan->nomor_kendaraan ?? 'N/A' }}</span>
                                            <span>{{ $pendaftaran->kendaraan->nomor_uji ?? 'N/A' }}</span>
                                        </div>
                                    </td>

                                    <!-- Kolom Jenis Kendaraan -->
                                    <td
                                        class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $pendaftaran->jenisKendaraan->nama_jenis_kendaraan ?? 'N/A' }}</td>

                                    <!-- Kolom Jenis Layanan -->
                                    <td
                                        class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">
                                        {{ $pendaftaran->jenisPengujian->nama_layanan ?? 'N/A' }}</td>

                                    <!-- Kolom Status -->
                                    <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                        @php
                                            $statusMap = [
                                                0 => [
                                                    'label' => 'Menunggu',
                                                    'color' => 'bg-yellow-100 text-yellow-800',
                                                ],
                                                1 => [
                                                    'label' => 'Diterima',
                                                    'color' => 'bg-emerald-100 text-emerald-800',
                                                ],
                                                2 => ['label' => 'Ditolak', 'color' => 'bg-red-100 text-red-800'],
                                            ];
                                            $statusInfo = $statusMap[$pendaftaran->status_pendaftaran] ?? [
                                                'label' => 'Tidak Diketahui',
                                                'color' => 'bg-gray-100 text-gray-800',
                                            ];
                                        @endphp
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusInfo['color'] }}">
                                            {{ $statusInfo['label'] }}
                                        </span>
                                    </td>

                                    <!-- Kolom Aksi -->
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
                                            <a href="#" class="text-emerald-600 hover:text-emerald-800"
                                                title="Ubah">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <button class="text-red-600 hover:text-red-800" title="Hapus"
                                                onclick="confirmDelete">
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
                                    <td colspan="7" class="py-4 text-center text-gray-500">
                                        Tidak ada data pendaftaran yang tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class=" mt-4">
                {{-- Laravel's default pagination links (menampilkan nomor halaman 1, 2, 3...) --}}
                {{-- Anda bisa memilih untuk menampilkan ini atau tidak --}}
                {{-- {{ $kendaraanData->links() }} --}}
            </div>
        </div>
    </div>
@endsection


{{-- <div class="flex items-center justify-between mt-4">
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
            </div> --}}
