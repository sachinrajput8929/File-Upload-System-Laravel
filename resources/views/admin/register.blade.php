<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/register-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 05:03:12 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page (v2)</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css')}}">
 <!-- icheck bootstrap -->
 <link rel="stylesheet" href="{{ url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
 <!-- Theme style -->
 <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min2167.css?v=3.2.0')}}">
 
 <body class="hold-transition register-page">
<div class="register-box">

    @if (session('success'))
                                 
    <div class="alert alert-success alert-dismissible alert-alt solid fade show">
        <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Success!</strong>  {{ session('success') }}
    </div>
@endif
  <div class="card card-outline card-primary">
  
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{url('register')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @if ($errors->has('name'))
        <span style="color: red;">{{ $errors->first('name') }}</span>
    @endif
        {{-- <div class="input-group mb-3">
            <input type="number" class="form-control" name="phone" placeholder="Phone">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('phone'))
          <span style="color: red;">{{ $errors->first('phone') }}</span>
      @endif --}}

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @if ($errors->has('email'))
        <span style="color: red;">{{ $errors->first('email') }}</span>
    @endif

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="****">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
           
        @if ($errors->has('password'))
        <span style="color: red;">{{ $errors->first('password') }}</span>
    @endif
   
        <div class="row">
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
 

      <a href="{{url('/')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<!-- jQuery -->
<script src="{{ url('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('backend/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>
</body>

 </html>
