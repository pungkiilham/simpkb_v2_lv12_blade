{{-- resources/views/pages/masterKendaraan/components/lihat1.blade.php --}}
<div class="space-y-6">
    <h2 class="text-lg font-bold text-white px-2 py-1 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg">1. Data Kendaraan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji</label>
            <input type="text" name="nomor_uji" value="{{ $kendaraan->nomor_uji ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Kendaraan</label>
            <input type="text" name="nomor_kendaraan" value="{{ $kendaraan->nomor_kendaraan ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Pemilik</label>
            <select name="jenis_pemilik_id"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Jenis Pemilik</option>
                <option value="1" {{ (isset($kendaraan->jenis_pemilik_id) && $kendaraan->jenis_pemilik_id == '1') ? 'selected' : '' }}>Perorangan</option>
                <option value="2" {{ (isset($kendaraan->jenis_pemilik_id) && $kendaraan->jenis_pemilik_id == '2') ? 'selected' : '' }}>Perusahaan</option>
                <option value="3" {{ (isset($kendaraan->jenis_pemilik_id) && $kendaraan->jenis_pemilik_id == '3') ? 'selected' : '' }}>Instansi</option>
                {{-- Tambahkan opsi lain sesuai dengan ID dan deskripsi jenis pemilik Anda --}}
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
            <input type="text" name="nama_pemilik" value="{{ $kendaraan->nama_pemilik ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
            <input type="tel" name="nomor_wa" value="{{ $kendaraan->nomor_wa ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Identitas</label>
            <select name="jenis_identitas"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Jenis Identitas</option>
                <option value="KTP" {{ (isset($kendaraan->jenis_identitas) && $kendaraan->jenis_identitas == 'KTP') ? 'selected' : '' }}>KTP</option>
                <option value="SIM" {{ (isset($kendaraan->jenis_identitas) && $kendaraan->jenis_identitas == 'SIM') ? 'selected' : '' }}>SIM</option>
                <option value="Passport" {{ (isset($kendaraan->jenis_identitas) && $kendaraan->jenis_identitas == 'Passport') ? 'selected' : '' }}>Passport</option>
                <option value="NPWP" {{ (isset($kendaraan->jenis_identitas) && $kendaraan->jenis_identitas == 'NPWP') ? 'selected' : '' }}>NPWP</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Identitas</label>
            <input type="text" name="nomor_identitas" value="{{ $kendaraan->nomor_identitas ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" value="{{ $kendaraan->tempat_lahir ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
            <input type="text" name="tanggal_lahir"
                value="{{ (isset($kendaraan->tanggal_lahir) && $kendaraan->tanggal_lahir && $kendaraan->tanggal_lahir != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->tanggal_lahir)->format('d/m/Y') : '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
            <select name="jenis_kelamin"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" {{ (isset($kendaraan->jenis_kelamin) && $kendaraan->jenis_kelamin == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ (isset($kendaraan->jenis_kelamin) && $kendaraan->jenis_kelamin == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Pemilik</label>
            <textarea name="alamat_pemilik" rows="3"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>{{ $kendaraan->alamat_pemilik ?? '-' }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RT</label>
            <input type="text" name="rt" value="{{ $kendaraan->rt ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RW</label>
            <input type="text" name="rw" value="{{ $kendaraan->rw ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
            <input type="text" name="kelurahan" value="{{ $kendaraan->kelurahan ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
            <input type="text" name="kecamatan" value="{{ $kendaraan->kecamatan ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kota/Kabupaten</label>
            <input type="text" name="kabupaten" value="{{ $kendaraan->kabupaten ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
            <input type="text" name="provinsi" value="{{ $kendaraan->provinsi ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Awal Pakai</label>
            <input type="text" name="awal_pakai"
                value="{{ (isset($kendaraan->awal_pakai) && $kendaraan->awal_pakai && $kendaraan->awal_pakai != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->awal_pakai)->format('d/m/Y') : '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
            <input type="number" name="tahun" value="{{ $kendaraan->tahun ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin</label>
            <input type="text" name="nomor_mesin" value="{{ $kendaraan->nomor_mesin ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka</label>
            <input type="text" name="nomor_rangka" value="{{ $kendaraan->nomor_rangka ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan "tb DataVehicleType"</label>
            <select name="jenis_kendaraan_id"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Jenis Kendaraan</option>
                {{-- Anda perlu memastikan ID ini sesuai dengan data Anda di tabel 'jenis_kendaraans' --}}
                <option value="1" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '1') ? 'selected' : '' }}>Mobil Penumpang Sedan</option>
                <option value="2" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '2') ? 'selected' : '' }}>Mobil Penumpang Bukan Sedan</option>
                <option value="3" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '3') ? 'selected' : '' }}>PICK UP</option>
                {{-- Tambahkan semua opsi lain yang sesuai dengan ID dan deskripsi jenis kendaraan Anda --}}
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Sub Jenis Kendaraan "tb DataSubVehicle"</label>
            <select name="jenis_kendaraan_id"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Jenis Kendaraan</option>
                {{-- Anda perlu memastikan ID ini sesuai dengan data Anda di tabel 'jenis_kendaraans' --}}
                <option value="1" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '1') ? 'selected' : '' }}>Mobil Penumpang Sedan</option>
                <option value="2" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '2') ? 'selected' : '' }}>Mobil Penumpang Bukan Sedan</option>
                <option value="3" {{ (isset($kendaraan->jenis_kendaraan_id) && $kendaraan->jenis_kendaraan_id == '3') ? 'selected' : '' }}>PICK UP</option>
                {{-- Tambahkan semua opsi lain yang sesuai dengan ID dan deskripsi jenis kendaraan Anda --}}
            </select>
        </div>

        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Jenis Kendaraan</label>
            <input name="keterangan_jenis_kendaraan" value="{{ $kendaraan->keterangan_jenis_kendaraan ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Merk "tb DataBrand"</label>
            <input type="text" name="merk" value="{{ $kendaraan->merk ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Varian "tb VarianData"</label>
            <input type="text" name="merk" value="{{ $kendaraan->merk ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipe "tb DataVarianType"</label>
            <input type="text" name="tipe" value="{{ $kendaraan->tipe ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Importir/Pabrikan</label>
            <input type="text" name="nama_importir" value="{{ $kendaraan->nama_importir ?? '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Asal Kendaraan</label>
            <select name="asal_kendaraan"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Asal</option>
                {{-- Asumsi 'kabupaten' adalah indikator asal kendaraan. Sesuaikan jika ada kolom 'asal_kendaraan' yang spesifik. --}}
                <option value="Kota Batu" {{ (isset($kendaraan->kabupaten) && $kendaraan->kabupaten == 'Surabaya') ? 'selected' : '' }}>Kota Batu</option>
                <option value="Numpang Uji" {{ (isset($kendaraan->status) && $kendaraan->status == 'Numpang') ? 'selected' : '' }}>Numpang Uji</option>
                <option value="Mutasi Keluar" {{ (isset($kendaraan->status) && $kendaraan->status == 'Mutasi Keluar') ? 'selected' : '' }}>Mutasi Keluar</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Asal Kendaraan</label>
            <select name="asal_kendaraan"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Asal</option>
                {{-- Asumsi 'kabupaten' adalah indikator asal kendaraan. Sesuaikan jika ada kolom 'asal_kendaraan' yang spesifik. --}}
                <option value="Kota Batu" {{ (isset($kendaraan->kabupaten) && $kendaraan->kabupaten == 'Surabaya') ? 'selected' : '' }}>Kota Batu</option>
                <option value="Numpang Uji" {{ (isset($kendaraan->status) && $kendaraan->status == 'Numpang') ? 'selected' : '' }}>Numpang Uji</option>
                <option value="Mutasi Keluar" {{ (isset($kendaraan->status) && $kendaraan->status == 'Mutasi Keluar') ? 'selected' : '' }}>Mutasi Keluar</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
                <option value="">Pilih Status</option>
                <option value="Umum" {{ (isset($kendaraan->status) && $kendaraan->status == 'Umum') ? 'selected' : '' }}>Umum</option>
                <option value="Tidak Umum" {{ (isset($kendaraan->status) && $kendaraan->status == 'Tidak Umum') ? 'selected' : '' }}>Tidak Umum</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mati Uji</label>
            <input type="text" name="tanggal_mati_uji"
                value="{{ (isset($kendaraan->tanggal_mati_uji) && $kendaraan->tanggal_mati_uji && $kendaraan->tanggal_mati_uji != '0000-00-00') ? \Carbon\Carbon::parse($kendaraan->tanggal_mati_uji)->format('d/m/Y') : '-' }}"
                class="w-full rounded-lg border-2 border-gray-300 bg-gray-100 cursor-not-allowed py-1 px-2"
                disabled>
        </div>
    </div>
</div>