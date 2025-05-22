@extends('login')
@section('konten')

<section class="style-section">


<nav class="modal-header navbar navbar-expand-md" style="margin: 16px auto 4px auto;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="assets_home/img/logodishub.png" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <div></div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1" style="padding-right: 0rem !important; ">

          <li class="nav-item">
            <button class="btn btn-dark btn-base hover-login text-uppercase btn-lg btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
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
        <div class="col-lgm-8 col-lg-8 col-xxl-8 col-xxxl-8 rounded-4 " style="background-color: #f6f6f6; border: 0.7px solid #212121; box-shadow: 1px 3px;    !important;">
        <div class="style-margin-xxxl style-margin-xxl style-margin-l style-margin-m" >
          <div class="home-header" >
            <p class=" type-style-welcome-xxxl type-style-welcome-xxl type-style-welcome-l type-style-welcome-m ">selamat datang di aplikasi</p>
            <h1 class="type-style-sim-xxxl type-style-sim-xxl type-style-sim-l type-style-sim-m  underline-xxxl underline-xxl underline-l underline-m">SIM PKB DISHUB KOTA BATU</h1>
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
        </div>

        
  <!-- ======= KANAN ======= -->
        <div class="col-lgm-4 col-lg-4 col-xxl-4 col-xxxl-4  rounded-4" style="background-color: #f6f3f0; border: 0.7px solid #212121; box-shadow: 0.7px 3px ; !important;">
          <div class="hp-xxxl hp-xxl hp-l hp-m" style="background-size: cover; overflow: hidden; ">
            <lottie-player src="{{URL::to('/')}}/assets_home/img/O6ogScf2NI.json" background="transparent" speed="1" style="width: 102%; " loop autoplay></lottie-player>
          </div>
        </div>

    </div>
  </div>
  <!-- ======= ISI END ======= -->




</section>
@endsection

@push('scripts-js')
<script>

</script>
@endpush
