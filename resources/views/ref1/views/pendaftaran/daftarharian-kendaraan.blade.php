@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Daftar Kendaraan Uji Harian</h1>
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
                                    <div class="d-inline-flex align-items-center" style="margin-right: 20px">
                                        <label for="tugas" class="form-label text-base text-dark font-weight-bold"
                                            style="margin-right: 10px; margin-left: 30px">
                                            Baris: </label>
                                        <select id="tugas" class="form-control">
                                            <option selected>25</option>
                                            <option>50</option>
                                            <option>100</option>
                                            <option>200</option>
                                        </select>
                                    </div>
                                    <a type="button" class="btn btn-base" data-toggle="modal"
                                    data-target="#exampleModalCenter" style="background-color: #e7921b;">Daftarkan
                                    Kendaraan</a>
                                    {{-- <button type="button" class="btn btn-base btn-warning" onclick=""
                                        style="background-color: #2559b9;">Import CSV</button> --}}
                                    <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/riwayat-pendaftaran"
                                        style="background-color: #218f52;">Riwayat Pendaftaran</a>
                                </div>
                            </div>
                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Data Pemilik</th>
                                            <th class="text-center font-weight-bold">Data Kendaraan</th>
                                            <th class="text-center font-weight-bold">Tanggal Uji & Mati</th>
                                            <th class="text-center font-weight-bold">Status Pendaftaran</th>
                                            <th class="text-center font-weight-bold">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-left" style="width: 500px">Nama pemilik:<br /><br />
                                                Alamat:<br /><br /> No KTP:<br /><br /> No WA:<br /><br />
                                                Dikuasakan:<br /><br /> Kartu:</td>
                                            <td class="text-left" style="width: 300px">Nopol:<br /><br /> No
                                                Rangka:<br /><br /> No Uji:<br /><br /> Jenis Kendaraan:<br /><br /> Jenis Pengujian:</td>
                                            <td class="text-left" style="width: 200px">Tgl Uji:<br /><br /> Tgl Mati Uji:
                                            </td>
                                            <td class="text-left" style="width: 300px">tolak/terima<br /><br /> Keterangan
                                                Tolak:</td>
                                            <td class="text-center" style="padding:25px">
                                                <a type="button" class="btn btn-base" data-toggle="modal"
                                                    data-target="#exampleModalCenter"
                                                    style="background-color: #1b73e7;">Lihat</a>
                                                <a type="button" class="btn btn-base" data-toggle="modal"
                                                    data-target="#exampleModalCenter"
                                                    style="background-color: #e7921b;">Ubah</a>
                                                <a type="button" class="btn btn-base" href="#"
                                                    style="background-color: #d32121;">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example" style="margin-top: 20px">
                                    <ul class="pagination">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h2 class="modal-title text-dark font-weight-bold" id="exampleModalLongTitle">Daftarkan Kendaraan
                        </h2>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                        {{-- <span aria-hidden="true">&times;</span> --}}
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group">
                                        <div class="container" style="margin-bottom: 5px">
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <label for="password"
                                                        class="form-label text-base text-dark font-weight-bold">No.
                                                        Rangka</label>
                                                </div>
                                                <div class="col-4">
                                                    <button type="button" class="btn btn-base"
                                                        style="background-color: #a1a1a1;">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="password">

                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="form-label text-base text-dark font-weight-bold">Nama
                                            Pemilik</label>
                                        <input type="text" class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text"
                                            class="form-label text-base text-dark font-weight-bold">Alamat
                                            Pemilik</label>
                                        <textarea class="form-control" id="message-text" rows="6" cols="50"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama"
                                            class="col-form-label text-base text-dark font-weight-bold">No.
                                            KTP</label>
                                        <input type="text" class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama" class="form-label text-base text-dark font-weight-bold">No.
                                            WhatsApp</label>
                                        <input type="text" class="form-control" id="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama"
                                            class="form-label text-base text-dark font-weight-bold">Tanggal Pengujian
                                        </label>
                                        <input type="text" class="form-control" id="nama"
                                            data-provide="datepicker">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="nama"
                                                class="form-label text-base text-dark font-weight-bold">Tanggal Mati
                                                Uji</label>
                                            <input type="text" class="form-control" id="nama"
                                                data-provide="datepicker">
                                        </div>
                                        <label for="jabatan"
                                            class="form-label text-base text-dark font-weight-bold">Jenis Pengujian</label>
                                        <select id="jabatan" class="form-control">
                                            <option selected>Baru</option>
                                            <option>Berkala</option>
                                            <option>Numpang Masuk</option>
                                            <option>Mutasi Masuk</option>
                                            <option>Numpang Keluar</option>
                                            <option>Mutasi Keluar</option>
                                            <option>Ubah Sifat</option>
                                            <option>Ubah Bentuk</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas"
                                            class="form-label text-base text-dark font-weight-bold">Jenis kendaraan</label>
                                        <select id="tugas" class="form-control">
                                            <option selected>Barang</option>
                                            <option>Penumpang</option>
                                            <option>Bis</option>
                                            <option>Khusus</option>
                                            <option>Gandengan</option>
                                            <option>Tempelan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas"
                                            class="form-label text-base text-dark font-weight-bold">Ganti Kartu</label>
                                        <select id="tugas" class="form-control">
                                            <option selected>Tidak</option>
                                            <option>Ganti</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas"
                                            class="form-label text-base text-dark font-weight-bold">Dikuasakan</label>
                                        <select id="tugas" class="form-control">
                                            <option selected>Tidak</option>
                                            <option>Ya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas"
                                            class="form-label text-base text-dark font-weight-bold">Status
                                            Pendaftaran</label>
                                        <select id="tugas" class="form-control">
                                            <option selected>Diterima</option>
                                            <option>Ditolak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text"
                                            class="form-label text-base text-dark font-weight-bold">Keterangan
                                            Ditolak</label>
                                        <textarea class="form-control" id="message-text" rows="3" cols="50"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-warning btn-base">Reset / Clear</button>
                        <button type="button" class="btn btn-primary btn-base">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts-js')
@endpush
