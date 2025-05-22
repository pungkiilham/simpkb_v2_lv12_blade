@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Log Aktivitas</h1>
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
                                    <button class="btn btn-base btn-success" onclick=""
                                        style="background-color: #218f52">Export CSV</button>
                                </div>
                            </div>
                            <div class="daftar-kegiatan__table-list">
                                {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                                <table class="table table-hover table-bordered" style="min-width: 500px; width: 100%">
                                    <thead style="background-color: #e4e4e4;">
                                        <tr>
                                            <th class="text-center font-weight-bold">No</th>
                                            <th class="text-center font-weight-bold">Tanggal</th>
                                            <th class="text-center font-weight-bold">Jam</th>
                                            <th class="text-center font-weight-bold">Username</th>
                                            <th class="text-center font-weight-bold">Aktivitas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 25px">1</td>
                                            <td class="text-center" style="width: 150px"></td>
                                            <td class="text-center" style="width: 150px"></td>
                                            <td class="text-center" style="width: 200px"></td>
                                            <td class="text-center" style="width: 600px"></td>
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
