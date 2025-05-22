@extends('admin')

@section('konten')
    <div class="main-panel">
        <div class="content-wrapper" id="cw-index">
            <div class="daftar-kegiatan__wrapper">
                <div class="row">
                    <div class="col-12" id="daftarKegiatan">
                        <div class="daftar-kegiatan__heading mb-4">
                            <div>
                                <h1 class="text-3xl text-dark font-weight-bold">Dashboard | Rekap Data Aplikasi SIM PKB</h1>
                            </div>
                        </div>
                        <div class="daftar-kegiatan__table">
                            <section class="section card1">
                                <div class="row">
                                    <div class="col">
                                        <div class="card text-center">
                                            <div class="card-body"
                                                style="background-color: #dbdbdb; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <p class="card-text font-weight-bold"
                                                    style="font-size: 26px; color:#3d3d3d">
                                                    Kendaraan Terdaftar</p>
                                                <h5 class="card-title" style="font-size: 48px; font-weight: bold;">100,323
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-center">
                                            <div class="card-body"
                                                style="background-color: #dbdbdb; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <p class="card-text font-weight-bold"
                                                    style="font-size: 26px; color:#3d3d3d">
                                                    Kendaraan Mati Uji</h5>
                                                <h5 class="card-title" style="font-size: 48px; font-weight: bold;">173 </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-center">
                                            <div class="card-body"
                                                style="background-color: #dbdbdb; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <p class="card-text font-weight-bold"
                                                    style="font-size: 26px; color:#3d3d3d">
                                                    Rata-rata Uji Harian</h5>
                                                <h5 class="card-title" style="font-size: 48px; font-weight: bold;"> 32 </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card text-center">
                                            <div class="card-body"
                                                style="background-color: #dbdbdb; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <p class="card-text font-weight-bold"
                                                    style="font-size: 26px; color:#3d3d3d">
                                                    Presentase Kelulusan</h5>
                                                <h5 class="card-title" style="font-size: 48px; font-weight: bold;"> 93.4 %
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="row" style="margin-top: 50px">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body"
                                                style="border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                <h5 class="card-title" style="font-size: 26px; color:black">Jumlah
                                                    Kendaraan Masuk
                                                </h5>
                                                <!-- Line Chart -->
                                                <div id="reportsChart"></div>

                                                <script>
                                                    document.addEventListener("DOMContentLoaded", () => {
                                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                                            series: [{
                                                                name: 'Daftar',
                                                                data: [31, 40, 28, 51, 42, 82, 56],
                                                            }, {
                                                                name: 'Uji',
                                                                data: [11, 32, 45, 32, 34, 52, 41]
                                                            }, {
                                                                name: 'Belum / Tidak UJi',
                                                                data: [15, 11, 32, 18, 9, 24, 11]
                                                            }],
                                                            chart: {
                                                                height: 350,
                                                                type: 'area',
                                                                toolbar: {
                                                                    show: false
                                                                },
                                                            },
                                                            markers: {
                                                                size: 4
                                                            },
                                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                            fill: {
                                                                type: "gradient",
                                                                gradient: {
                                                                    shadeIntensity: 1,
                                                                    opacityFrom: 0.3,
                                                                    opacityTo: 0.4,
                                                                    stops: [0, 90, 100]
                                                                }
                                                            },
                                                            dataLabels: {
                                                                enabled: false
                                                            },
                                                            stroke: {
                                                                curve: 'smooth',
                                                                width: 2
                                                            },
                                                            xaxis: {
                                                                type: 'datetime',
                                                                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                                    "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                                    "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                                    "2018-09-19T06:30:00.000Z"
                                                                ]
                                                            },
                                                            tooltip: {
                                                                x: {
                                                                    format: 'dd/MM/yy HH:mm'
                                                                },
                                                            }
                                                        }).render();
                                                    });
                                                </script>
                                                <!-- End Line Chart -->

                                            </div>
                                        </div>
                                        <div class="col-12" style="margin-top: 20px">
                                            <!-- Jenis Kendaraan -->
                                            <div class="card">
                                                <div class="card-body"
                                                    style="border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                                    <h5 class="card-title" style="font-size: 26px;">Jumlah Kendaraan
                                                        Berdasarkan
                                                        Jenis</h5>

                                                    <!-- Bar Chart -->
                                                    <div id="barChart"></div>

                                                    <script>
                                                        document.addEventListener("DOMContentLoaded", () => {
                                                            new ApexCharts(document.querySelector("#barChart"), {
                                                                series: [{
                                                                    data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
                                                                }],
                                                                chart: {
                                                                    type: 'bar',
                                                                    height: 350
                                                                },
                                                                plotOptions: {
                                                                    bar: {
                                                                        borderRadius: 4,
                                                                        horizontal: true,
                                                                    }
                                                                },
                                                                dataLabels: {
                                                                    enabled: false
                                                                },
                                                                xaxis: {
                                                                    categories: ['Penumpang Sedan', 'Penumpang Bukan Sedan', 'Bus Kecil', 'Bus Sedang',
                                                                        'Bus Besar', 'DST', 'dst',
                                                                        'dst', 'dst', 'dst'
                                                                    ],
                                                                }
                                                            }).render();
                                                        });
                                                    </script>
                                                    <!-- End Jenis Kendaraan -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card" style="border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 26px; color: black;">Kendaraan Masuk Harian</h5>

                                            <!-- Donut Chart -->
                                            <div id="donutChart"></div>

                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    new ApexCharts(document.querySelector("#donutChart"), {
                                                        series: [44, 55, 13],
                                                        chart: {
                                                            height: 350,
                                                            type: 'donut',
                                                            toolbar: {
                                                                show: true
                                                            }
                                                        },
                                                        labels: ['Pendaftaran', 'Uji', 'Belum'],
                                                    }).render();
                                                });
                                            </script>
                                        </div>
                                    </div><!-- End Donut Chart -->
                                    <div class="card"
                                        style="border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);  margin-top: 20px">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 26px; color: black;">
                                                Jumlah Kendaraan Berdasarkan Pemilik</h5>

                                            <!-- Pie Chart -->
                                            <div id="pieChart"></div>

                                            <script>
                                                document.addEventListener("DOMContentLoaded", () => {
                                                    new ApexCharts(document.querySelector("#pieChart"), {
                                                        series: [440, 550, 130],
                                                        chart: {
                                                            height: 350,
                                                            type: 'pie',
                                                            toolbar: {
                                                                show: true
                                                            }
                                                        },
                                                        labels: ['Perorangan', 'Perusahaan', 'Instansi']
                                                    }).render();
                                                });
                                            </script>
                                        </div>
                                    </div><!-- End Pie Chart -->

                                    <div class="card"
                                        style="border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2); margin-top: 20px">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 26px; color: black; margin-top: 20px">
                                                Monitoring Kehadiran Karyawan</h5>
                                            <!-- Daftar Karyawan -->
                                            <div class="daftar-kegiatan__table-list" style="margin-top: 50px">
                                                <table class="table table-hover table-bordered"
                                                    style="min-width: 300px; width: 100%">
                                                    <thead style="background-color: #e4e4e4;">
                                                        <tr>
                                                            <th class="text-center font-weight-bold">No</th>
                                                            <th class="text-center font-weight-bold">Nama Karyawan</th>
                                                            <th class="text-center font-weight-bold">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center" style="width: 10px">1</td>
                                                            <td class="text-center" style="width: 50px">Karyawan 1</td>
                                                            <td class="text-center" style="width: 30px">Login -
                                                                08:03<br /><br />Logout - 15:33</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- End Daftar Karyawan -->
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
