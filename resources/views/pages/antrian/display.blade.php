<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Antrian - DISHUB Kota Batu</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen p-4">
        <!-- Header with Logo and Title -->
        <div class="text-center mb-8">
            <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-20 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">UPT Pengujian Kendaraan Bermotor</h1>
            <p class="text-2xl font-medium text-gray-600">DISHUB KOTA BATU</p>
        </div>

        <!-- Main Content Grid -->
        <div class="container mx-auto grid grid-cols-12 gap-8">

            <!-- Left Side: Video Player -->
            <div class="col-span-12 lg:col-span-9">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="relative w-full" style="padding-top: 56.25%;"> <!-- 16:9 Aspect Ratio -->
                        <iframe src="https://www.youtube.com/embed/mRr4YvPvunI" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="absolute top-0 left-0 w-full h-full"></iframe>
                    </div>
                </div>
            </div>

            <!-- Right Side: Queue Cards -->
            <div class="col-span-12 lg:col-span-3 space-y-6">
                <!-- Queue A Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-blue-600 text-white p-4">
                        <h2 class="text-2xl font-bold text-center">Antrian A</h2>
                    </div>
                    <div class="p-6">
                        <div class="text-center">
                            <p class="text-gray-600 mb-2">Nomor Antrian Saat Ini</p>
                            <div class="text-6xl font-bold text-blue-600 mb-4" id="displayQueueA">A001</div>
                            <div class="text-sm font-medium text-blue-600 space-y-1">
                                <p>Uji Baru</p>
                                <p>Uji Berkala</p>
                                <p>Numpang Masuk</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Queue B Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-green-600 text-white p-4">
                        <h2 class="text-2xl font-bold text-center">Antrian B</h2>
                    </div>
                    <div class="p-6">
                        <div class="text-center">
                            <p class="text-gray-600 mb-2">Nomor Antrian Saat Ini</p>
                            <div class="text-6xl font-bold text-green-600 mb-4" id="displayQueueB">B001</div>
                            <div class="text-sm font-medium text-green-600 space-y-1">
                                <p>Numpang Keluar</p>
                                <p>Mutasi</p>
                                <p>Cetak Ulang</p>
                                <p>Layanan Lainnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call Popup Dialog -->
        <div id="callDialog" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl shadow-2xl p-8 max-w-2xl w-full mx-4 transform scale-95 transition-all">
                <div class="text-center">
                    <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-24 mx-auto mb-4">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Nomor Antrian</h2>
                    <div id="callNumber" class="text-8xl font-bold text-blue-600 my-8">A001</div>
                    <p id="callService" class="text-2xl text-gray-600 mb-4">Uji Berkala</p>
                    <p class="text-xl font-semibold text-gray-800">Silahkan menuju loket pelayanan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Test Buttons -->
    <div class="fixed bottom-4 right-4 space-x-4 flex">
        <button onclick="showCallDialog('A001', 'Uji Berkala', 'A')"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
            Test Queue A
        </button>
        <button onclick="showCallDialog('B001', 'Numpang Keluar', 'B')"
            class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
            Test Queue B
        </button>
    </div>

    <script>
        // Update date and time
        function updateDateTime() {
            const now = new Date();
            const timeOptions = {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false
            };
            const dateOptions = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };

            document.getElementById('currentTime').textContent = now.toLocaleTimeString('id-ID', timeOptions);
            document.getElementById('currentDate').textContent = now.toLocaleDateString('id-ID', dateOptions);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();

        // Function to show call dialog
        // Updated showCallDialog function
        function showCallDialog(queueNumber, service, type) {
            const color = type === 'A' ? '#2563eb' : '#059669'; // blue-600 or green-600

            // Play notification sound
            const audio = new Audio('/assets/notification.mp3');
            audio.play();

            Swal.fire({
                title: '<div class="text-center"><class="h-24 mx-auto mb-4"><h2 class="text-3xl font-bold text-gray-800">Nomor Antrian</h2></div>',
                html: `
                    <div class="text-center">
                        <div class="text-8xl font-bold my-8" style="color: ${color}">${queueNumber}</div>

                        <p class="text-xl font-semibold text-gray-800">Silahkan menuju loket pelayanan</p>
                    </div>
                `,
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                customClass: {
                    popup: 'rounded-xl shadow-2xl',
                    title: 'border-b pb-4',
                },
                width: '32rem',
                padding: '2rem',
                background: '#ffffff',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false
            });

            // Update queue display
            const display = document.getElementById(`displayQueue${type}`);
            display.textContent = queueNumber;
        }

        // Function to update queue display
        function updateQueue(type, number) {
            const display = document.getElementById(`displayQueue${type}`);
            display.textContent = number;
        }
    </script>
</body>

</html>
