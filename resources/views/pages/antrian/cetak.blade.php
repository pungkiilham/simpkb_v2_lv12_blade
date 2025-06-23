@extends('layouts.admin')

@section('content')
    <div class="p-4 sm:p-6">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                        </svg>
                    </div>
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Cetak Nomor Antrian</h1>
                </div>
            </div>
        </div>

        <!-- Queue Tickets Container -->
        <div class="flex justify-center space-x-4 gap-12">
            <!-- Queue Ticket Type A -->
            <div class="grid justify-center gap-4">
                <button onclick="printTicket('A')"
                    class="text-xl bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Cetak Antrian A
                    <span class="mt-2 text-sm block">(Uji Baru/Berkala/Numpang Masuk)</span>
                </button>
                <div id="ticketA" class="bg-white p-6 border-2 rounded-lg shadow-lg" style="width: 80mm;">
                    <!-- Header -->
                    <div class="text-center mb-6">
                        <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-16 mx-auto mb-2">
                        <h1 class="text-xl font-bold text-gray-800">DINAS PERHUBUNGAN KOTA BATU</h1>
                        <p class="text-sm text-gray-600">UPT Pengujian Kendaraan Bermotor</p>
                    </div>

                    <!-- Queue Number -->
                    <div class="text-center mb-6">
                        <p class="text-sm text-gray-600 mb-2">Nomor Antrian</p>
                        <div class="text-5xl font-bold text-blue-600 mb-2">A001</div>
                        <p class="text-lg font-semibold text-gray-800">{{ date('d/m/Y') }}</p>
                        <div class="text-md font-medium text-blue-600 mt-2">
                            <p>Uji Baru</p>
                            <p>Uji Berkala</p>
                            <p>Numpang Masuk</p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="text-center text-xs text-gray-500 border-t pt-4">
                        <p>Silahkan menunggu nomor antrian anda dipanggil</p>
                        <p class="font-medium">Terima Kasih</p>
                        <p class="mt-2">{{ date('H:i:s') }}</p>
                    </div>
                </div>
            </div>
            <!-- Queue Ticket Type B -->
            <div class="grid justify-center place-items-center gap-4">
                <button onclick="printTicket('B')"
                    class="text-xl bg-green-600 text-white px-6 py-5 rounded-lg hover:bg-green-700 transition duration-200">
                    Cetak Antrian B
                    <span class="mt-2 text-sm block">(Numpang Keluar/Mutasi/Cetak Ulang/Lainnya)</span>
                </button>
                <div id="ticketB" class="bg-white p-6 border-2 rounded-lg shadow-lg" style="width: 80mm;">
                    <!-- Header -->
                    <div class="text-center mb-6">
                        <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-16 mx-auto mb-2">
                        <h1 class="text-xl font-bold text-gray-800">DINAS PERHUBUNGAN KOTA BATU</h1>
                        <p class="text-sm text-gray-600">UPT Pengujian Kendaraan Bermotor</p>
                    </div>

                    <!-- Queue Number -->
                    <div class="text-center mb-6">
                        <p class="text-sm text-gray-600 mb-2">Nomor Antrian</p>
                        <div class="text-5xl font-bold text-green-600 mb-2">B001</div>
                        <p class="text-lg font-semibold text-gray-800">{{ date('d/m/Y') }}</p>
                        <div class="text-md font-medium text-green-600 mt-2">
                            <p>Numpang Keluar</p>
                            <p>Mutasi</p>
                            <p>Cetak Ulang</p>
                            <p>Layanan Lainnya</p>
                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="text-center text-xs text-gray-500 border-t pt-4">
                        <p>Silahkan menunggu nomor antrian anda dipanggil</p>
                        <p class="font-medium">Terima Kasih</p>
                        <p class="mt-2">{{ date('H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printTicket(type) {
            // Hide both tickets first
            document.getElementById('ticketA').style.display = 'none';
            document.getElementById('ticketB').style.display = 'none';

            // Show the selected ticket
            if (type === 'A') {
                document.getElementById('ticketA').style.display = 'block';
            } else {
                document.getElementById('ticketB').style.display = 'block';
            }

            // Trigger print
            window.print();

            // After printing, show ticket B by default
            setTimeout(() => {
                document.getElementById('ticketA').style.display = 'none';
                document.getElementById('ticketB').style.display = 'block';
            }, 100);
        }
    </script>
@endsection

</html>
