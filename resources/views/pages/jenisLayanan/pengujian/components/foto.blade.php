<div class="space-y-8">
    <!-- Foto kendaraan -->
    <div class="space-y-6">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="flex justify-between items-center bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg px-2 py-1">
                <h2 class="text-lg font-bold text-white">1. Foto Kendaraan</h2>
                <button type="submit"
                    class="inline-flex items-center p-1 bg-white text-indigo-600 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all text-sm font-semibold gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                    </svg>
                    Simpan
                </button>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-4">
                <!-- Foto Depan -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Foto Depan</label>
                    <input type="file" name="foto_depan" id="foto_depan" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        onchange="previewImage(this, 'preview_foto_depan')">
                    <div id="preview_foto_depan" class="hidden mt-2">
                        <img src="#" alt="Preview Foto Depan"
                            class="h-24 w-auto object-cover rounded-lg border-2 border-gray-200">
                    </div>
                </div>

                <!-- Foto Belakang -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Foto Belakang</label>
                    <input type="file" name="foto_belakang" id="foto_belakang" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        onchange="previewImage(this, 'preview_foto_belakang')">
                    <div id="preview_foto_belakang" class="hidden mt-2">
                        <img src="#" alt="Preview Foto Belakang"
                            class="h-24 w-auto object-cover rounded-lg border-2 border-gray-200">
                    </div>
                </div>

                <!-- Foto kiri -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Foto Kiri</label>
                    <input type="file" name="foto_kiri" id="foto_kiri" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        onchange="previewImage(this, 'preview_foto_kiri')">
                    <div id="preview_foto_kiri" class="hidden mt-2">
                        <img src="#" alt="Preview Foto Kiri"
                            class="h-24 w-auto object-cover rounded-lg border-2 border-gray-200">
                    </div>
                </div>

                <!-- Foto kanan -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Foto Kanan</label>
                    <input type="file" name="foto_kanan" id="foto_kanan" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        onchange="previewImage(this, 'preview_foto_kanan')">
                    <div id="preview_foto_kanan" class="hidden mt-2">
                        <img src="#" alt="Preview Foto Kanan"
                            class="h-24 w-auto object-cover rounded-lg border-2 border-gray-200">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(input, previewId) {
        const preview = document.getElementById(previewId);
        const previewImg = preview.querySelector('img');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.classList.remove('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            previewImg.src = '#';
            preview.classList.add('hidden');
        }
    }
</script>
