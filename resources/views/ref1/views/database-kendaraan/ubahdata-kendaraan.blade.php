@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Ubah Data Kendaraan</h1>
                            </div>
                        </div>
                        <div class="daftar-kegiatan__table">
                            <div class="daftar-kegiatan__table-tools" style="min-width:800px;">
                                <div class="d-flex align-items-center">
                                    <div class="search">
                                        {{-- <input class="form-control" type="text" id="pencarian_{{$id}}" placeholder="Search" /> --}}
                                        <input class="form-control" type="text" placeholder="Search" />
                                        <img src="assets_admin/images/search.svg" alt="" />
                                    </div>
                                </div>
                                <!-- Button trigger modal -->
                                <div class="w-auto">
                                    {{-- <button class="btn btn-base btn-success"  onclick="download_log_activity_{{$id}}()" style="background-color: #0bc424">Download All</button> --}}
                                    <button type="button" class="btn btn-base" data-toggle="modal"
                                        onclick="" style="background-color: #1b3ae7;">Simpan Semua</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <!-- Account details card-->
                <div class="col-6">
                    <div class="card mb-4">
                        <div class="card-header"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                            1. Data Kendaraan</div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="nomorUji" style="color:black">Nomor Uji
                                        </label>
                                        <input class="form-control" id="nomorUji" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="nomorKendaraan" style="color:black">Nomor Kendaraan
                                        </label>
                                        <input class="form-control" id="nomorKendaraan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jenisPemilik" style="color:black">Jenis Pemilik
                                        </label>
                                        <input class="form-control" id="jenisPemilik" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="namaPemilik" style="color:black">Nama Pemilik</label>
                                    <input class="form-control" id="namaPemilik" type="text" style="color:black"
                                        value="">
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jenisIdentitas" style="color:black">Jenis
                                            Identitas
                                        </label>
                                        <input class="form-control" id="jenisIdentitas" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="nomorIdentitas" style="color:black">Nomor
                                            Identitas</label>
                                        <input class="form-control" id="nomorIdentitas" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="tempatLahir" style="color:black">Tempat Lahir
                                        </label>
                                        <input class="form-control" id="tempatLahir" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="tglLahir" style="color:black">Tanggal Lahir
                                        </label>
                                        <input class="form-control" id="tglLahir" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jenisKelamin" style="color:black">Jenis Kelamin
                                        </label>
                                        <input class="form-control" id="jenisKelamin" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="alamatPemilik" style="color:black">Alamat
                                        Pemilik</label>
                                    <input class="form-control" id="alamatPemilik" type="text" style="color:black"
                                        value="">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="rt" style="color:black">RT
                                        </label>
                                        <input class="form-control" id="rt" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="rw" style="color:black">RW</label>
                                        <input class="form-control" id="rw" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kelurahan" style="color:black">Kelurahan
                                        </label>
                                        <input class="form-control" id="kelurahan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kecamatan" style="color:black">Kecamatan</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kota" style="color:black">Kota / Kabupaten
                                        </label>
                                        <input class="form-control" id="kota" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="provinsi" style="color:black">Provinsi</label>
                                        <input class="form-control" id="provinsi" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kota" style="color:black">Awal Pakai
                                        </label>
                                        <input class="form-control" id="kota" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="provinsi" style="color:black">Tahun</label>
                                        <input class="form-control" id="provinsi" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kota" style="color:black">Nomor Mesin
                                        </label>
                                        <input class="form-control" id="kota" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="provinsi" style="color:black">Nomor Chasis</label>
                                        <input class="form-control" id="provinsi" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kota" style="color:black">Jenis
                                        </label>
                                        <input class="form-control" id="kota" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="provinsi" style="color:black">Status</label>
                                        <input class="form-control" id="provinsi" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kota" style="color:black">Merk
                                        </label>
                                        <input class="form-control" id="kota" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="provinsi" style="color:black">Tipe</label>
                                        <input class="form-control" id="provinsi" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="small mb-1" for="alamatPemilik" style="color:black">Nama Importir / Pabrikan
                                    </label>
                                    <input class="form-control" id="alamatPemilik" type="text" style="color:black"
                                        value="">
                                </div>
                            </form>
                        </div>

                        <div class="card-header"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                            2. Sertifikasi Kendaraan</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="noSerRegUjiTipe" style="color:black">Nomor Sertifikat
                                        Registrasi Uji Tipe Kendaraan
                                    </label>
                                    <input class="form-control" id="noSerRegUjiTipe" type="text" style="color:black"
                                        value="">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerRegUjiTipePenerbit"
                                            style="color:black">Diterbitkan
                                            Oleh
                                        </label>
                                        <input class="form-control" id="noSerRegUjiTipePenerbit" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerRegUjiTipeTanggal"
                                            style="color:black">Tanggal
                                        </label>
                                        <input class="form-control" id="noSerRegUjiTipeTanggal" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="noSerUji" style="color:black">Nomor Sertifikat Uji
                                        Tipe Kendaraan
                                    </label>
                                    <input class="form-control" id="noSerUji" type="text" style="color:black"
                                        value="">
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerUjiPenerbit" style="color:black">Diterbitkan
                                            Oleh
                                        </label>
                                        <input class="form-control" id="noSerUjiPenerbit" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerUjiTanggal" style="color:black">Tanggal
                                        </label>
                                        <input class="form-control" id="noSerUjiTanggal" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <!-- Form Group (first name)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="noSerRancang" style="color:black">Nomor Sertifikat
                                        Rancang
                                        Bangun
                                    </label>
                                    <input class="form-control" id="noSerRancang" type="text" style="color:black"
                                        value="">
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerRancangPenerbit"
                                            style="color:black">Diterbitkan
                                            Oleh
                                        </label>
                                        <input class="form-control" id="noSerRancangPenerbit" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="noSerRancangTanggal" style="color:black">Tanggal
                                        </label>
                                        <input class="form-control" id="noSerRancangTanggal" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-header"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                            3. Kemampuan Kendaraan</div>
                        <div class="card-body">
                            <form>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Jumlah Berat Yang Diperbolehkan
                                </label>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jbb" style="color:black">JBB (Kg)
                                        </label>
                                        <input class="form-control" id="jbb" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jbkb" style="color:black">JBKB (Kg)
                                        </label>
                                        <input class="form-control" id="jbkb" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>

                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Daya Angkut
                                </label>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="dayaAngkutOrang" style="color:black">Orang (Kg)
                                        </label>
                                        <input class="form-control" id="dayaAngkutOrang" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="dayaAngkutBarang" style="color:black">Barang (Kg)
                                        </label>
                                        <input class="form-control" id="dayaAngkutBarang" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="kelasJalan" style="color:black">Kelas Jalan
                                        </label>
                                        <input class="form-control" id="kelasJalan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="mst" style="color:black">MST
                                        </label>
                                        <input class="form-control" id="mst" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>

                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Ukuran
                                </label>
                                <div class="row">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="qr" style="color:black">q/r
                                        </label>
                                        <input class="form-control" id="qr" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="p1" style="color:black">p1
                                        </label>
                                        <input class="form-control" id="p1" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="p2" style="color:black">p2
                                        </label>
                                        <input class="form-control" id="p2" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Account details card-->
                <div class="col-6">
                    <div class="card mb-4">
                        <div class="card-header"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                            4. Spesifikasi Kendaraan</div>
                        <div class="card-body">
                            <form>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Daya Mesin
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="kubikasi" style="color:black">Kubikasi Mesin (CC)
                                        </label>
                                        <input class="form-control" id="kubikasi" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaMesin" style="color:black">Daya Mesin (PS/KW)
                                        </label>
                                        <input class="form-control" id="dayaMesin" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="bahanBakar" style="color:black">Jenis Bahan Bakar
                                        </label>
                                        <input class="form-control" id="bahanBakar" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Dimensi Utama
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiUtamaPanjang" style="color:black">Panjang (mm)
                                        </label>
                                        <input class="form-control" id="dimensiUtamaPanjang" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiUtamaLebar" style="color:black">Lebar (mm)
                                        </label>
                                        <input class="form-control" id="dimensiUtamaLebar" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiUtamaTinggi" style="color:black">Tinggi (mm)
                                        </label>
                                        <input class="form-control" id="dimensiUtamaTinggi" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Dimensi Bak Muatan
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiBakPanjang" style="color:black">Panjang (mm)
                                        </label>
                                        <input class="form-control" id="dimensiBakPanjang" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiBakLebar" style="color:black">Lebar (mm)
                                        </label>
                                        <input class="form-control" id="dimensiBakLebar" type="text"
                                            style="color:black" value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dimensiBakTinggi" style="color:black">Tinggi (mm)
                                        </label>
                                        <input class="form-control" id="dimensiBakTinggi" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Uraian
                                </label>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="namaKaroseri" style="color:black">Nama
                                        Karoseri</label>
                                    <input class="form-control" id="namaKaroseri" type="text" style="color:black"
                                        value="">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="warnaKabin" style="color:black">Warna Kabin
                                        </label>
                                        <input class="form-control" id="warnaKabin" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="warnaBak" style="color:black">Warna Bak</label>
                                        <input class="form-control" id="warnaBak" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Bagian Menjulur
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="roh" style="color:black">Ke Belakang / ROH (mm)
                                        </label>
                                        <input class="form-control" id="roh" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="foh" style="color:black">Ke Depan / FOH
                                            (mm)
                                        </label>
                                        <input class="form-control" id="foh" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jarakTerendah" style="color:black">Jarak Terendah (mm)
                                        </label>
                                        <input class="form-control" id="jarakTerendah" type="text"
                                            style="color:black" value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Karoseri
                                </label>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="jenisKaroseri" style="color:black">Jenis
                                    </label>
                                    <input class="form-control" id="jenisKaroseri" type="text" style="color:black"
                                        value="">
                                </div>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="bahanUtama" style="color:black">Bahan Utama
                                        </label>
                                        <input class="form-control" id="bahanUtama" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="tempatDuduk" style="color:black">Tempat Duduk
                                        </label>
                                        <input class="form-control" id="tempatDuduk" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="berdiri" style="color:black">Berdiri
                                        </label>
                                        <input class="form-control" id="berdiri" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-header"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                            5. Uraian Sumbu</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="konfigurasiSumbu" style="color:black">Konfigurasi
                                        Sumbu
                                    </label>
                                    <input class="form-control" id="konfigurasiSumbu" type="text" style="color:black"
                                        value="">
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Jarak Sumbu
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jarakSb1" style="color:black">Sumbu l-ll (mm)
                                        </label>
                                        <input class="form-control" id="jarakSb1" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jarakSb2" style="color:black">Sumbu ll-lll (mm)
                                        </label>
                                        <input class="form-control" id="jarakSb2" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="jarakSb3" style="color:black">Sumbu lll-lV (mm)
                                        </label>
                                        <input class="form-control" id="jarakSb3" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jarakSb4" style="color:black">Jarak Sumbu lV-V
                                        </label>
                                        <input class="form-control" id="jarakSb4" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jarakSb5" style="color:black">Jarak Sumbu
                                            V-Vl</label>
                                        <input class="form-control" id="jarakSb5" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Berat Kendaraan Per Sumbu (Kg)
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb1" style="color:black">Sumbu l
                                        </label>
                                        <input class="form-control" id="beratSb1" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb2" style="color:black">Sumbu ll
                                        </label>
                                        <input class="form-control" id="beratSb2" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb3" style="color:black">Sumbu lll
                                        </label>
                                        <input class="form-control" id="beratSb3" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb4" style="color:black">Sumbu lV
                                        </label>
                                        <input class="form-control" id="beratSb4" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb5" style="color:black">Sumbu V
                                        </label>
                                        <input class="form-control" id="beratSb5" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="beratSb6" style="color:black">Sumbu Vl
                                        </label>
                                        <input class="form-control" id="beratSb6" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>

                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Pemakaian Sumbu Ban
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb1" style="color:black">Sumbu l
                                        </label>
                                        <input class="form-control" id="pemakaianSb1" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb2" style="color:black">Sumbu ll
                                        </label>
                                        <input class="form-control" id="pemakaianSb2" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb3" style="color:black">Sumbu lll
                                        </label>
                                        <input class="form-control" id="pemakaianSb3" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb4" style="color:black">Sumbu lV
                                        </label>
                                        <input class="form-control" id="pemakaianSb4" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb5" style="color:black">Sumbu V
                                        </label>
                                        <input class="form-control" id="pemakaianSb5" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="pemakaianSb6" style="color:black">Sumbu Vl
                                        </label>
                                        <input class="form-control" id="pemakaianSb6" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>

                                <label class="small" for="nomorUji"
                                    style="font-weight: bold; color:black; font-size: 15px">Daya Dukung Sesuai Pabrik
                                </label>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb1" style="color:black">Sumbu l
                                        </label>
                                        <input class="form-control" id="dayaSb1" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb2" style="color:black">Sumbu ll
                                        </label>
                                        <input class="form-control" id="dayaSb2" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb3" style="color:black">Sumbu lll
                                        </label>
                                        <input class="form-control" id="dayaSb3" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb4" style="color:black">Sumbu lV
                                        </label>
                                        <input class="form-control" id="dayaSb4" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb5" style="color:black">Sumbu V
                                        </label>
                                        <input class="form-control" id="dayaSb5" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-6 col-md-4">
                                        <label class="small" for="dayaSb6" style="color:black">Sumbu Vl
                                        </label>
                                        <input class="form-control" id="dayaSb6" type="text" style="color:black"
                                            value="">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
@endsection

@push('scripts-js')
@endpush
