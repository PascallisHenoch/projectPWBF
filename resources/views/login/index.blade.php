<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ASIPS | Login </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">

  <style>
    .login-page {
      background-image: url('img/kids.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
      background-color: white;
      background-size: cover;
    }
    .login {
        margin: 150px auto;
        width: 400px;
        padding: 10px;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/login" class="h2"><b>LOGIN</b></a>
      </div>
      <div class="card-body">
        

        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" autofocus required value={{ old('email') }}>
            @error('email')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
          </div>
            <div class="form-floating">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" required>
              @error('password')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit " href="/home" class="w-100 btn btn-lg btn-primary mt-3">LOGIN</button>
        </form>
        <p></p>
        <small class="d-block text-center">Belum mempunyai akun? <a href="/register">Register Now!</a></small>
        <small class="d-block text-right mt-3"><a href="/">Kembali</a></small>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
</body>
</html>