<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Antrian - SIM PKB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Ensure all links open in new tabs
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a');
            links.forEach(link => {
                if (!link.hasAttribute('target')) {
                    link.setAttribute('target', '_blank');
                }
            });
        });
    </script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen max-w-7xl mx-auto p-4">
        <!-- Custom Navigation Bar -->
        <nav class="bg-white mx-auto shadow-lg sticky top-0 z-50 mb-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <!-- Left side: Logo and Title -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-16 w-auto">
                        <div class="border-l-2 border-gray-300 pl-4">
                            <div class="text-2xl font-bold text-gray-800">UPT Pengujian Kendaraan Bermotor</div>
                            <div class="text-lg text-gray-600">DISHUB Kota Batu</div>
                        </div>
                    </div>

                    <!-- Right side: Date and Time -->
                    <div class="flex items-center">
                        <div class="text-xl font-medium text-gray-700" id="currentDateTime"></div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Add this script before closing body tag -->
        <script>
            function updateDateTime() {
                const now = new Date();
                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit',
                    hour12: false
                };
                document.getElementById('currentDateTime').textContent = now.toLocaleDateString('id', options);
            }

            // Update time immediately and then every second
            updateDateTime();
            setInterval(updateDateTime, 1000);
        </script>


        <!-- Main Content -->
        <div class="max-w-7xl mx-auto ">
            <!-- Queue Table -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    {{-- <h2 class="text-2xl font-bold text-gray-800 mb-4">Status Antrian Pengujian</h2> --}}
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-blue-600 text-white">
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">No
                                    </th>
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">
                                        Status
                                        Proses</th>
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">
                                        Nama
                                        Pemilik</th>
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">No
                                        Polisi</th>
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">No
                                        Uji
                                    </th>
                                    <th class="px-6 py-4 text-center text-sm font-bold uppercase tracking-wider">
                                        Jenis
                                        Kendaraan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <!-- Sample Queue Items with alternating colors -->
                                <tr class="bg-blue-50 border-b-2">
                                    <td class="px-6 py-2 text-center text-md font-medium text-gray-900">1</td>
                                    <td class="px-6 py-2 text-center">
                                        <span
                                            class="px-3 py-1 text-md font-semibold rounded-full bg-yellow-100 text-yellow-800">Dalam
                                            Proses</span>
                                    </td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Budi Santoso</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">B 1234 CD</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">UJI/2024/001</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Truck</td>
                                </tr>
                                <tr class="bg-white border-b-2">
                                    <td class="px-6 py-2 text-center text-md font-medium text-gray-900">2</td>
                                    <td class="px-6 py-2 text-center">
                                        <span
                                            class="px-3 py-1 text-center text-md font-semibold rounded-full bg-green-100 text-green-800">Cetak
                                            Kartu</span>
                                    </td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Ahmad Wijaya</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">B 5678 EF</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">UJI/2024/002</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Bus</td>
                                </tr>
                                <tr class="bg-blue-50 border-b-2">
                                    <td class="px-6 py-2 text-center text-md font-medium text-gray-900">3</td>
                                    <td class="px-6 py-2 text-center">
                                        <span
                                            class="px-3 py-1 text-center text-md font-semibold rounded-full text-gray-900">Tunggu</span>
                                    </td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Siti Rahayu</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">B 9012 GH</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">UJI/2024/003</td>
                                    <td class="px-6 py-2 text-center text-md text-gray-900">Truck</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
