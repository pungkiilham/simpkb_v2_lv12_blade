@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Daftar Antrian Hari Ini</h1>
                            </div>
                        </div>

                        <div class="daftar-kegiatan__table">
                            <div class="daftar-kegiatan__table-tools" style="min-width:800px;">
                                <div class="d-flex align-items-center">
                                    <div class="search">
                                        {{-- <input class="form-control" type="text" placeholder="Search" />
                                        <img src="assets_admin/images/search.svg" alt="" /> --}}
                                    </div>
                                </div>
                                <!-- Button trigger modal -->

                                <div class="w-auto">
                                    <div class="d-inline-flex align-items-center" style="margin-right: 20px">
                                        <label for="tugas" class="form-label text-base text-dark font-weight-bold"
                                            style="margin-right: 10px; margin-left: 30px">
                                            Batas_Antrian_Harian: </label>
                                        <input class="form-control" type="text" placeholder="JML antrian" />
                                    </div>
                                    {{-- <button class="btn btn-base btn-success"  onclick="download_log_activity_{{$id}}()" style="background-color: #0bc424">Download All</button> --}}
                                    <a type="button" class="btn btn-base" href="#"
                                        style="background-color: #1b73e7;">Simpan</a>
                                </div>
                            </div>
                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Nama Loket</th>
                                            <th class="text-center font-weight-bold">Jumlah Antrian</th>
                                            {{-- <th class="text-center">Alamat</th> --}}
                                            {{-- <th class="text-center">No. HP</th> --}}
                                            <th class="text-center font-weight-bold">Sisa antrian</th>
                                            <th class="text-center font-weight-bold">No. Dipanggil</th>
                                            {{-- <th class="text-center">Username</th> --}}
                                            <th class="text-center font-weight-bold">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-center" style="width: 400px">Loket 1</td>
                                            <td class="text-center" style="width: 250px">10</td>
                                            <td class="text-center" style="width: 250px">3</td>
                                            <td class="text-center" style="width: 250px">7</td>
                                            <td class="text-center" style="padding:25px"> <button type="button"
                                                    class="btn btn-base" data-toggle="modal" data-target="#modahUbah"
                                                    onclick="" style="background-color: #1b73e7;">Panggil</button>
                                                <button type="button" class="btn btn-base" data-toggle="modal"
                                                    data-target="" onclick="" style="background-color: #d32121;">Panggil
                                                    Ulang</button>
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


    </div>
@endsection

@push('scripts-js')
@endpush
