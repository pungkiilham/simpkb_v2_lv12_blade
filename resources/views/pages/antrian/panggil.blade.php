@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z" />
                          </svg>
                    </div>
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Panggil Antrian</h1>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left Column: Queue Printing -->
            <div class="space-y-6">
                <!-- Queue A Calling -->
                <div class="bg-white p-6 border-2 rounded-lg shadow-lg">

                    <!-- Queue Number -->
                    <div class="text-center mb-6">
                        <p class="text-sm text-gray-600 mb-2">Nomor Antrian</p>
                        <div class="text-7xl font-bold text-blue-600 mb-2" id="queueNumberA">A001</div>
                        <div class="text-md font-medium text-blue-600 mt-2">
                            <p>Uji Baru</p>
                            <p>Uji Berkala</p>
                            <p>Numpang Masuk</p>
                            <p class="text-white">Numpang Masuk</p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="flex justify-center space-x-4 mt-6">
                        <button onclick="previousQueueA()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                            <i class="fas fa-chevron-left mr-2"></i>Sebelumnya
                        </button>
                        <button onclick="callQueueA()"
                            class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                            <i class="fas fa-volume-up mr-2"></i>Panggil
                        </button>
                        <button onclick="nextQueueA()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                            Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Column: Queue Calling -->
            <div class="space-y-6">
                <!-- Queue B Calling -->
                <div class="bg-white p-6 border-2 rounded-lg shadow-lg">
                    <!-- Queue Number -->
                    <div class="text-center mb-6">
                        <p class="text-sm text-gray-600 mb-2">Nomor Antrian</p>
                        <div class="text-7xl font-bold text-green-600 mb-2" id="queueNumberB">B001</div>
                        <div class="text-md font-medium text-green-600 mt-2">
                            <p>Numpang Keluar</p>
                            <p>Mutasi</p>
                            <p>Cetak Ulang</p>
                            <p>Layanan Lainnya</p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="flex justify-center space-x-4 mt-6">
                        <button onclick="previousQueueB()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                            <i class="fas fa-chevron-left mr-2"></i>Sebelumnya
                        </button>
                        <button onclick="callQueueB()"
                            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition duration-200">
                            <i class="fas fa-volume-up mr-2"></i>Panggil
                        </button>
                        <button onclick="nextQueueB()"
                            class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-200">
                            Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Update date and time
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
                document.getElementById('currentDateTime').textContent = now.toLocaleDateString('id-ID', options);
            }

            setInterval(updateDateTime, 1000);
            updateDateTime();

            // Queue A functions
            let currentQueueA = 1;
            let printQueueA = 1;

            function updateQueueA() {
                document.getElementById('queueNumberA').textContent = `A-${String(currentQueueA).padStart(3, '0')}`;
            }

            function updatePrintA() {
                document.getElementById('printNumberA').textContent = `A-${String(printQueueA).padStart(3, '0')}`;
            }

            function nextQueueA() {
                currentQueueA++;
                updateQueueA();
            }

            function previousQueueA() {
                if (currentQueueA > 1) {
                    currentQueueA--;
                    updateQueueA();
                }
            }

            function callQueueA() {
                // Add audio call implementation here
                alert(`Memanggil nomor antrian ${document.getElementById('queueNumberA').textContent}`);
            }

            function printTicketA() {
                // Add print implementation here
                alert(`Mencetak nomor antrian A-${String(printQueueA).padStart(3, '0')}`);
                printQueueA++;
                updatePrintA();
            }

            // Queue B functions
            let currentQueueB = 1;
            let printQueueB = 1;

            function updateQueueB() {
                document.getElementById('queueNumberB').textContent = `B-${String(currentQueueB).padStart(3, '0')}`;
            }

            function updatePrintB() {
                document.getElementById('printNumberB').textContent = `B-${String(printQueueB).padStart(3, '0')}`;
            }

            function nextQueueB() {
                currentQueueB++;
                updateQueueB();
            }

            function previousQueueB() {
                if (currentQueueB > 1) {
                    currentQueueB--;
                    updateQueueB();
                }
            }

            function callQueueB() {
                // Add audio call implementation here
                alert(`Memanggil nomor antrian ${document.getElementById('queueNumberB').textContent}`);
            }

            function printTicketB() {
                // Add print implementation here
                alert(`Mencetak nomor antrian B-${String(printQueueB).padStart(3, '0')}`);
                printQueueB++;
                updatePrintB();
            }
        </script>
    @endpush
@endsection
