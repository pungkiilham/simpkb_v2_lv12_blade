@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Hasil Uji Kendaraan</h1>
                            </div>
                        </div>
                        <div class="daftar-kegiatan__table">
                            <div class="daftar-kegiatan__table-tools" style="min-width:800px;">
                                <div class="search">
                                    <input class="form-control" type="text" placeholder="Search" />
                                    <img src="assets_admin/images/search.svg" alt="" />
                                </div>
                                <div class="w-auto">
                                    <div class="d-inline-flex align-items-center" style="margin-right: 20px">
                                        <label for="tugas" class="form-label text-base text-dark font-weight-bold"
                                            style="margin-right: 10px; margin-left: 30px">
                                            Verifikator: </label>
                                        <input type="text" class="form-control" id="nama" style="margin-right: 20px"
                                            readonly>
                                    </div>
                                    <a type="button" class="btn btn-base" data-toggle="modal"
                                        data-target="#exampleModalCenter" style="background-color: #218f52;">Verifikasi
                                        Hasil</a>
                                    <a type="button" class="btn btn-base" href="#"
                                        style="background-color: #d32121;">Batalkan Verifikasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="daftar-kegiatan__table-list">
                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%; margin-bottom: 30px">
                    <thead style="background-color: #e4e4e4;">
                        <tr>
                            <th class="text-center font-weight-bold">No</th>
                            {{-- <th class="text-center font-weight-bold">Jenis Pemilik</th> --}}
                            <th class="text-center font-weight-bold">Informasi Kendaraan</th>
                            <th class="text-center font-weight-bold">Tanggal Uji</th>
                            <th class="text-center font-weight-bold">Tanggal Mati Uji</th>
                            {{-- <th class="text-center font-weight-bold">No. Rangka</th>
                            <th class="text-center font-weight-bold">No. Mesin</th> --}}
                            <th class="text-center font-weight-bold">Jenis Pengujian</th>
                            <th class="text-center font-weight-bold">Status Pengujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="width: 25px">1</td>
                            {{-- <td class="text-center" style="width: 150px"></td> --}}
                            <td class="text-center" style="width: 500px"></td>
                            <td class="text-center" style="width: 200px"></td>
                            <td class="text-center" style="width: 200px"></td>
                            {{-- <td class="text-center" style="width: 150px"></td>
                            <td class="text-center" style="width: 150px"></td> --}}
                            <td class="text-center" style="width: 150px">Baru</td>
                            <td class="text-center" style="width: 300px">Belum</td>
                    </tbody>
                </table>
            </div>


            {{-- <div class="row">
                <div class="col-12" id="daftarKegiatan">
                    <div class="daftar-kegiatan__table-tools" style="min-width:800px;">
                        <div class="d-inline-flex align-items-center" style="margin-right: 20px">
                            <label for="tugas" class="form-label text-base text-dark font-weight-bold"
                                style="margin-right: 10px; margin-left: 30px">
                                Verifikator: </label>
                            <input type="text" class="form-control" id="nama" style="margin-right: 20px">
                        </div>
                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #e7921b;">Verifikasi Hasil</a>
                    </div>
                </div>
            </div> --}}

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="foto">
                    <div class="container-fluid">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 30px; font-size: 20px; background-color: #e4e4e4;">
                            1. Foto Kendaraan
                            <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                                style="background-color: #1b3ae7;">Simpan
                                Foto</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <img src="img_girl.jpg" width="200" height="200">
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <img src="img_girl.jpg" width="200" height="200">
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <img src="img_girl.jpg" width="200" height="200">
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <img src="img_girl.jpg" width="200" height="200">
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">Foto Depan</button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">Foto Belakang</button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">Foto Kiri</button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">Foto Kanan</button>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-left.png"
                                                style="filter: invert(1);" height="24" width="24"
                                                alt="" /></span></button>
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061; margin-left: 10px;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-right.png"
                                                style="filter: invert(1);" height="20" width="20"
                                                alt="" /></span></button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-left.png"
                                                style="filter: invert(1);" height="24" width="24"
                                                alt="" /></span></button>
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061; margin-left: 10px;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-right.png"
                                                style="filter: invert(1);" height="20" width="20"
                                                alt="" /></span></button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-left.png"
                                                style="filter: invert(1);" height="24" width="24"
                                                alt="" /></span></button>
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061; margin-left: 10px;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-right.png"
                                                style="filter: invert(1);" height="20" width="20"
                                                alt="" /></span></button>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-left.png"
                                                style="filter: invert(1);" height="24" width="24"
                                                alt="" /></span></button>
                                    <button type="button" class="btn btn-base" data-toggle="modal" onclick=""
                                        style="background-color: #606061; margin-left: 10px;">
                                        <span class="icon-bg"><img src="assets_home/img/rotate-right.png"
                                                style="filter: invert(1);" height="20" width="20"
                                                alt="" /></span></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 30px; font-size: 20px; background-color: #e4e4e4;">
                        2. Pra Uji

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Pra Uji</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil
                                            Pra Uji</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        3. Pengujian Emisi Solar / Bensin

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Emisi</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="jabatan"
                                                    class="form-label text-base text-dark font-weight-bold">Emisi Besin
                                                    CO
                                                    (%)</label>
                                                <input class="form-control" id="kelurahan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-md-6">
                                                <label for="jabatan"
                                                    class="form-label text-base text-dark font-weight-bold">Emisi Besin
                                                    HC
                                                    (ppm)</label>
                                                <input class="form-control" id="kecamatan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Emisi
                                            Diesel (%)</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil Uji
                                            Emisi</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        4. Pengujian Pit Lift

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Pit Lift</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil Uji Pit
                                            Lift</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        5. Pengujian Lampu Utama

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Lampu</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="kelurahan" style="color:black">Kuat Pancar
                                                Kiri (hcd)</label>
                                            <input class="form-control" id="kelurahan" type="text"
                                                style="color:black" value="">
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="kecamatan" style="color:black">Kuat Pancar
                                                Kanan (hcd)</label>
                                            <input class="form-control" id="kecamatan" type="text"
                                                style="color:black" value="">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 25px">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="kelurahan" style="color:black">Simpangan
                                                Kiri (Derajat) </label>
                                            <input class="form-control" id="kelurahan" type="text"
                                                style="color:black" value="">
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="kecamatan" style="color:black">Simpangan
                                                Kanan (Derajat) </label>
                                            <input class="form-control" id="kecamatan" type="text"
                                                style="color:black" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="jabatan"
                                                class="form-label text-base text-dark font-weight-bold">Hasil Uji
                                                Lampu</label>
                                            <select id="jabatan" class="form-control">
                                                <option selected>Lulus</option>
                                                <option>Tidak Lulus</option>
                                            </select>
                                        </div>
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        6. Pengujian Rem

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Rem</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Daya Rem</label>
                                        <div class="row mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorUji" style="color:black">Sumbu I
                                                </label>
                                                <input class="form-control" id="nomorUji" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorKendaraan" style="color:black">Sumbu
                                                    II
                                                </label>
                                                <input class="form-control" id="nomorKendaraan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="jenisPemilik" style="color:black">Sumbu
                                                    III
                                                </label>
                                                <input class="form-control" id="jenisPemilik" type="text"
                                                    style="color:black" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorUji" style="color:black">Sumbu IV
                                                </label>
                                                <input class="form-control" id="nomorUji" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorKendaraan" style="color:black">Sumbu
                                                    V
                                                </label>
                                                <input class="form-control" id="nomorKendaraan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="jenisPemilik" style="color:black">Sumbu VI
                                                </label>
                                                <input class="form-control" id="jenisPemilik" type="text"
                                                    style="color:black" value="">
                                            </div>
                                        </div>
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Selisih Daya Rem</label>
                                        <div class="row mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorUji" style="color:black">Sumbu I
                                                </label>
                                                <input class="form-control" id="nomorUji" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorKendaraan" style="color:black">Sumbu
                                                    II
                                                </label>
                                                <input class="form-control" id="nomorKendaraan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="jenisPemilik" style="color:black">Sumbu
                                                    III
                                                </label>
                                                <input class="form-control" id="jenisPemilik" type="text"
                                                    style="color:black" value="">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <!-- Form Group (first name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorUji" style="color:black">Sumbu IV
                                                </label>
                                                <input class="form-control" id="nomorUji" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="nomorKendaraan" style="color:black">Sumbu
                                                    V
                                                </label>
                                                <input class="form-control" id="nomorKendaraan" type="text"
                                                    style="color:black" value="">
                                            </div>
                                            <!-- Form Group (last name)-->
                                            <div class="col-6 col-md-4">
                                                <label class="small" for="jenisPemilik" style="color:black">Sumbu VI
                                                </label>
                                                <input class="form-control" id="jenisPemilik" type="text"
                                                    style="color:black" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                                Nama Penguji</label>
                                            <input class="form-control" id="kecamatan" type="text"
                                                style="color:black" readonly value="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil Uji
                                            Rem</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        7. Pengujian Kuncup Roda

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Kuncup Roda</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Lebar Kuncup (mm/m)</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil Uji
                                            Kuncup</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade active show" id="praUji">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="font-weight: bold; color:#363434; margin-top: 10px; margin-buttom: 20px; font-size: 20px; background-color: #e4e4e4;">
                        8. Pengujian Speedo

                        <a type="button" class="btn btn-base" data-toggle="modal" data-target="#exampleModalCenter"
                            style="background-color: #1b3ae7;">Simpan
                            Speedo</a>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Kecepatan (Km/jam)</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label text-base text-dark font-weight-bold">
                                            Nama Penguji</label>
                                        <input class="form-control" id="kecamatan" type="text" style="color:black"
                                            readonly value="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Hasil Uji
                                            Speedo</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Lulus</option>
                                            <option>Tidak Lulus</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan Tidak
                                            Lulus</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
@endsection

@push('scripts-js')
@endpush
