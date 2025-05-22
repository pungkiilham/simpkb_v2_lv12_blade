@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Daftar Seluruh Karyawan</h1>
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
                                    {{-- <button class="btn btn-base btn-success"  onclick="download_log_activity_{{$id}}()" style="background-color: #0bc424">Download All</button> --}}
                                    <button type="button" class="btn btn-base" data-toggle="modal"
                                        data-target="#exampleModalCenter" onclick=""
                                        style="background-color: #e7921b;">Tambah Karyawan</button>
                                    <button type="button" class="btn btn-base" onclick=""
                                        style="background-color: #218f52;">Export CSV</button>
                                    <button type="button" class="btn btn-base" onclick=""
                                        style="background-color: #d32121;">Export PDF</button>
                                </div>
                            </div>
                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Username</th>
                                            <th class="text-center font-weight-bold">Nama</th>
                                            {{-- <th class="text-center">Alamat</th> --}}
                                            {{-- <th class="text-center">No. HP</th> --}}
                                            <th class="text-center font-weight-bold">Jabatan</th>
                                            <th class="text-center font-weight-bold">Tugas / Pos</th>
                                            {{-- <th class="text-center">Username</th> --}}
                                            <th class="text-center font-weight-bold">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-center" style="width: 250px"></td>
                                            <td class="text-center" style="width: 400px"></td>
                                            <td class="text-center" style="width: 300px"></td>
                                            <td class="text-center" style="width: 250px">penguji 2</td>
                                            <td class="text-center" style="padding:25px"><button type="button"
                                                    class="btn btn-base" data-toggle="modal" data-target="#modahUbah"
                                                    onclick="" style="background-color: #e7921b;">Ubah</button>
                                                <button type="button" class="btn btn-base" data-toggle="modal"
                                                    data-target="" onclick=""
                                                    style="background-color: #e71b1b;">Hapus</button>
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

        <!-- Modal tambah karyawan -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h2 class="modal-title text-dark font-weight-bold" id="exampleModalLongTitle">Tambah karyawan baru
                        </h2>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                        {{-- <span aria-hidden="true">&times;</span> --}}
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1"
                                class="form-label text-base text-dark font-weight-bold">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Username harus unik dan tidak boleh sama
                                dengan yang lain.</small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label text-base text-dark font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label text-base text-dark font-weight-bold">Nama
                                Karyawan</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="form-label text-base text-dark font-weight-bold">Jabatan</label>
                            <select id="jabatan" class="form-control">
                                <option selected>pns</option>
                                <option>p3k</option>
                                <option>kontrak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tugas" class="form-label text-base text-dark font-weight-bold">Tugas /
                                Role</label>
                            <select id="tugas" class="form-control">
                                <option selected>admin 1</option>{{-- pendaftaran & buat master kendaraan --}}
                                <option>admin 2</option> {{-- cetak kartu & bukti lulus/TL --}}
                                <option>penguji 1</option> {{-- foto & pra uji --}}
                                <option>penguji 2</option> {{-- emisi, pit lift, lampu --}}
                                <option>penguji 3</option> {{-- rem, kuncup, speedo --}}
                                <option>verifikator</option> {{-- lihat hasil dan verifikasi hasil --}}
                                <option>superadmin</option> {{-- semua fitur --}}
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-primary btn-base">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal ubah karyawan -->
        <div class="modal fade" id="modahUbah" tabindex="-1" role="dialog" aria-labelledby="modahUbah"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h2 class="modal-title text-dark font-weight-bold" id="exampleModalLongTitle">Ubah data karyawan
                        </h2>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                        {{-- <span aria-hidden="true">&times;</span> --}}
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1"
                                class="form-label text-base text-dark font-weight-bold">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Username harus unik dan tidak boleh sama
                                dengan yang lain.</small>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label text-base text-dark font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label text-base text-dark font-weight-bold">Nama
                                Karyawan</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="form-label text-base text-dark font-weight-bold">Jabatan</label>
                            <select id="jabatan" class="form-control">
                                <option selected>pns</option>
                                <option>p3k</option>
                                <option>kontrak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tugas" class="form-label text-base text-dark font-weight-bold">Tugas /
                                Role</label>
                            <select id="tugas" class="form-control">
                                <option selected>admin 1</option>{{-- pendaftaran & buat master kendaraan --}}
                                <option>admin 2</option> {{-- cetak kartu & bukti lulus/TL --}}
                                <option>penguji 1</option> {{-- foto & pra uji --}}
                                <option>penguji 2</option> {{-- emisi, pit lift, lampu --}}
                                <option>penguji 3</option> {{-- rem, kuncup, speedo --}}
                                <option>verifikator</option>
                                <option>superadmin</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-primary btn-base">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts-js')
@endpush
