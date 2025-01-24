@extends('admin.layouts.main')
@section('main-section')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Files</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('allfiles') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('allfiles') }}">{{ $fn }}</a></li>
                            <li class="breadcrumb-item active">Files</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class=" card card-primary card-outline">
                            <div class="card-header">
                                <button style="text-align: right" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal-default">
                                    Upload File
                                </button>

                            </div>


                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-striped table-bordered" style="width:100%">

                                    <thead>

                                        <tr>

                                            <th>File Name</th>

                                            <th>Uploaded Date </th>

                                            <th> Action</th>



                                        </tr>

                                    </thead>

                                    <tbody>

                                        @foreach ($userdata as $data)
                                            <tr>

                                                <td>

                                                    {{ $data->file_title }}

                                                </td>

                                                <td>

                                                    <span>Date: {{ $data->upload_date }} | <i class="far fa-clock mr-1"
                                                            style="color: blue"></i>{{ $data->upload_time }}</span>

                                                </td>

                                           
                                                <td>

                                                    <div class="user-block">

                                                        <a href="{{ url('download-file/' . $data->foldername . '/' . $data->file) }}" title="Download"
                                                            download="" class="btn btn-badege bg-success">
                                                            <i class="fas fa-download"></i>
                                                        </a>

                                                       
                                                         
                                                        <a  
                                                        href="javascript:void(0);" 
                                                        onclick="fileDelete('{{ url('deleted/' . $data->id) }}')"
                                                        class="btn btn-badge bg-danger delete-btn" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                        @php
                                                            $filedata = $data->file;
                                                            $exe = pathinfo($filedata, PATHINFO_EXTENSION);
                                                        @endphp

                                                        @if ($exe == 'jpeg' || $exe == 'jpg' || $exe == 'png' || $exe == 'pdf' || $exe == 'svg')
                                                        <a href="{{ url('iframe-file/' . $data->foldername . '/' . $data->file) }}"
                                                            class="btn btn-badge bg-primary" target="blank"
                                                            title="View">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        @endif

                                                    </div>

                                                </td>

                                            </tr>
                                        @endforeach
 
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>




    {{-- Modal --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Upload File </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="uploadForm" method="POST" action="{{ url('useruploadanyfile') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @php
                                date_default_timezone_set('Asia/Kolkata');
                                $currentDate = date('Y-m-d');
                                $currentTime = date('h:i:s A');
                            @endphp
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" name="folderid" value="{{ $id }}" readonly />
                                    <input type="hidden" name="foldername" value="{{ $fn }}" readonly />

                                    <input type="hidden" name="upload_time" value="{{ $currentTime }}" readonly />
                                    <input type="hidden" name="name" value="{{ Auth::User()->name }}" readonly />
                                    <input type="hidden" name="userphone" value="{{ Auth::User()->phone }}" readonly />
                                    <input type="hidden" name="upload_date" value="{{ $currentDate }}" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="file_title">File Title</label>
                                    <input type="text" class="form-control" name="file_title" id="file_title"
                                        placeholder="File Title">
                                </div>

                                <div class="form-group">
                                    <label for="file">File input</label>
                                    <div class="input-group">
                                        <input type="file" name="file" class="form-control" id="file" required />
                                    </div>
                                </div>

                                <div class="progress mt-3">
                                    <div id="progressBar" class="progress-bar bg-success progress-bar-striped"
                                        role="progressbar" style="width: 0%;">
                                        <span class="sr-only">0%</span>
                                    </div>
                                </div>

                                <div id="status" class="mt-2 text-danger"></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.modal-dialog -->
    </div>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#uploadForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                // Create FormData object
                var formData = new FormData(this);

                // AJAX request
                $.ajax({
                    url: "{{ url('useruploadanyfile') }}", // Laravel route
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    xhr: function() {
                        var xhr = new XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(e) {
                            if (e.lengthComputable) {
                                var percent = Math.round((e.loaded / e.total) * 100);
                                $('#progressBar').css('width', percent + '%').text(
                                    percent + '%');
                            }
                        });
                        return xhr;
                    },
                    success: function(response) {
                        // Display SweetAlert success message
                        Swal.fire({
                            title: 'Success!',
                            text: 'File uploaded successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK',
                        }).then(() => {
                            // Reload the page after the user closes the alert
                            window.location.reload();
                        });
                    },
                    error: function(response) {
                        // Display SweetAlert error message
                        Swal.fire({
                            title: 'Error!',
                            text: 'File upload failed. Please try again. File is so Large file must be less than 30 MB.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                        }).then(() => {
                            // Reload the page after the user closes the alert
                            window.location.reload();
                        });
                    }
                });
            });
        });
    </script>





{{-- File Delete Alert --}}
<script>
    function fileDelete(url) {
        Swal.fire({
            title: 'Are you sure Delete File?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>

@endsection
