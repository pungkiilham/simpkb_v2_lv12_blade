<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/assets_home/img/logodishub.ico" />
    <title>DINAS PERHUBUNGAN KOTA BATU</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Style -->
    <link href="assets_home/css/app.css" rel="stylesheet" />
    <script src="assets_home/js/jquery-3.6.1.min.js" type="text/javascript"></script>
    <style>
      .modal-backdrop {
        background-color: black;
      }
    </style>
  </head>

  <body>

    @yield('konten')
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content" style="background-image: url({{URL::to('/')}}/assets_home/img/back_login.png);background-repeat: no-repeat; background-size: cover; border-radius: 16px; background-position: center;">
          <div class="modal-header" style="margin-bottom: 350px;">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h2 class="text-3xl text-dark fw-bold mb-2">LOGIN</h2>
            <form id="form_login">
              <div class="mb-2">
                <label for="InputEmail1" class="form-label text-lg">Username / Email</label>
                <input type="text" class="form-control"  name="username" id="username" style="background-color: #efefef;" />
              </div>
              <div class="mb-2">
                <label for="InputPassword1" class="form-label text-lg">Password</label>
                <input type="password" class="form-control" name="password" id="password"  style="background-color: #efefef;" />
              </div>
              <div class="mb-2">
                <p style="color:red;font-style: italic;" id="text-warning">&nbsp;</p>
              </div>
              <div class="mb-2">
                <button type="button" onclick="do_login();" class="btn hover-success btn-lg w-100 fw-semibold text-white" style="background-color: #04b593;">MASUK</button>
              </div>
              <div class="col-12 text-center">
                <p class="text-sm">Copyright ©2022 EstroHutama</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script src="assets_home/js/app.js" type="text/javascript"></script>
    <script src="assets_home/js/underline.js" type="text/javascript"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @stack('scripts-js')
    <script>
      function do_login(){
        var formData = new FormData($('#form_login')[0]);
        $.ajax({
          url: "{{URL::to('/')}}/login",
          type: "POST",
          data: formData,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          cache : false,
          processData: false,
          contentType: false,
          dataType: "JSON",
          success: function (response) {
            if (response.status == true) {
              window.location = "{{URL::to('/')}}/dashboard/bidang";
            }else{
              $('#text-warning').text(response.message);
            }
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.log('Terdapat kesalahan  [' + JSON.stringify(jqXHR) + ']');
          }
        });
      }
    </script>


  </body>
</html>
