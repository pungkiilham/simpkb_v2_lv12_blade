@extends('admin.layouts.admin')

@section('title', 'Settings')
@section('header', 'Settings')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Pengaturan Sistem</h3>
        </div>
        <div class="p-6">
            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Aplikasi</label>
                    <input type="text" class="w-full rounded-lg border-gray-300" value="SIMPKB">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Sistem</label>
                    <input type="email" class="w-full rounded-lg border-gray-300" value="system@simpkb.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Zona Waktu</label>
                    <select class="w-full rounded-lg border-gray-300">
                        <option>Asia/Jakarta</option>
                        <option>Asia/Makassar</option>
                        <option>Asia/Jayapura</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Maintenance Mode</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 text-blue-600">
                            <span class="ml-2 text-sm text-gray-600">Aktifkan mode maintenance</span>
                        </label>
                    </div>
                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Simpan Pengaturan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Backup Database</h3>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <p class="text-sm text-gray-600">Backup terakhir: 20 Januari 2024 09:00</p>
                <button class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900">
                    Buat Backup Baru
                </button>
            </div>
        </div>
    </div>
</div>
@endsection