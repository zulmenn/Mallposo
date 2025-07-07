<!-- jQuery (First, since it's a dependency) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap 4 (Required for layout and UI components) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<!-- DataTables & Plugins -->
<script src="{{ asset('assets/dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- ChartJS -->
<script src="{{ asset('assets/dist/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

<!-- Custom Script -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Optional Plugins (Remove if not used) -->
<script src="{{ asset('assets/dist/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/dist/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- Page Specific Script -->
<script>
  $(function () {
    // DataTables Initialization
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
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

</body>
</html>
