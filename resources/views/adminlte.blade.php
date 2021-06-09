<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket Management System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bower_components/admin-lte/dist/css/adminlte.min.css">
  <script src="~/Scripts/bootstrap-datetimepicker.min.js"></script>
  <link href="~/Content/bootstrap-datetimepicker.min.css" rel="stylesheet" />
  <script>
        $(function () {
            $('#startdate,#enddate').datetimepicker({
                useCurrent: false,
                minDate: moment()
            });
            $('#startdate').datetimepicker().on('dp.change', function (e) {
                var incrementDay = moment(new Date(e.date));
                incrementDay.add(1, 'days');
                $('#enddate').data('DateTimePicker').minDate(incrementDay);
                $(this).data("DateTimePicker").hide();
            });

            $('#enddate').datetimepicker().on('dp.change', function (e) {
                var decrementDay = moment(new Date(e.date));
                decrementDay.subtract(1, 'days');
                $('#startdate').data('DateTimePicker').maxDate(decrementDay);
                 $(this).data("DateTimePicker").hide();
            });

        });
    </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!--Header -->

    @include('header')


  <!-- Main Sidebar Container -->

  @include('sidebar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     @yield('content')
  </div>
  @include('footer')


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="bower_components/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="bower_components/admin-lte/dist/js/adminlte.min.js"></script>
</body>
</html>
