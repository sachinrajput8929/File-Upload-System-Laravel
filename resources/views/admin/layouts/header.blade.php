<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed">
     <div class="wrapper">
    
      <nav class="main-header navbar navbar-expand navbar-dark">
    
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-weight: 800;color:white"   href="{{url('allfiles')}}" role="button"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
          </li>
       
        </ul>
    
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
              {{-- <i class="far fa-comments"></i> --}}
            <span style="font-weight: 600"> User-  </span><img src="https://w7.pngwing.com/pngs/535/466/png-transparent-google-account-microsoft-account-login-email-gmail-email-miscellaneous-text-trademark.png" alt="profile" class="img-circle img-size-32 mr-2">
             </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
              <div class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="https://w7.pngwing.com/pngs/535/466/png-transparent-google-account-microsoft-account-login-email-gmail-email-miscellaneous-text-trademark.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                     {{Auth::User()->name;}}
                     </h3>
                    <p class="text-sm"> {{Auth::User()->email;}}</p>
                   <a href="{{url('logout')}}"> <p class=" " style="color: blue;font-weight:800;padding:2px"> Logout  <img src="{{('backend/dist/img/log.png')}}" width="10%"> </p>
                  </div>
                </div>
                <!-- Message End -->
              </div>
              
           
          </li>
    
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
         
        </ul>
      </nav>
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{('allfiles')}}" class="brand-link">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRJi_dAXWyrZ5Gy6C0Feqcp7q-dWbLLy7KFSxY1kQXKTaV71lPL7PEbsVbDO47rEtc2zU&usqp=CAU" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SERVOTECH</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="{{url('allfiles')}}" class="nav-link active">
                  <i class="fa fa-upload" aria-hidden="true"></i>
                  <p>
                    Upload Files
                   </p>
                </a>
                
              </li>
                
            </ul>
          </nav>
         </div>
       </aside>