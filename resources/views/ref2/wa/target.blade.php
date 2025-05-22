@extends('admin.layouts.admin')

@section('title', 'Target WA')
@section('header', 'Target WA')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Kirim Notifikasi WA</h3>
            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                Kirim Pesan
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pilih Template</label>
                    <select class="w-full rounded-lg border-gray-300">
                        <option>Pengingat Jadwal Uji</option>
                        <option>Konfirmasi Pendaftaran</option>
                        <option>Hasil Pengujian</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                    <textarea rows="4" class="w-full rounded-lg border-gray-300" placeholder="Isi pesan..."></textarea>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Target Penerima</label>
                <div class="border rounded-lg p-4 space-y-2">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                        <span class="ml-2">Semua Kendaraan Terdaftar</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                        <span class="ml-2">Jadwal Pengujian Hari Ini</span>
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                        <span class="ml-2">Masa Berlaku Hampir Habis</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection