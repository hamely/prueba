<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cyber | Management</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset("vendors/bootstrap/dist/css/bootstrap.min.css") }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("vendors/font-awesome/css/font-awesome.min.css") }}">
  
    <!-- NProgress -->
     <link rel="stylesheet" href="{{ asset("vendors/nprogress/nprogress.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("vendors/iCheck/skins/flat/green.css") }}">
   
    <!-- Datatables -->


    <link rel="stylesheet" href="{{ asset("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}">
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset("build/css/custom.min.css") }}">

    <link rel="stylesheet" href="{{ asset("vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css") }}" >
    <link rel="stylesheet" href="{{ asset("admin/css/bootstrap-select.min.css") }}" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{'modulos'}}" class="site_title"></i> <span>Cyber Management</span></a>
            </div>
            <div class="clearfix"></div>
            <br/>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset("images/pnp/logos/logo.png")}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>BIENVENIDOS</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

@include('admin.layout.modulos.mantenimientoyusuarios.header')

@yield('content')

<!-- jQuery -->
        <footer>
          <div class="pull-right">
            Sistema de administración de personal - Cyber Management<a href=""> </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<script src="{{ asset("vendors/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("vendors/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("vendors/fastclick/lib/fastclick.js") }}"></script>

    <!-- NProgress -->
    <script src="{{ asset("vendors/nprogress/nprogress.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("vendors/iCheck/icheck.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("vendors/datatables.net-scroller/js/dataTables.scroller.min.js") }}"></script>
    <script src="{{ asset("vendors/jszip/dist/jszip.min.js") }}"></script>
    <script src="{{ asset("vendors/pdfmake/build/pdfmake.min.js") }}"></script>
    <script src="{{ asset("vendors/pdfmake/build/vfs_fonts.js") }}"></script>
    <script src="{{ asset("admin/js/bootstrap-select.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>  

    <!-- Custom Theme Scripts -->
    <script src="../"></script>
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

  
  @yield('script')
</body>
</html>