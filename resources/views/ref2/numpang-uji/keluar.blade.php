@extends('admin.layouts.admin')

@section('title', 'Numpang Uji Keluar')
@section('header', 'Numpang Uji Keluar')

@section('content')
<div class="space-y-6">
    <!-- Search and Filter Section -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Cari Kendaraan</h3>
                <div class="flex gap-3">
                    <input type="text" placeholder="Nomor Kendaraan" class="flex-1 rounded-lg border-gray-300">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Cari
                    </button>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-800">Daerah Tujuan</h3>
                <select class="w-full rounded-lg border-gray-300">
                    <option value="">Pilih Daerah Tujuan</option>
                    <option value="jakarta">DKI Jakarta</option>
                    <option value="bandung">Kota Bandung</option>
                    <option value="surabaya">Kota Surabaya</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Data Numpang Uji Keluar</h3>
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji</label>
                    <input type="text" class="w-full rounded-lg border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Kendaraan</label>
                    <input type="text" class="w-full rounded-lg border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
                    <input type="text" class="w-full rounded-lg border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
                    <select class="w-full rounded-lg border-gray-300">
                        <option value="">Pilih Jenis Kendaraan</option>
                        <option value="mobil_penumpang">Mobil Penumpang</option>
                        <option value="mobil_bus">Mobil Bus</option>
                        <option value="mobil_barang">Mobil Barang</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Numpang Uji</label>
                    <input type="date" class="w-full rounded-lg border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select class="w-full rounded-lg border-gray-300">
                        <option value="proses">Dalam Proses</option>
                        <option value="selesai">Selesai</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Masa Berlaku Uji</label>
                    <input type="date" class="w-full rounded-lg border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Alasan Numpang Uji</label>
                    <textarea class="w-full rounded-lg border-gray-300" rows="2"></textarea>
                </div>
            </div>

            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50">
                    Reset
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- Recent Table -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Riwayat Numpang Uji Keluar</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Kendaraan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Daerah Tujuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Masa Berlaku</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">20/01/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">B 1234 CD</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Kota Bandung</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">20/07/2024</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Dalam Proses
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-900">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Hapus</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection