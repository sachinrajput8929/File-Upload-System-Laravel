 <!DOCTYPE html>
 <html lang="en">

 <!-- Mirrored from adminlte.io/themes/v3/pages/examples/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 05:03:12 GMT -->

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title> Log in </title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css') }}">
     <!-- icheck bootstrap -->
     <link rel="stylesheet" href="{{ url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min2167.css?v=3.2.0') }}">
      
 </head>


 <body class="hold-transition login-page">
     <div class="login-box">
         <!-- /.login-logo -->
         @error('errormsg')
                                    
         <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
            <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button>
           <strong>Error! </strong> {{ $message }}
       </div>
       @enderror
         <div class="card card-outline card-primary">
             <div class="card-header text-center">
                 <a href="" class="h1"><b>Login</b> </a>
             </div>
             <div class="card-body">
                 <p class="login-box-msg">Sign in to start your portal</p>

                 <form action="{{ route('userlogin') }}" method="post">
                    @csrf
                     <div class="input-group mb-3">
                         <input type="text" name="identifier" class="form-control" placeholder="Phone/Email">
                         <div class="input-group-append">
                             <div class="input-group-text">
                                 <span class="fas fa-envelope"></span>
                             </div>
                         </div>
                     </div>
                     @if ($errors->has('identifier'))
                         <span style="color: red;">{{ $errors->first('identifier') }}</span>
                     @endif

                     <div class="input-group mb-3">
                         <input type="password" class="form-control" name="password" placeholder="Password">
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
                             <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                         </div>
                         <!-- /.col -->
                     </div>
                 </form>


                 {{-- <p class="mb-0">
                     <a href="{{ url('register0101') }}" class="text-center">Register a new </a>
                 </p> --}}
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->
     </div>
     <!-- /.login-box -->

     <!-- jQuery -->
     <script src="{{ url('backend/plugins/jquery/jquery.min.js') }}"></script>
     <!-- Bootstrap 4 -->
     <script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- AdminLTE App -->
     <script src="{{ url('backend/dist/js/adminlte.min2167.js?v=3.2.0') }}"></script>
 </body>

 </html>
