@extends('login')
@section('konten')
    <section class="style-section">


        <nav class="modal-header navbar navbar-expand-md" style="margin: 16px auto 4px auto;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets_home/img/logodishub.png" alt="logo" />
                </a>
                {{-- <h1 class="navbar-nav justify-content-flex-start flex-grow-1">asdf</h1> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div></div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1" style="padding-right: 0rem !important; ">

                            <li class="nav-item">
                                <div style="font-size: 30px; font-weight: bold" class="display-date">
                                    <span id="day">day</span>,
                                    <span id="daynum">00</span>
                                    <span id="month">month</span>
                                    <span id="year">0000</span>
                                    <span> / </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div style="font-size: 30px; font-weight: bold" class="display-time"></div>
                                {{-- <button class="btn btn-dark btn-base hover-login text-uppercase btn-lg btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ======= HEADER END ======= -->


        <!-- ======= ISI START ======= -->
        <div class="modal-body navbar-body " style="margin: 20px 16px 20px 16px;  !important;">
            <div class="container-fluid-body row" style="column-gap: 20px;">


                {{-- <div class="col-lgm-12 col-lg-12 col-xxl-12 col-xxxl-12 rounded-4 height: 100%;"
                    style="background-color: #f6f6f6; border: 0.7px solid #212121; box-shadow: 1px 3px;!important;">
                    <div class="margin-top: 300px; margin-buttom: 300px; padding:25px;"> --}}

                <div class="daftar-kegiatan__table-list">
                    {{-- <table id="tableLog" class="table table-bordered" style="min-width: 500px; width: 100%"> --}}
                    <table class="table table-bordered table-striped" style="min-width: 500px; width: 100%;">
                        <thead style="background-color: rgb(50, 49, 49); font-size: 30px;">
                            <tr class=" text-light">
                                <th class="text-center font-weight-bold">No</th>
                                <th class="text-center font-weight-bold">Nama Pemilik</th>
                                <th class="text-center font-weight-bold">No. Polisi</th>
                                <th class="text-center font-weight-bold">No. Uji</th>

                                <th class="text-center font-weight-bold">Jenis Kendaraan</th>
                                <th class="text-center font-weight-bold">Status Proses</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 26px;">
                            <tr>
                                <td class="text-center" style="width: 25px">1</td>
                                <td class="text-center" style="width: 400px">Superno</td>
                                <td class="text-center" style="width: 250px">N1274KS</td>
                                <td class="text-center" style="width: 250px">921387234</td>
                                <td class="text-center" style="width: 250px">Mobil Bak Terbuka</td>
                                <td class="text-center" style="width: 250px">Tunggu</td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 25px">2</td>
                                <td class="text-center" style="width: 400px">Superno</td>
                                <td class="text-center" style="width: 250px">N1274KS</td>
                                <td class="text-center" style="width: 250px">921387234</td>
                                <td class="text-center" style="width: 300px">Mobil Bak Terbuka</td>
                                <td class="text-center text-primary" style="width: 200px">Pengujian</td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 25px">3</td>
                                <td class="text-center" style="width: 400px">Superno</td>
                                <td class="text-center" style="width: 250px">N1274KS</td>
                                <td class="text-center" style="width: 250px">921387234</td>
                                <td class="text-center" style="width: 300px">Mobil Bak Terbuka</td>
                                <td class="text-center text-danger" style="width: 200px">Cetak Kartu</td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 25px">4</td>
                                <td class="text-center" style="width: 400px">Superno</td>
                                <td class="text-center" style="width: 250px">N1274KS</td>
                                <td class="text-center" style="width: 250px">921387234</td>

                                <td class="text-center" style="width: 300px">Mobil Bak Terbuka</td>
                                <td class="text-center text-success" style="width: 200px">Selesai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- </div>
                </div> --}}

                <!-- ======= KIRI ======= -->
                {{-- <div class="col-lgm-8 col-lg-8 col-xxl-8 col-xxxl-8 rounded-4 "
                    style="background-color: #f6f6f6; border: 0.7px solid #212121; box-shadow: 1px 3px;    !important;">
                    <div class="style-margin-xxxl style-margin-xxl style-margin-l style-margin-m">
                        <div class="home-header">
                            <p
                                class=" type-style-welcome-xxxl type-style-welcome-xxl type-style-welcome-l type-style-welcome-m ">
                                selamat datang di aplikasi</p>
                            <h1
                                class="type-style-sim-xxxl type-style-sim-xxl type-style-sim-l type-style-sim-m  underline-xxxl underline-xxl underline-l underline-m">
                                SIM PKB DISHUB KOTA BATU</h1>
                        </div>

                        <div class="home-db-info ">
                            <div class="home-db-list">
                                <div class="type-style-isi-xxxl type-style-isi-xxl type-style-isi-l type-style-isi-m">
                                    <p> Aplikasi ini berfungsi sebagai media informasi dalam melakukan</p>
                                    <p> manajemen pelayanan publik secara terstruktur dan akuntable</p>
                                    <p> pada UPT Pengujian Kendaraan Bermotor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <!-- ======= KANAN ======= -->
                {{-- <div class="col-lgm-4 col-lg-4 col-xxl-4 col-xxxl-4  rounded-4"
                    style="background-color: #f6f3f0; border: 0.7px solid #212121; box-shadow: 0.7px 3px ; !important;">
                    <div class="hp-xxxl hp-xxl hp-l hp-m" style="background-size: cover; overflow: hidden; ">
                        <lottie-player src="{{ URL::to('/') }}/assets_home/img/O6ogScf2NI.json" background="transparent"
                            speed="1" style="width: 102%; " loop autoplay></lottie-player>
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- ======= ISI END ======= -->




    </section>
@endsection

@push('scripts-js')
    <script>
        const displayTime = document.querySelector(".display-time");
        // Time
        function showTime() {
            let time = new Date();
            displayTime.innerText = time.toLocaleTimeString("en-US", {
                hour12: false
            });
            setTimeout(showTime, 1000);
        }

        showTime();

        // Date
        function updateDate() {
            let today = new Date();

            // return number
            let dayName = today.getDay(),
                dayNum = today.getDate(),
                month = today.getMonth(),
                year = today.getFullYear();

            const months = [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
            ];
            const dayWeek = [
                "Minggu",
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jum'at",
                "Sabtu",
            ];
            // value -> ID of the html element
            const IDCollection = ["day", "daynum", "month", "year"];
            // return value array with number as a index
            const val = [dayWeek[dayName], dayNum, months[month], year];
            for (let i = 0; i < IDCollection.length; i++) {
                document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
            }
        }

        updateDate();
    </script>
@endpush
