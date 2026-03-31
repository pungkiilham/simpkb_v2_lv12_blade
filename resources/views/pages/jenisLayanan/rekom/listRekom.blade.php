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
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">List Rekom Kendaraan Mutasi / Numpang Uji
                            Keluar</h1>
                        <p class="text-sm text-gray-600 mt-1">Total: <span class="font-medium">0 Kendaraan</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Search & Filter -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-3 mb-4">
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Cari data..."
                        class="w-full pl-10 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
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
                            <!-- ROW 1: SUCCESS -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">1</td>
                                <td class="px-2 py-2 text-sm text-gray-900 font-medium">Ahmad Subarjo</td>
                                <td class="px-2 py-2 text-sm text-gray-900">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>B1234ABC</span>
                                        <span>JKT998877</span>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center">Mobil Barang
                                </td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center">Mutasi Keluar
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Diterima</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <button
                                            onclick="openRekomModal('Ahmad Subarjo', 'B 1234 ABC', 'JKT998877', 'MH3X11223344', 'Mutasi Keluar', 'success')"
                                            class="text-blue-600 hover:text-blue-800">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                        <a href="#" class="text-emerald-600 hover:text-emerald-800" title="Cetak">
                                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                            </svg>
                                        </a>
                                </td>
                            </tr>

                            <!-- ROW 2: FAILED -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">2</td>
                                <td class="px-2 py-2 text-sm text-gray-900 font-medium">Siti Aminah</td>
                                <td class="px-2 py-2 text-sm text-gray-900 text-center">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>L 5566 XYZ</span>
                                        <span>SBY112233</span>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center">Mobil Penumpang
                                </td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center">Numpang Keluar
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Ditolak</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        <button
                                            onclick="openRekomModal('Siti Aminah', 'L 5566 XYZ', 'SBY112233', 'MH3X99887766', 'Numpang Keluar', 'error')"
                                            class="text-blue-600 hover:text-blue-800">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
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

                            <!-- ROW 3: PENDING -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-2 py-2 text-sm text-gray-900 text-center whitespace-nowrap">3</td>
                                <td class="px-2 py-2 text-sm text-gray-900 font-medium">Budi Santoso</td>
                                <td class="px-2 py-2 text-sm text-gray-900 text-center">
                                    <div class="flex flex-col space-y-1 text-center">
                                        <span>N 8888 OP</span>
                                        <span>MLG445566</span>
                                    </div>
                                </td>
                                <td class="hidden md:table-cell px-2 py-2 text-sm text-gray-900 text-center">Mobil Bus</td>
                                <td class="hidden lg:table-cell px-2 py-2 text-sm text-gray-900 text-center">Mutasi Keluar
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Belum</span>
                                </td>
                                <td class="px-2 py-2 text-sm text-center whitespace-nowrap">
                                    <div class="flex justify-center items-center space-x-2">
                                        {{-- <button
                                            onclick="openRekomModal('Budi Santoso', 'N 8888 OP', 'MLG445566', 'MH3X55566677', 'Mutasi Keluar', 'confirm')"
                                            class="text-indigo-600 hover:text-indigo-800">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </button> --}}
                                        <button
                                            onclick="openRekomModal('Budi Santoso', 'N 8888 OP', 'MLG445566', 'MH3X55566677', 'Mutasi Keluar', 'confirm')"
                                            class="text-emerald-600 hover:text-emerald-800"><svg class="w-5 h-5"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div id="rekomModal" class="fixed inset-0 z-[60] flex items-center justify-center hidden p-4">
        <div class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm" onclick="closeRekomModal()"></div>
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md transform transition-all duration-300 scale-95 opacity-0 overflow-hidden"
            id="modalContent">

            <div class="bg-gray-50 border-b border-gray-100 px-6 py-4 flex justify-between items-center">
                <h3 id="modalTitle" class="font-bold text-gray-800 uppercase text-xs tracking-widest">Informasi Kendaraan
                </h3>
                <button onclick="closeRekomModal()" class="text-gray-400 hover:text-gray-600"><svg class="w-5 h-5"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg></button>
            </div>

            <div class="p-6">
                <!-- Vehicle Data Card -->
                <div id="vehicleRecap" class="bg-slate-50 border border-slate-200 rounded-xl p-4 mb-6 space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Pemilik</span>
                        <span id="dataOwner" class="font-bold text-gray-900 text-right">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">No Polisi</span>
                        <span id="dataPlate" class="font-bold text-gray-900">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">No Uji</span>
                        <span id="dataUji" class="font-bold text-gray-900">-</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">No Rangka</span>
                        <span id="dataRangka" class="font-mono font-bold text-gray-900">-</span>
                    </div>
                    <div class="pt-2 mt-2 border-t border-slate-200 flex justify-between">
                        <span class="text-gray-500">Layanan</span>
                        <span id="dataService" class="font-bold text-indigo-600">-</span>
                    </div>
                </div>

                <!-- STATE: CONFIRM -->
                <div id="viewConfirm" class="hidden text-center">
                    <p class="text-gray-500 text-sm mb-6">Apakah anda yakin ingin memproses data rekomendasi ini?</p>
                    <div class="flex gap-3">
                        <button onclick="closeRekomModal()"
                            class="flex-1 py-2.5 text-sm font-medium text-gray-600 bg-gray-100 rounded-lg">Batal</button>
                        <button onclick="processRekom()"
                            class="flex-1 py-2.5 text-sm font-bold text-white bg-indigo-600 rounded-lg shadow-md">Proses</button>
                    </div>
                </div>

                <!-- STATE: SUCCESS -->
                <div id="viewSuccess" class="hidden">
                    <div class="flex flex-col items-center text-center mb-6">
                        <div
                            class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900">Proses Berhasil</h4>
                        <!-- Date & Time Info -->
                        <div class="mt-2 px-3 py-1 bg-emerald-50 rounded-full inline-flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span id="successDateTime" class="text-xs font-semibold text-emerald-700"></span>
                        </div>
                    </div>
                    <button onclick="closeRekomModal()"
                        class="w-full py-2.5 text-sm font-bold text-white bg-gray-800 rounded-lg">Selesai</button>
                </div>

                <!-- STATE: ERROR -->
                <div id="viewError" class="hidden text-center py-2">
                    <div
                        class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-1">Data Gagal Diproses</h4>
                    <p class="text-gray-500 text-sm mb-6">Data tidak ditemukan atau sudah kadaluarsa.</p>
                    <button onclick="closeRekomModal()"
                        class="w-full py-2.5 text-sm font-bold text-white bg-red-600 rounded-lg">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getCurrentDateTime() {
            const now = new Date();
            const d = now.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: 'short',
                year: 'numeric'
            });
            const t = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit'
            });
            return `${d} • ${t}`;
        }

        function openRekomModal(owner, plate, uji, rangka, service, state) {
            const modal = document.getElementById('rekomModal');
            const content = document.getElementById('modalContent');

            document.getElementById('dataOwner').innerText = owner;
            document.getElementById('dataPlate').innerText = plate;
            document.getElementById('dataUji').innerText = uji;
            document.getElementById('dataRangka').innerText = rangka;
            document.getElementById('dataService').innerText = service;

            document.getElementById('viewConfirm').classList.add('hidden');
            document.getElementById('viewSuccess').classList.add('hidden');
            document.getElementById('viewError').classList.add('hidden');

            if (state === 'confirm') {
                document.getElementById('viewConfirm').classList.remove('hidden');
                document.getElementById('modalTitle').innerText = "Konfirmasi Proses";
            } else if (state === 'success') {
                document.getElementById('viewSuccess').classList.remove('hidden');
                document.getElementById('successDateTime').innerText = getCurrentDateTime();
                document.getElementById('modalTitle').innerText = "Detail Rekom Selesai";
            } else if (state === 'error') {
                document.getElementById('viewError').classList.remove('hidden');
                document.getElementById('modalTitle').innerText = "Status Gagal";
            }

            modal.classList.remove('hidden');
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 50);
        }

        function processRekom() {
            document.getElementById('viewConfirm').classList.add('hidden');
            document.getElementById('viewSuccess').classList.remove('hidden');
            document.getElementById('successDateTime').innerText = getCurrentDateTime();
            document.getElementById('modalTitle').innerText = "Proses Selesai";
        }

        function closeRekomModal() {
            const modal = document.getElementById('rekomModal');
            const content = document.getElementById('modalContent');
            content.classList.replace('scale-100', 'scale-95');
            content.classList.replace('opacity-100', 'opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 200);
        }
    </script>

    </div>
@endsection
