@extends('admin.layouts.admin')

@section('title', 'Log Aktivitas')
@section('header', 'Log Aktivitas')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Log Aktivitas Sistem</h3>
            <div class="flex space-x-3">
                <select class="rounded-lg border-gray-300">
                    <option>Semua Aktivitas</option>
                    <option>Login</option>
                    <option>Pendaftaran</option>
                    <option>Pengujian</option>
                    <option>WA Blast</option>
                </select>
                <input type="date" class="rounded-lg border-gray-300" value="{{ date('Y-m-d') }}">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Waktu</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aktivitas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Detail</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">2024-01-20 09:30</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Login</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Login berhasil</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">2024-01-20 09:35</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">WA Blast</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">Mengirim notifikasi ke 50 nomor</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection