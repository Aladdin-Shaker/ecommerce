<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- jQuery -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/jquery/jquery.min.js') }}">
</script>
<!-- DataTables -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/datatables/jquery.dataTables.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('vendor/datatables/buttons.server-side.js') }}">
</script>
<!-- jQuery UI 1.11.4 -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/jquery-ui/jquery-ui.min.js') }}">
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge("uibutton", $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
</script>
<!-- ChartJS -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/chart.js/Chart.min.js') }}">
</script>
<!-- Sparkline -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/sparklines/sparkline.js') }}">
</script>
<!-- JQVMap -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/jqvmap/jquery.vmap.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}">
</script>
<!-- jQuery Knob Chart -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/jquery-knob/jquery.knob.min.js') }}">
</script>
<!-- daterangepicker -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/moment/moment.min.js') }}">
</script>
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/daterangepicker/daterangepicker.js') }}">
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<!-- Summernote -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/summernote/summernote-bs4.min.js') }}">
</script>
<!-- overlayScrollbars -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
</script>
<!-- AdminLTE App -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/dist/js/adminlte.js') }}">
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/dist/js/pages/dashboard.js') }}">
</script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/dist/js/demo.js') }}"></script>

<!-- my functions -->
<script type="text/javascript"
    src="{{ url('/design/adminlte/dist/js/myFunctions.js') }}"></script>



@stack('scripts')
@stack('css')
