@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Riwayat Pengiriman WA Blast</h1>
                            </div>
                        </div>


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

                                <button type="button" class="btn btn-base" onclick=""
                                    style="background-color: #218f52;">Export CSV</button>
                            </div>
                        </div>


                        <div class="daftar-kegiatan__table">

                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    {{-- <div class="card-header"
                                        style="font-weight: bold; color:#e4e4e4; margin-buttom: 30px; font-size: 20px; background-color: #3a4246; text-align: center">
                                        "4.573" Kendaraan Mati Uji Per "13 Mei 2024"
                                    </div> --}}
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Tanggal Pengiriman</th>
                                            <th class="text-center font-weight-bold">Waktu Pengiriman</th>
                                            <th class="text-center font-weight-bold">Total Kendaraan</th>
                                            <th class="text-center font-weight-bold">Detail Proses</th>
                                            {{-- <th class="text-center font-weight-bold">Status<br />Pendaftaran</th> --}}
                                            <th class="text-center font-weight-bold">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-center" style="width: 300px">24 April 2024</td>
                                            <td class="text-center" style="width: 300px">20:33:01</td>
                                            <td class="text-center" style="width: 300px">2.275 Kendaraan</td>
                                            <td class="text-left" style="width: 300px">Terkirim: 2.164<br /><br />Gagal:129
                                            </td>
                                            {{-- <td class="text-center" style="width: 200px">Diterima / Ditolak</td> --}}
                                            <td class="text-center" style="padding:25px">
                                                <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/detail-riwayat-blast"
                                                    style="background-color: #2559b9;">Lihat Daftar Target</a>
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                <option selected>admin</option>
                                <option>penguji</option>
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
