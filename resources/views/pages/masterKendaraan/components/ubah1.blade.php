{{-- resources/views/pages/masterKendaraan/components/ubah1.blade.php --}}
<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">1. Data Kendaraan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji</label>
            <input type="text" name="nomor_uji" value="{{ old('nomor_uji', $kendaraan->nomor_uji ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_uji')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Kendaraan</label>
            <input type="text" name="nomor_kendaraan" value="{{ old('nomor_kendaraan', $kendaraan->nomor_kendaraan ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_kendaraan')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Pemilik</label>
            <select name="jenis_pemilik_id"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                <option value="">Pilih Jenis Pemilik</option>
                <option value="1" {{ old('jenis_pemilik_id', $kendaraan->jenis_pemilik_id ?? '') == '1' ? 'selected' : '' }}>Perorangan</option>
                <option value="2" {{ old('jenis_pemilik_id', $kendaraan->jenis_pemilik_id ?? '') == '2' ? 'selected' : '' }}>Perusahaan</option>
                <option value="3" {{ old('jenis_pemilik_id', $kendaraan->jenis_pemilik_id ?? '') == '3' ? 'selected' : '' }}>Instansi</option>
                {{-- Tambahkan opsi lain sesuai dengan ID dan deskripsi jenis pemilik Anda --}}
            </select>
            @error('jenis_pemilik_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik', $kendaraan->nama_pemilik ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nama_pemilik')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
            <input type="tel" name="nomor_wa" value="{{ old('nomor_wa', $kendaraan->nomor_wa ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_wa')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Identitas</label>
            <select name="jenis_identitas"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                <option value="">Pilih Jenis Identitas</option>
                <option value="KTP" {{ old('jenis_identitas', $kendaraan->jenis_identitas ?? '') == 'KTP' ? 'selected' : '' }}>KTP</option>
                <option value="SIM" {{ old('jenis_identitas', $kendaraan->jenis_identitas ?? '') == 'SIM' ? 'selected' : '' }}>SIM</option>
                <option value="Passport" {{ old('jenis_identitas', $kendaraan->jenis_identitas ?? '') == 'Passport' ? 'selected' : '' }}>Passport</option>
                <option value="NPWP" {{ old('jenis_identitas', $kendaraan->jenis_identitas ?? '') == 'NPWP' ? 'selected' : '' }}>NPWP</option>
            </select>
            @error('jenis_identitas')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Identitas</label>
            <input type="text" name="nomor_identitas" value="{{ old('nomor_identitas', $kendaraan->nomor_identitas ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_identitas')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $kendaraan->tempat_lahir ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('tempat_lahir')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                value="{{ old('tanggal_lahir', (isset($kendaraan->tanggal_lahir) && $kendaraan->tanggal_lahir && $kendaraan->tanggal_lahir != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->tanggal_lahir)->format('Y-m-d') : '') }}"
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
                <option value="Laki-laki" {{ old('jenis_kelamin', $kendaraan->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $kendaraan->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Pemilik</label>
            <textarea name="alamat_pemilik" rows="3"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">{{ old('alamat_pemilik', $kendaraan->alamat_pemilik ?? '') }}</textarea>
            @error('alamat_pemilik')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RT</label>
            <input type="text" name="rt" value="{{ old('rt', $kendaraan->rt ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('rt')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RW</label>
            <input type="text" name="rw" value="{{ old('rw', $kendaraan->rw ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('rw')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
            <input type="text" name="kelurahan" value="{{ old('kelurahan', $kendaraan->kelurahan ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('kelurahan')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
            <input type="text" name="kecamatan" value="{{ old('kecamatan', $kendaraan->kecamatan ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('kecamatan')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kota/Kabupaten</label>
            <input type="text" name="kabupaten" value="{{ old('kabupaten', $kendaraan->kabupaten ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('kabupaten')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
            <input type="text" name="provinsi" value="{{ old('provinsi', $kendaraan->provinsi ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('provinsi')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Awal Pakai</label>
            <input type="date" name="awal_pakai"
                value="{{ old('awal_pakai', (isset($kendaraan->awal_pakai) && $kendaraan->awal_pakai && $kendaraan->awal_pakai != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->awal_pakai)->format('Y-m-d') : '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('awal_pakai')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
            <input type="number" name="tahun" value="{{ old('tahun', $kendaraan->tahun ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('tahun')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin</label>
            <input type="text" name="nomor_mesin" value="{{ old('nomor_mesin', $kendaraan->nomor_mesin ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_mesin')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka</label>
            <input type="text" name="nomor_rangka" value="{{ old('nomor_rangka', $kendaraan->nomor_rangka ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nomor_rangka')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
            <select name="jenis_kendaraan_id"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                <option value="">Pilih Jenis Kendaraan</option>
                {{-- Anda perlu memastikan ID ini sesuai dengan data Anda di tabel 'jenis_kendaraans' --}}
                <option value="1" {{ old('jenis_kendaraan_id', $kendaraan->jenis_kendaraan_id ?? '') == '1' ? 'selected' : '' }}>Mobil Penumpang Sedan</option>
                <option value="2" {{ old('jenis_kendaraan_id', $kendaraan->jenis_kendaraan_id ?? '') == '2' ? 'selected' : '' }}>Mobil Penumpang Bukan Sedan</option>
                <option value="3" {{ old('jenis_kendaraan_id', $kendaraan->jenis_kendaraan_id ?? '') == '3' ? 'selected' : '' }}>PICK UP</option>
                {{-- Tambahkan semua opsi lain yang sesuai dengan ID dan deskripsi jenis kendaraan Anda --}}
            </select>
            @error('jenis_kendaraan_id')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                <option value="">Pilih Status</option>
                <option value="Umum" {{ old('status', $kendaraan->status ?? '') == 'Umum' ? 'selected' : '' }}>Umum</option>
                <option value="Tidak Umum" {{ old('status', $kendaraan->status ?? '') == 'Tidak Umum' ? 'selected' : '' }}>Tidak Umum</option>
            </select>
            @error('status')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Jenis Kendaraan</label>
            <textarea name="keterangan_jenis_kendaraan" rows="2"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">{{ old('keterangan_jenis_kendaraan', $kendaraan->keterangan_jenis_kendaraan ?? '') }}</textarea>
            @error('keterangan_jenis_kendaraan')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Merk</label>
            <input type="text" name="merk" value="{{ old('merk', $kendaraan->merk ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('merk')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipe</label>
            <input type="text" name="tipe" value="{{ old('tipe', $kendaraan->tipe ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('tipe')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Importir/Pabrikan</label>
            <input type="text" name="nama_importir" value="{{ old('nama_importir', $kendaraan->nama_importir ?? '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('nama_importir')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mati Uji</label>
            <input type="date" name="tanggal_mati_uji"
                value="{{ old('tanggal_mati_uji', (isset($kendaraan->tanggal_mati_uji) && $kendaraan->tanggal_mati_uji && $kendaraan->tanggal_mati_uji != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->tanggal_mati_uji)->format('Y-m-d') : '') }}"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
            @error('tanggal_mati_uji')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Asal Kendaraan</label>
            <select name="kabupaten"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2">
                <option value="">Pilih Asal</option>
                {{-- Asumsi 'kabupaten' adalah indikator asal kendaraan. Sesuaikan jika ada kolom 'asal_kendaraan' yang spesifik. --}}
                <option value="Kota Batu" {{ old('kabupaten', $kendaraan->kabupaten ?? '') == 'Kota Batu' ? 'selected' : '' }}>Kota Batu</option>
                <option value="Numpang Uji" {{ old('status', $kendaraan->status ?? '') == 'Numpang Uji' ? 'selected' : '' }}>Numpang Uji</option>
                <option value="Mutasi Keluar" {{ old('status', $kendaraan->status ?? '') == 'Mutasi Keluar' ? 'selected' : '' }}>Mutasi Keluar</option>
            </select>
            @error('kabupaten')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
