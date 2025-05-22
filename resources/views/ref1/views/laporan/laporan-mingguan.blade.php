@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Laporan Pelayanan <span> | Per Minggu</h1>
                            </div>
                        </div>

                        <div class="d-flex align-items-right" style="margin-bottom: 25px; margin-top:50px">
                            <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/laporan-harian"
                                style="background-color: #2559b9;">Laporan Harian</a>
                            <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/laporan-mingguan"
                                style="background-color: #2559b9; margin-left: 25px;">Laporan Mingguan</a>
                            <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/laporan-bulanan"
                                style="background-color: #2559b9; margin-left: 25px;">Laporan Bulanan</a>
                        </div>


                        <div class="daftar-kegiatan__table-tools" style="min-width:800px;">
                            <div class="d-flex align-items-center">
                                <div class="search">
                                    {{-- <input class="form-control" type="text" id="pencarian_{{$id}}" placeholder="Search" /> --}}
                                    <input class="form-control" type="text" placeholder="Search" />
                                    <img src="assets_admin/images/search.svg" alt="" />
                                </div>
                                <div class="d-flex align-items-center">
                                    <label for="tugas" class="form-label text-base text-dark font-weight-bold"
                                        style="margin-right: 10px; margin-left: 30px">
                                        Periode: </label>
                                    <input type="text" class="form-control" id="nama" data-provide="datepicker"
                                        placeholder="Tanggal awal" style="margin-right: 20px">
                                    <input type="text" class="form-control" id="nama" data-provide="datepicker"
                                        placeholder="Tanggal akhir">
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
                                {{-- <a type="button" class="btn btn-base btn-warning"
                                    href="{{ URL::to('/') }}/buatdata-kendaraan"
                                    style="background-color: #e7921b;">Tambah Kendaraan</a>
                                <button type="button" class="btn btn-base btn-warning" onclick=""
                                    style="background-color: #2559b9;">Import CSV</button> --}}
                                <button type="button" class="btn btn-base" onclick=""
                                    style="background-color: #218f52;">Export CSV</button>
                                <button type="button" class="btn btn-base" onclick=""
                                    style="background-color: #d32121;">Export PDF</button>
                            </div>
                        </div>

                        <div class="card-header" style="margin-bottom: 30px">
                            <div class="card-header"
                                style="font-weight: bold; color:#e4e4e4; margin-buttom: 30px; font-size: 20px; background-color: #3a4246; text-align: center">
                                Ringkasan Data Pelayanan Mingguan  - "dari: dd/mm/yy | sampai: dd/mm/yy"
                            </div>
                            <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                <thead style="background-color: #e4e4e4;">
                                    <tr>
                                        <th class="text-center font-weight-bold">Jumlah Pendaftaran</th>
                                        <th class="text-center font-weight-bold">Jumlah Pengujian</th>
                                        <th class="text-center font-weight-bold">Jumlah per Hasil Uji</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left" style="width: 33%">Diterima :<br /><br />Ditolak
                                            :<br /><br />Total :</td>
                                        <td class="text-left" style="width: 33%">Baru :<br /><br />Berkala
                                            :<br /><br />Mutasi :<br /><br />Numpang Uji :<br /><br />"Lain2 seperti jenis
                                            pengujian di halaman pendaftaran"</td>
                                        <td class="text-left" style="width: 33%">Lulus :<br /><br /> Tidak Lulus
                                            :<br /><br /> Belum Uji :</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <div class="daftar-kegiatan__table">

                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <div class="card-header"
                                        style="font-weight: bold; color:#e4e4e4; margin-buttom: 30px; font-size: 20px; background-color: #3a4246; text-align: center">
                                        Detail Data Pelayanan Mingguan  - "dari: dd/mm/yy | sampai: dd/mm/yy"
                                    </div>
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Data Pemilik</th>
                                            <th class="text-center font-weight-bold">Data Kendaraan</th>
                                            <th class="text-center font-weight-bold">Tanggal</th>
                                            <th class="text-center font-weight-bold">Status<br />Pendaftaran</th>
                                            <th class="text-center font-weight-bold">Status<br />Pengujian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-left" style="width: 700px">Jenis pemilik:<br /><br />
                                                Nama pemilik:<br /><br /> No KTP:<br /><br /> No WA:
                                            <td class="text-left" style="width: 500px">Nopol:<br /><br /> No
                                                Rangka:<br /><br /> No Uji:<br /><br /> Jenis Kendaraan:</td>
                                            <td class="text-left" style="width: 300px">Tgl Daftar:<br /><br />Tgl
                                                Uji:<br /><br />Tgl Mati Uji:
                                            </td>
                                            <td class="text-center" style="width: 200px">Diterima / Ditolak</td>
                                            <td class="text-center" style="padding:25px">Lulus / Tidak Lulus / Belum</td>
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
