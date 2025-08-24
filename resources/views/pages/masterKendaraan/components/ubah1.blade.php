{{-- resources/views/pages/masterKendaraan/components/ubah1.blade.php --}}
<div class="space-y-8">
    <!-- Data Kendaraan -->
    <div class="space-y-6">
        <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">1. Data Kendaraan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_uji"
                    value="{{ old('nomor_uji', $kendaraan->nomor_uji) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('nomor_uji')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Kendaraan <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_kendaraan"
                    value="{{ old('nomor_kendaraan', $kendaraan->nomor_kendaraan) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('nomor_kendaraan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Pemilik</label>
                <select name="jenis_pemilik_id"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    <option value="">Pilih Jenis Pemilik</option>
                    <option value="1" {{ old('jenis_pemilik_id', $kendaraan->jenis_pemilik_id) == '1' ? 'selected' : '' }}>Perorangan</option>
                    <option value="2" {{ old('jenis_pemilik_id', $kendaraan->jenis_pemilik_id) == '2' ? 'selected' : '' }}>Perusahaan</option>
                </select>
                @error('jenis_pemilik_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik <span class="text-red-500">*</span></label>
                <input type="text" name="nama_pemilik"
                    value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('nama_pemilik')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Identitas</label>
                <input type="text" name="jenis_identitas"
                    value="{{ old('jenis_identitas', $kendaraan->jenis_identitas) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('jenis_identitas')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Identitas <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_identitas"
                    value="{{ old('nomor_identitas', $kendaraan->nomor_identitas) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('nomor_identitas')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                <input type="text" name="tempat_lahir"
                    value="{{ old('tempat_lahir', $kendaraan->tempat_lahir) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('tempat_lahir')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir"
                    value="{{ old('tanggal_lahir', $kendaraan->tanggal_lahir) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('tanggal_lahir')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" {{ old('jenis_kelamin', $kendaraan->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $kendaraan->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Pemilik</label>
                <input type="text" name="alamat_pemilik"
                    value="{{ old('alamat_pemilik', $kendaraan->alamat_pemilik) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('alamat_pemilik')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">RT</label>
                <input type="text" name="rt"
                    value="{{ old('rt', $kendaraan->rt) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('rt')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">RW</label>
                <input type="text" name="rw"
                    value="{{ old('rw', $kendaraan->rw) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('rw')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
                <input type="text" name="kelurahan"
                    value="{{ old('kelurahan', $kendaraan->kelurahan) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('kelurahan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                <input type="text" name="kecamatan"
                    value="{{ old('kecamatan', $kendaraan->kecamatan) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('kecamatan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kabupaten</label>
                <input type="text" name="kabupaten"
                    value="{{ old('kabupaten', $kendaraan->kabupaten) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('kabupaten')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
                <input type="text" name="provinsi"
                    value="{{ old('provinsi', $kendaraan->provinsi) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('provinsi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Awal Pakai</label>
                <input type="text" name="awal_pakai"
                    value="{{ old('awal_pakai', $kendaraan->awal_pakai) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('awal_pakai')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                <input type="text" name="tahun"
                    value="{{ old('tahun', $kendaraan->tahun) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('tahun')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin</label>
                <input type="text" name="nomor_mesin"
                    value="{{ old('nomor_mesin', $kendaraan->nomor_mesin) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('nomor_mesin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka <span class="text-red-500">*</span></label>
                <input type="text" name="nomor_rangka"
                    value="{{ old('nomor_rangka', $kendaraan->nomor_rangka) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('nomor_rangka')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nomor WA</label>
                <input type="text" name="nomor_wa"
                    value="{{ old('nomor_wa', $kendaraan->nomor_wa) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('nomor_wa')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan <span class="text-red-500">*</span></label>
                <select name="jenis_kendaraan_id"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                    <option value="">Pilih Jenis Kendaraan</option>
                    {{-- Asumsi ID 1 untuk PICK UP, sesuaikan jika ada mapping lain --}}
                    <option value="1" {{ old('jenis_kendaraan_id', $kendaraan->jenis_kendaraan_id) == '1' ? 'selected' : '' }}>PICK UP</option>
                    {{-- Tambahkan opsi lain sesuai jenis kendaraan yang ada --}}
                </select>
                @error('jenis_kendaraan_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Jenis Kendaraan</label>
                <input type="text" name="keterangan_jenis_kendaraan"
                    value="{{ old('keterangan_jenis_kendaraan', $kendaraan->keterangan_jenis_kendaraan) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('keterangan_jenis_kendaraan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <input type="text" name="status"
                    value="{{ old('status', $kendaraan->status) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('status')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Merk</label>
                <input type="text" name="merk"
                    value="{{ old('merk', $kendaraan->merk) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('merk')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tipe</label>
                <input type="text" name="tipe"
                    value="{{ old('tipe', $kendaraan->tipe) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('tipe')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Importir</label>
                <input type="text" name="nama_importir"
                    value="{{ old('nama_importir', $kendaraan->nama_importir) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('nama_importir')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Uji</label>
                <input type="date" name="tanggal_uji"
                    value="{{ old('tanggal_uji', $kendaraan->tanggal_uji) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                @error('tanggal_uji')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mati Uji <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_mati_uji"
                    value="{{ old('tanggal_mati_uji', $kendaraan->tanggal_mati_uji) }}"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                    required>
                @error('tanggal_mati_uji')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Active</label>
                <select name="active"
                    class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                    <option value="1" {{ old('active', $kendaraan->active) == '1' ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ old('active', $kendaraan->active) == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
                @error('active')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
</div>
