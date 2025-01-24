<!-- /.content-wrapper -->
{{-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ url('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ url('backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ url('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ url('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{ url('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ url('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('backend/dist/js/adminlte2167.js?v=3.2.0')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{ url('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{ url('backend/plugins/toastr/toastr.min.js')}}"></script>


<!-- DataTables  & Plugins -->
<script src="{{ url('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ url('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ url('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ url('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ url('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

{{-- <script src="{{ url('backend/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script> --}}
<!-- AdminLTE for demo purposes -->
<script src="{{ url('backend/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@include('admin.layouts.msg')
 
  

 
</body>

 </html>
