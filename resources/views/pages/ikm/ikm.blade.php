<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Kepuasan Masyarakat - DISHUB Kota Batu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen p-4">
        <!-- Header with Logo -->
        <div class="text-center mb-8">
            <img src="{{ asset('assets/logodishub.png') }}" alt="DISHUB Logo" class="h-24 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-gray-800">DINAS PERHUBUNGAN KOTA BATU</h1>
            <p class="text-xl text-gray-600">UPT Pengujian Kendaraan Bermotor</p>
        </div>

        <!-- Survey Form -->
        <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Survey Kepuasan Masyarakat</h2>
            
            <form action="/ikm/submit" method="POST" class="space-y-6">
                @csrf
                <!-- Personal Information -->
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" name="name" required 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">No. Telepon</label>
                            <input type="tel" name="phone" required 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>

                <!-- Rating Questions -->
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800">Penilaian Layanan</h3>
                    
                    <!-- Question 1 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 font-medium mb-3">1. Bagaimana penilaian Anda terhadap kecepatan pelayanan?</p>
                        <div class="flex justify-center space-x-8">
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="speed_rating" value="1" class="hidden" required>
                                <div class="text-4xl mb-1 text-gray-400 hover:text-red-500 transition-colors">😞</div>
                                <span class="text-sm text-gray-600">Kurang</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="speed_rating" value="2" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-yellow-500 transition-colors">😐</div>
                                <span class="text-sm text-gray-600">Cukup</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="speed_rating" value="3" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-500 transition-colors">😊</div>
                                <span class="text-sm text-gray-600">Baik</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="speed_rating" value="4" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-600 transition-colors">😄</div>
                                <span class="text-sm text-gray-600">Sangat Baik</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 font-medium mb-3">2. Bagaimana penilaian Anda terhadap keramahan petugas?</p>
                        <div class="flex justify-center space-x-8">
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="friendliness_rating" value="1" class="hidden" required>
                                <div class="text-4xl mb-1 text-gray-400 hover:text-red-500 transition-colors">😞</div>
                                <span class="text-sm text-gray-600">Kurang</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="friendliness_rating" value="2" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-yellow-500 transition-colors">😐</div>
                                <span class="text-sm text-gray-600">Cukup</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="friendliness_rating" value="3" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-500 transition-colors">😊</div>
                                <span class="text-sm text-gray-600">Baik</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="friendliness_rating" value="4" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-600 transition-colors">😄</div>
                                <span class="text-sm text-gray-600">Sangat Baik</span>
                            </label>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-700 font-medium mb-3">3. Bagaimana penilaian Anda terhadap kebersihan fasilitas?</p>
                        <div class="flex justify-center space-x-8">
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="cleanliness_rating" value="1" class="hidden" required>
                                <div class="text-4xl mb-1 text-gray-400 hover:text-red-500 transition-colors">😞</div>
                                <span class="text-sm text-gray-600">Kurang</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="cleanliness_rating" value="2" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-yellow-500 transition-colors">😐</div>
                                <span class="text-sm text-gray-600">Cukup</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="cleanliness_rating" value="3" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-500 transition-colors">😊</div>
                                <span class="text-sm text-gray-600">Baik</span>
                            </label>
                            <label class="flex flex-col items-center cursor-pointer">
                                <input type="radio" name="cleanliness_rating" value="4" class="hidden">
                                <div class="text-4xl mb-1 text-gray-400 hover:text-green-600 transition-colors">😄</div>
                                <span class="text-sm text-gray-600">Sangat Baik</span>
                            </label>
                        </div>
                    </div>

                    <!-- Feedback Text Area -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <label class="block text-gray-700 font-medium mb-2">Saran dan Masukan</label>
                        <textarea name="feedback" rows="4" 
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Berikan saran atau masukan Anda untuk peningkatan layanan kami..."></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                        class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors"
                    >Kirim Penilaian</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Add active state to rating options
        document.querySelectorAll('input[type="radio"]').forEach(input => {
            input.addEventListener('change', function() {
                // Reset all in the same group
                const name = this.getAttribute('name');
                document.querySelectorAll(`input[name="${name}"] + div`).forEach(div => {
                    div.classList.add('text-gray-400');
                    div.classList.remove('text-red-500', 'text-yellow-500', 'text-green-500', 'text-green-600');
                });

                // Set active state
                const value = parseInt(this.value);
                const emoji = this.nextElementSibling;
                switch(value) {
                    case 1:
                        emoji.classList.add('text-red-500');
                        break;
                    case 2:
                        emoji.classList.add('text-yellow-500');
                        break;
                    case 3:
                        emoji.classList.add('text-green-500');
                        break;
                    case 4:
                        emoji.classList.add('text-green-600');
                        break;
                }
            });
        });
    </script>
</body>
</html>