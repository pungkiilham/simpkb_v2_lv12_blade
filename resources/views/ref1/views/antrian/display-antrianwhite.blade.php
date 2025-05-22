@extends('login')
@section('konten')
    <section class="style-section">


        <nav class="modal-header navbar navbar-expand-md" style="margin: 16px auto 4px auto;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets_home/img/logodishub.png" alt="logo" />
                </a>
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


                <!-- ======= KIRI ======= -->
                <div class="col-lgm-8 col-lg-8 col-xxl-8 col-xxxl-8 rounded-4 "
                    style="background-color: #f6f6f6; border: 0.7px solid #212121; box-shadow: 1px 3px; !important;">
                    {{-- <div class="style-margin-xxxl style-margin-xxl style-margin-l style-margin-m">
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

                        <iframe width="1020" height="600"
                            src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1&autoplay=1&mute=1">
                        </iframe>

                    </div> --}}
                    <div class="container">
                        <p class=" type-style-welcome-xxxl type-style-welcome-xxl type-style-welcome-l type-style-welcome-m"
                            style="text-align: center; font-weight: bold; margin-top: 30px;">
                            Silahkan menunggu giliran Anda dengan tertib</p>
                        <div class="row align-items-center">
                            {{-- <div class="col align-self-center"> --}}
                            <iframe width="1020" height="600" style="margin-top: 30px"
                                src="https://www.youtube.com/embed/DoNYHYeovsA&t=278s&ab_channel=EstroHutama?playlist=DoNYHYeovsA&t=278s&ab_channel=EstroHutama&loop=1&autoplay=1&mute=1">
                            </iframe>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>



                <!-- ======= KANAN ======= -->
                <div class="col-lgm-4 col-lg-4 col-xxl-4 col-xxxl-4  rounded-4"
                    style="background-color: #f6f3f0; border: 0.7px solid #212121; box-shadow: 0.7px 3px ; !important;">
                    <div class="row justify-content-md-center">
                        <div class="card border-dark mb-3"
                            style="max-width: 500px; max-height:400px; margin-top: 45px; background-color: #ffffff; box-shadow: 0.7px 3px ;">
                            <div class="card-header"
                                style="text-align: center; font-size: 40px; font-weight: bold; background-color: #e0e0e0; margin-top: 15px">
                                Loket 1</div>
                            <div class="card-body">
                                {{-- <h3 class="card-title" style="text-align: center">Light card title</h3> --}}
                                <h1 class="card-text"
                                    style="text-align: center;-webkit-text-fill-color: #3333e8; font-size: 150px">
                                    A-1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="card border-dark mb-3"
                            style="max-width: 500px; max-height:400px; margin-top: 45px; background-color: #ffffff; box-shadow: 0.7px 3px ;">
                            <div class="card-header"
                                style="text-align: center; font-size: 40px; font-weight: bold; background-color: #e0e0e0; margin-top: 15px">
                                Loket 2</div>
                            <div class="card-body">
                                {{-- <h3 class="card-title" style="text-align: center">Light card title</h3> --}}
                                <h1 class="card-text"
                                    style="text-align: center;-webkit-text-fill-color: #3333e8; font-size: 150px">
                                    B-1</h1>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="hp-xxxl hp-xxl hp-l hp-m" style="background-size: cover; overflow: hidden; margin-top:50px ">
                        <lottie-player src="{{ URL::to('/') }}/assets_home/img/O6ogScf2NI.json" background="transparent"
                            speed="1" style="width: 102%; " loop autoplay></lottie-player>
                    </div> --}}
                </div>

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
