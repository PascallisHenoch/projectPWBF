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
    .register {
        margin: 50px auto;
        width: 500px;
        padding: 10px;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="register">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="/" class="h2"><b>REGISTER</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Isi Dengan Benar dan Cermat</p>

        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" required value={{ old('name') }}>
            
            @error('name')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="" required value={{ old('username') }}>
            
            @error('username')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" required value={{ old('email') }}>
            
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
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">REGISTER</button>
        </form>
        <p></p>
        <small class="d-block text-center mt-3">Sudah Mempunyai akun? <a href="/login">Login Now!</a></small>
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