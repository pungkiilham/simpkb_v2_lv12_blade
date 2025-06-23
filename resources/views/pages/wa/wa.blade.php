@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-6">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl md:text-2xl font-bold text-gray-800">Daftar Kendaraan Mati Uji</h2>
                        <p class="text-sm text-gray-600 mt-1">Total: <span
                                class="font-semibold">{{ $total_kendaraan ?? 0 }}</span> kendaraan</p>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2">
                    <button onclick="openAddModal()"
                        class="inline-flex items-center px-4 py-2 gap-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8.5 4.5l7 7-7 7M15.5 4.5l7 7-7 7"></path>
                        </svg>
                        Kirim Broadcast
                    </button>
                </div>
            </div>
        </div>

        <!-- Expired Vehicle Tests Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">


            <!-- Expired Tests Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Data Pemilik</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Uji</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No. Pol</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Habis Uji</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No WhatsApp</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Expired Test Row -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                            <td class="px-6 py-4 text-sm text-gray-900">John Doe</td>
                            <td class="px-6 py-4 text-sm text-gray-900">PKB-2024-001</td>
                            <td class="px-6 py-4 text-sm text-gray-900">B 1234 CD</td>
                            <td class="px-6 py-4 text-sm text-gray-900">2024-01-15</td>
                            <td class="px-6 py-4 text-sm text-gray-900">+6281234567890</td>
                            <td class="px-6 py-4 text-sm">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Belum
                                    Dikirim</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function broadcastNotifications() {
            if (confirm('Apakah Anda yakin ingin mengirim broadcast ke semua kendaraan mati uji?')) {
                // Handle broadcast sending
                console.log('Sending broadcast notifications...');
            }
        }

        // Add datatable functionality if needed
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize datatables or other plugins here
        });
    </script>
@endpush
