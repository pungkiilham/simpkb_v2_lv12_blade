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
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800">Pendaftaran Pengujian Kendaraan</h1>
                        <p class="text-sm text-gray-600 mt-1">Form pendaftaran pengujian kendaraan bermotor</p>
                    </div>
                </div>
                <a href="/listpendaftaran"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4">
            <!-- Search Section -->
            <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-4">
                    <form onsubmit="return false;">
                        @csrf
                        <div
                            class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                            <h2 class="text-lg font-bold text-white">Cari Data Kendaraan</h2>
                        </div>
                        <div class="flex gap-4 items-end">
                            <div class="flex-1">
                                <label for="search_value" class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji /
                                    Rangka</label>
                                <input type="text" id="search_value"
                                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                    placeholder="Masukkan nomor uji / rangka">
                            </div>
                            <button type="button" id="search-button"
                                class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Cari Data Kendaraan
                            </button>
                        </div>
                        <label class="block text-sm text-gray-700 mb-1 mt-1">*Bila data kendaraan tidak ditemukan, buat data
                            kendaraan di master data terlebih dahulu</label>
                        <div id="error-message" class="mt-2 text-sm text-red-600 hidden"></div>
                    </form>
                </div>
            </div>

            <!-- Form Pendaftaran Section -->
            <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="p-3 md:p-4 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Left Column: Data Pemilik -->
                        <div class="">
                            <div
                                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                                <h2 class="text-lg font-bold text-white">1. Data Pemilik</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="nama_pemilik" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                        Pemilik</label>
                                    <input type="text" name="nama_pemilik" id="nama_pemilik"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nama pemilik">
                                </div>
                                <div>
                                    <label for="nomor_ktp" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                        KTP</label>
                                    <input type="text" name="nomor_ktp" id="nomor_ktp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor KTP">
                                </div>
                                <div class="md:col-span-2">
                                    <label for="alamat_pemilik" class="block text-sm font-medium text-gray-700 mb-1">Alamat
                                        Pemilik</label>
                                    <textarea name="alamat_pemilik" id="alamat_pemilik"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        rows="4" placeholder="Masukkan alamat lengkap"></textarea>
                                </div>
                                <div>
                                    <label for="nomor_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                        WhatsApp</label>
                                    <input type="tel" name="nomor_whatsapp" id="nomor_whatsapp"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor WhatsApp">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Data Kendaraan -->
                        <div class="">
                            <div
                                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                                <h2 class="text-lg font-bold text-white">2. Data Kendaraan</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="nomor_polisi" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                        Polisi</label>
                                    <input type="text" name="nomor_polisi" id="nomor_polisi"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor polisi">
                                </div>
                                <div>
                                    <label for="nomor_mesin" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                        Mesin</label>
                                    <input type="text" name="nomor_mesin" id="nomor_mesin"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        placeholder="Masukkan nomor mesin">
                                </div>
                                <div>
                                    <label for="jenis_kendaraan"
                                        class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
                                    <select name="jenis_kendaraan" id="jenis_kendaraan"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                        <option value="">Pilih Jenis Kendaraan</option>
                                        <option value="mobil_penumpang">Mobil Penumpang</option>
                                        <option value="mobil_bus">Mobil Bus</option>
                                        <option value="mobil_barang">Mobil Barang</option>
                                        <option value="kendaraan_khusus">Kendaraan Khusus</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="tanggal_mati_uji"
                                        class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mati Uji</label>
                                    <input type="date" name="tanggal_mati_uji" id="tanggal_mati_uji"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-3 md:p-4 mb-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Left Column: Data Pengujian -->
                        <div class="pb-4">
                            <div
                                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                                <h2 class="text-lg font-bold text-white">3. Data Pengujian</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="jenis_layanan" class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                        Layanan</label>
                                    <select name="jenis_layanan" id="jenis_layanan"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                        <option value="">Pilih Jenis Pengujian</option>
                                        <option value="baru">Baru</option>
                                        <option value="berkala">Berkala</option>
                                        <option value="mutasi_keluar">Mutasi Keluar</option>
                                        <option value="mutasi_masuk">Mutasi Masuk</option>
                                        <option value="numpang_keluar">Numpang Keluar</option>
                                        <option value="numpang_masuk">Numpang Masuk</option>
                                        <option value="hilang">Cetak Hilang</option>
                                        <option value="rusak">Cetak Rusak</option>
                                        <option value="ubah_bentuk">Ubah Bentuk</option>
                                        <option value="ubah_sifat">Ubah Sifat</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="tanggal_pengujian"
                                        class="block text-sm font-medium text-gray-700 mb-1">Tanggal Pengujian</label>
                                    <input type="date" name="tanggal_pengujian" id="tanggal_pengujian"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Additional Options -->
                        <div class="pb-4">
                            <div
                                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1 mb-4">
                                <h2 class="text-lg font-bold text-white">5. Data Lainnya</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="ganti_kartu" class="block text-sm font-medium text-gray-700 mb-1">Ganti
                                        Kartu</label>
                                    <select name="ganti_kartu" id="ganti_kartu"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                        <option value="">Pilih</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="ya">Ya</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="dikuasakan"
                                        class="block text-sm font-medium text-gray-700 mb-1">Dikuasakan</label>
                                    <select name="dikuasakan" id="dikuasakan"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                        <option value="">Pilih</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="ya">Ya</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="status_pendaftaran"
                                        class="block text-sm font-medium text-gray-700 mb-1">Status Pendaftaran</label>
                                    <select name="status_pendaftaran" id="status_pendaftaran"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                                        <option value="">Pilih</option>
                                        <option value="diterima">Diterima</option>
                                        <option value="ditolak">Ditolak</option>
                                    </select>
                                </div>
                                <div class="md:col-span-3">
                                    <label for="keterangan_ditolak"
                                        class="block text-sm font-medium text-gray-700 mb-1">Keterangan Ditolak</label>
                                    <textarea name="keterangan_ditolak" id="keterangan_ditolak"
                                        class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                                        rows="2" placeholder="Masukkan keterangan jika ditolak"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end space-x-3">
                    <button type="button"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Daftar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('search-button').addEventListener('click', function() {
            const searchValue = document.getElementById('search_value').value.trim();
            const errorMessageDiv = document.getElementById('error-message');

            // Clear any previous messages and data
            errorMessageDiv.textContent = '';
            errorMessageDiv.classList.add('hidden');
            clearFormFields();

            if (!searchValue) {
                errorMessageDiv.textContent = 'Nomor Uji / Rangka tidak boleh kosong.';
                errorMessageDiv.classList.remove('hidden');
                return;
            }

            // Change button text and disable it during search
            this.textContent = 'Mencari...';
            this.disabled = true;

            fetch(`/api/search-kendaraan?search_value=${encodeURIComponent(searchValue)}`)
                .then(response => {
                    return response.json().then(data => {
                        if (!response.ok) {
                            throw new Error(data.message || 'Terjadi kesalahan saat mencari data.');
                        }
                        return data;
                    });
                })
                .then(result => {
                    if (result.success && result.data) {
                        fillFormFields(result.data);
                        // Optional: show a success message
                        console.log("Data kendaraan berhasil ditemukan.");
                    } else {
                        throw new Error(result.message || 'Data kendaraan tidak ditemukan.');
                    }
                })
                .catch(error => {
                    errorMessageDiv.textContent = error.message;
                    errorMessageDiv.classList.remove('hidden');
                    console.error('Error:', error);
                })
                .finally(() => {
                    this.textContent = 'Cari Data Kendaraan';
                    this.disabled = false;
                });
        });

        // Helper function to clear form fields
        function clearFormFields() {
            document.getElementById('nama_pemilik').value = '';
            document.getElementById('nomor_ktp').value = '';
            document.getElementById('alamat_pemilik').value = '';
            document.getElementById('nomor_whatsapp').value = '';
            document.getElementById('nomor_polisi').value = '';
            document.getElementById('nomor_mesin').value = '';
            document.getElementById('jenis_kendaraan').value = ''; // Resets select to default
            document.getElementById('tanggal_mati_uji').value = '';
        }

        // Helper function to fill form fields from API data
        function fillFormFields(data) {
            document.getElementById('nama_pemilik').value = data.nama_pemilik || '';
            document.getElementById('nomor_ktp').value = data.no_ktp || '';
            document.getElementById('alamat_pemilik').value = data.alamat || '';
            document.getElementById('nomor_whatsapp').value = data.no_telpon || '';
            document.getElementById('nomor_polisi').value = data.no_polisi || '';
            document.getElementById('nomor_mesin').value = data.no_mesin || '';
            document.getElementById('jenis_kendaraan').value = data.jenis_kendaraan || '';
            document.getElementById('tanggal_mati_uji').value = data.tanggal_mati_uji || '';
        }
    </script>
@endsection
