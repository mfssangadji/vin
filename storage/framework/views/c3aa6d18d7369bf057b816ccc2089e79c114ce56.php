<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="#" type="image/ico" />

    <title>Sistem Informasi Pengambilan Ijazah dan Beasiswa - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('dashboard/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('dashboard/vendors/iCheck/skins/flat/green.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dashboard/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')); ?>" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('dashboard/vendors/jqvmap/dist/jqvmap.min.css')); ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('dashboard/build/css/custom.min.css')); ?>" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo e(asset('dashboard/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo e(route('dashboard')); ?>" class="site_title"><span><center>Selamat Datang!</center></span></a>
            </div>
            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li>
                    <a href="<?php echo e(route('welcome')); ?>"><i class="fa fa-home"></i> Beranda </a>
                  </li>
                  <li>
                    <a href="<?php echo e(url('pijazah')); ?>"><i class="fa fa-bars"></i> Pengambilan Ijazah </a>
                  </li>
                  <li>
                    <a href="<?php echo e(url('pbeasiswa')); ?>"><i class="fa fa-bars"></i> Penerimaan Beasiswa </a>
                  </li>
                  <li>
                    <a href="<?php echo e(url('ptentang')); ?>"><i class="fa fa-bars"></i> Tentang Kami </a>
                  </li>
                  <li>
                    <a href="<?php echo e(url('pkontak')); ?>"><i class="fa fa-bars"></i> Kontak </a>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Lainnya</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo e(url('webadmin')); ?>"><i class="fa fa-sign-out"></i> Login Admin</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Version 0.0.1
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('dashboard/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('dashboard/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('dashboard/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('dashboard/vendors/Chart.js/dist/Chart.min.js')); ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo e(asset('dashboard/vendors/gauge.js/dist/gauge.min.js')); ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('dashboard/vendors/iCheck/icheck.min.js')); ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo e(asset('dashboard/vendors/skycons/skycons.js')); ?>"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/Flot/jquery.flot.resize.js')); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('dashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/flot-spline/js/jquery.flot.spline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/flot.curvedlines/curvedLines.js')); ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('dashboard/vendors/DateJS/build/date.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/dist/jquery.vmap.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-buttons/js/buttons.flash.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/build/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\scripty\vin\resources\views/layouts/app.blade.php ENDPATH**/ ?>