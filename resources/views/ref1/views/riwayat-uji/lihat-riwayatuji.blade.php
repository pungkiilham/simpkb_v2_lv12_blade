@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Riwayat Uji Seluruh Kendaraan</h1>
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
                                    {{-- <a type="button" class="btn btn-base btn-warning"
                                        href="{{ URL::to('/') }}/buatdata-kendaraan"
                                        style="background-color: #e7921b;">Tambah Kendaraan</a>
                                    <button type="button" class="btn btn-base btn-warning" onclick=""
                                        style="background-color: #2559b9;">Import CSV</button> --}}
                                    <button type="button" class="btn btn-base" onclick=""
                                        style="background-color: #d32121;">Export PDF</button>
                                </div>
                            </div>

                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            {{-- <th class="text-center font-weight-bold">No</th> --}}
                                            <th class="text-center font-weight-bold">Data Pemilik</th>
                                            <th class="text-center font-weight-bold">Data Kendaraan</th>
                                            <th class="text-center font-weight-bold">Tanggal Uji & Mati</th>
                                            <th class="text-center font-weight-bold">Status Uji</th>
                                            {{-- <th class="text-center font-weight-bold">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left" style="width: 500px">Jenis pemilik:<br /><br />
                                                Nama pemilik:<br /><br /> No KTP:<br /><br /> No WA:
                                            <td class="text-left" style="width: 300px">Nopol:<br /><br /> No
                                                Rangka:<br /><br /> No Uji:<br /><br /> Jenis Kendaraan:</td>
                                            <td class="text-left" style="width: 200px">Tgl Uji Terahir:<br /><br /> Tgl Mati
                                                Uji:
                                            </td>
                                            <td class="text-center" style="width: 300px">Mati / Hidup</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-content text-left">
                                <div role="tabpanel" class="tab-pane fade active show" id="foto">
                                    <div class="card-header">
                                        <div class="card-header"
                                            style="font-weight: bold; color:#e4e4e4; margin-top: 10px; margin-buttom: 30px; font-size: 20px; background-color: #3a4246; text-align: center">
                                            Riwayat Pengujian Kendaraan
                                        </div>
                                        <table class="table table-hover table-bordered"
                                            style="min-width: 500px; width: 100%">
                                            <thead style="background-color: #e4e4e4;">
                                                <tr>
                                                    <th class="text-center font-weight-bold">No</th>
                                                    <th class="text-center font-weight-bold">Jenis Pengujian</th>
                                                    <th class="text-center font-weight-bold">Tanggal Uji</th>
                                                    <th class="text-center font-weight-bold">Tanggal Mati Uji</th>
                                                    <th class="text-center font-weight-bold">Hasil Uji / Pendaftaran</th>
                                                    <th class="text-center font-weight-bold">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="width: 25px">1</td>
                                                    <td class="text-center" style="width: 300px">Baru</td>
                                                    <td class="text-center" style="width: 200px">13-03-2024
                                                    <td class="text-center" style="width: 200px">12-03-2024
                                                    </td>
                                                    <td class="text-left" style="width: 500px">Ditolak / Lulus / Tidak Lulus
                                                        / Tidak Uji <br /><br /> Keterangan Ditolak / TL:</td>
                                                    <td class="text-center" style="padding:25px">
                                                        <a type="button" class="btn btn-base" href="{{ URL::to('/') }}/#"
                                                            style="background-color: #1b73e7;">Foto Kendaraan</a>
                                                        <br /><br />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="w-auto">
                                            <nav aria-label="Page navigation example" style="margin-top: 20px">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
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
