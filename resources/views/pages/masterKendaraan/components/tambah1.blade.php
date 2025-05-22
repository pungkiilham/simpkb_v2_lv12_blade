<div class="space-y-6">
    <h2 class="text-lg font-semibold text-gray-800 border-b pb-2">Data Kendaraan</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Uji</label>
            <input type="text" name="nomor_uji"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Kendaraan</label>
            <input type="text" name="nomor_kendaraan"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Pemilik</label>
            <select name="jenis_pemilik"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
                <option value="">Pilih Jenis Pemilik</option>
                <option value="perorangan">Perorangan</option>
                <option value="perusahaan">Perusahaan</option>
                <option value="instansi">Instansi</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
            <input type="text" name="nama_pemilik"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
            <input type="tel" name="nomor_whatsapp"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Identitas</label>
            <select name="jenis_identitas"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
                <option value="">Pilih Jenis Identitas</option>
                <option value="ktp">KTP</option>
                <option value="sim">SIM</option>
                <option value="passport">Passport</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Identitas</label>
            <input type="text" name="nomor_identitas"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
            <select name="jenis_kelamin"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat Pemilik</label>
            <textarea name="alamat_pemilik" rows="3"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RT</label>
            <input type="text" name="rt"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">RW</label>
            <input type="text" name="rw"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kelurahan</label>
            <input type="text" name="kelurahan"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
            <input type="text" name="kecamatan"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kota/Kabupaten</label>
            <input type="text" name="kota"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
            <input type="text" name="provinsi"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Awal Pakai</label>
            <input type="date" name="awal_pakai"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
            <input type="number" name="tahun"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Mesin</label>
            <input type="text" name="nomor_mesin"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Rangka</label>
            <input type="text" name="nomor_rangka"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kendaraan</label>
            <select name="jenis_kendaraan"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
                <option value="">Pilih Jenis Kendaraan</option>
                <option value="mobil_penumpang_sedan">Mobil Penumpang Sedan</option>
                <option value="mobil_penumpang_bukan_sedan">Mobil Penumpang Bukan Sedan</option>
                <option value="mobil_bus_kecil">Mobil Bus Kecil</option>
                <option value="mobil_bus_sedang">Mobil Bus Sedang</option>
                <option value="mobil_bus_besar">Mobil Bus Besar</option>
                <option value="mobil_bus_maxi">Mobil Bus Maxi</option>
                <option value="mobil_bus_gandeng">Mobil Bus Gandeng</option>
                <option value="mobil_bus_tempel">Mobil Bus Tempel</option>
                <option value="mobil_bus_tingkat">Mobil Bus Tingkat</option>
                <option value="mobil_barang_bak_terbuka">Mobil Barang Bak Terbuka</option>
                <option value="mobil_barang_bak_tertutup">Mobil Barang Bak Tertutup</option>
                <option value="mobil_tangki">Mobil Tangki</option>
                <option value="mobil_penarik">Mobil Penarik</option>
                <option value="mobil_gandeng_bak_terbuka">Mobil Gandeng Bak Terbuka</option>
                <option value="mobil_gandeng_bak_tertutup">Mobil Gandeng Bak Tertutup</option>
                <option value="mobil_gandeng_tangki">Mobil Gandeng Tangki</option>
                <option value="kereta_tempelan_bak_terbuka">Kereta Tempelan Bak Terbuka</option>
                <option value="kereta_tempelan_bak_tertutup">Kereta Tempelan Bak Tertutup</option>
                <option value="kereta_tempelan_kaki">Kereta Tempelan Kaki</option>
                <option value="kereta_bermotor_roda_tiga_barang_terbuka">Kereta Bermotor Roda Tiga Angkutan Barang Bak
                    Muatan Terbuka</option>
                <option value="kereta_bermotor_roda_tiga_barang_tertutup">Kereta Bermotor Roda Tiga Angkutan Barang Bak
                    Muatan Tertutup</option>
                <option value="kereta_bermotor_roda_tiga_penumpang">Kereta Bermotor Roda Tiga Angkutan Penumpang
                </option>
                <option value="kereta_bermotor_roda_tiga_tangki">Kereta Bermotor Roda Tiga Angkutan Barang Tangki
                </option>
                <option value="kendaraan_khusus">Kendaraan Khusus</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
                <option value="">Pilih Status</option>
                <option value="aktif">Aktif</option>
                <option value="tidak_aktif">Tidak Aktif</option>
            </select>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan Jenis Kendaraan</label>
            <textarea name="keterangan_jenis_kendaraan" rows="2"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Merk</label>
            <input type="text" name="merk"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tipe</label>
            <input type="text" name="tipe"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div class="md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Importir/Pabrikan</label>
            <input type="text" name="nama_importir"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Mati Uji</label>
            <input type="date" name="tanggal_mati_uji"
                class="w-full rounded-lg border-2 border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-all py-1 px-2"
                required>
        </div>
    </div>
</div>
