@extends('admin.layouts.main')
@section('main-section')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div> 
        </div> 
      </div> 
    </div>
    
    <section class="content">
      <div class="container-fluid">
         <div class="row">
       
           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
               <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
             </div>
           </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
               <div class="info-box-content">
                <span class="info-box-text">Settings</span>
                <span class="info-box-number">
                    Logout
                 </span>
              </div>
             </div>
           </div>

           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>
              <a href="{{('allfiles')}}"> <div class="info-box-content">
                <span class="info-box-text">File List</span>
                <span class="info-box-number">2,000</span>
              </div></a>
             </div>
           </div>


         </div>
      
      </div> 
    </section>
   </div>
@endsection