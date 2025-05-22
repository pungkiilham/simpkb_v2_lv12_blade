<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIM PKB by Estro Hutama</title>
    <link rel="stylesheet" href="assets_admin/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets_admin/vendors/css/vendor.bundle.base.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets_admin/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets_admin/vendors/datatables/datatables.min.css" />
    <link rel="stylesheet" href="assets_admin/scss/style.css" />
    {{-- <link rel="shortcut icon" href="assets_admin/images/favicon.ico" /> --}}
    <link rel="stylesheet" href="assets_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets_admin/vendors/dropzone/dropzone.min.css" />
    <script src="assets_admin/vendors/jquery/jquery-3.6.1.min.js"></script>

    <style>
        div.dataTables_wrapper div.dataTables_info {
            padding-top: 0;
        }

        .text-wrap {
            white-space: normal;
        }

        .dropzone .dz-preview .dz-error-message {
            top: 150px !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-none d-lg-block" style="background-color: #3C4448"></div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"
                    id="btn-toogle">
                    <img src="assets_admin/images/menu.png" height="36" alt="" />
                </button>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <img src="assets_admin/images/menu.png" height="36" alt="" />
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav" style="height: 100%">
                    <div class="w-100 mx-auto d-flex justify-content-center">
                        <a class="navbar-brand brand-logo-mini mr-0" href="javascript:void(0)"><img
                                src="assets_admin/images/dishub logo.png"
                                style="width: calc(258px - 150px); max-width: 80%; height: auto" /></a>
                    </div>
                    <li class="title-app nav-category px-3 mt-1 mb-4 font-weight-bold text-center"
                        style="font-size: 20px;color:#fff;line-height: 25px;">
                        Aplikasi SIM PKB
                    </li>
                    <li class="nav-item bg-white mx-3 mb-3" style="border-radius: 8px; padding: 0 8px"
                        id="userDropdown">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="icon-bg"><img src="assets_admin/images/commandcenter.png" height="24"
                                    width="24" alt="" /></span>
                            <span class="text-dark menu-title" style="font-size: 12px">Hi,
                                {{ Session::get('nm_lengkap') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu justify-content-start">
                                <li class="nav-item">
                                    <a class="nav-link px-2 text-center font-weight-bold"
                                        href="#"><span
                                            class="icon-bg"><img src="assets_admin/images/information grey.png"
                                                height="24" width="24" alt="" /></span>
                                        <span>Buku Manual</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 text-center font-weight-bold"
                                        href="#"><span
                                            class="icon-bg"><img src="assets_admin/images/setting (1).png"
                                                height="24" width="24" alt="" /></span>
                                        <span>Profile Setting</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-2 text-center font-weight-bold"
                                        href="{{ URL::to('/') }}/logout">
                                        <span class="icon-bg"><img src="assets_admin/images/logout.png" height="24"
                                                width="24" alt="" /></span>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/dashboard">
                            <span class="icon-bg"><img src="assets_admin/images/dashboard.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Dasboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/panggil-antrian">
                            <span class="icon-bg"><img src="assets_admin/images/queue.png" style="filter: invert(1);"
                                    height="24" width="24" alt="" /></span>
                            <span class="menu-title font-weight-bold">Antrian</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/daftar-karyawan">
                            <span class="icon-bg"><img src="assets_admin/images/user bidang black.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Daftar Karyawan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/daftar-kendaraan">
                            <span class="icon-bg"><img src="assets_admin/images/database.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Database Kendaraan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/daftarharian-kendaraan">
                            <span class="icon-bg"><img src="assets_admin/images/registration.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/daftarsiapuji-harian">
                            <span class="icon-bg"><img src="assets_admin/images/car.png" style="filter: invert(1);"
                                    height="24" width="24" alt="" /></span>
                            <span class="menu-title font-weight-bold">Pengujian</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/riwayat-uji">
                            <span class="icon-bg"><img src="assets_admin/images/file (1).png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Riwayat Pengujian</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link collapsed" href="{{ URL::to('/') }}/laporan-harian">
                            <span class="icon-bg"><img src="assets_admin/images/report.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Laporan Pelayanan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/wa-blast">
                            <span class="icon-bg"><img src="assets_admin/images/whatsapp.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">WA Blast</span>
                        </a>
                    </li>
                    <li class="nav-item mb-1">
                        <a class="nav-link" href="{{ URL::to('/') }}/log-aktivitas">
                            <span class="icon-bg"><img src="assets_admin/images/icon log aktivitas.png"
                                    style="filter: invert(1);" height="24" width="24"
                                    alt="" /></span>
                            <span class="menu-title font-weight-bold">Log Aktifitas</span>
                        </a>
                    </li>


                    <li class="copyright nav-item nav-category" style="position: absolute; bottom: 30px; left: 5px;">
                        Copyright ©2024
                    </li>
                    <li class="copyright nav-item nav-category" style="position: absolute; bottom: 10px; left: 5px;">
                        <span style="color: #97b7e9 !important; font-weight:600; font-size: 15px;"
                            href="https://estrohutama.com/"> CV. Estro Hutama</span>
                    </li>
                </ul>
            </nav>
            @yield('konten')
        </div>
    </div>
    <script src="assets_admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets_admin/vendors/datatables/datatables.min.js"></script>
    <script src="assets_admin/vendors/datatables/rowsGroup.js"></script>
    <script src="assets_admin/js/off-canvas.js"></script>
    <script src="assets_admin/js/hoverable-collapse.js"></script>
    <script src="assets_admin/js/misc.js"></script>
    <script src="assets_admin/js/dashboard.js"></script>
    <script src="assets_admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets_admin/vendors/dropzone/dropzone.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets_dashboard/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets_dashboard/vendor/chart.js/chart.umd.js"></script>
  <script src="assets_dashboard/vendor/echarts/echarts.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets_dashboard/js/main.js"></script>

    {{-- <script>
      $(".datepicker").datepicker({
        format: 'yyyy-mm-dd'
      });
      $(window).on('load', function(){
        var toggle = false;
        $('#btn-toogle').click(function() {
          toggle = !toggle;
          if(toggle){
            $('.main-panel').css("margin-left", "5%");
          }else{
            $('.main-panel').removeAttr('style');
          }
        });
      });
    </script> --}}
    @stack('scripts-js')
</body>

</html>
