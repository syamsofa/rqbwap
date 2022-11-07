<?php
if ($this->session->userdata('username') == null)
  redirect('login');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RQB WA Broadcast</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/css.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/dist//css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/summernote/summernote-bs4.min.css">


  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/css/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>framework/css/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/css/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <style>
   

  </style>
  <script src="<?php echo base_url(); ?>AdminLTE-master/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="<?php echo base_url(); ?>aset/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>aset/js/buttons.html5.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>AdminLTE-master/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?php echo base_url(); ?>AdminLTE-master/dist/js/demo.js"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/bootstrap-datepicker.min.js"></script>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>framework/js/xtab.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>framework/css/xtab.css" />




</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(); ?>AdminLTE-master/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Notifications Dropdown Menu -->
       
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

      </ul>
      <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light"><i class="fa fa-desktop" aria-hidden="true"></i>RQB | WA Broadcast</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="<?php echo $this->session->userdata('UrlPicture'); ?>" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $this->session->userdata('Nama'); ?></a>
          </div>
        </div>
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="<?php echo base_url(); ?>site/dashboard" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Welcome

                </p>
              </a>

            </li>
          
           
            <li class="nav-item">
            <a href="<?php echo base_url(); ?>site/kirim" class="nav-link ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Kirim
                
                </p>
              </a>
            
            </li>
          
            <?php

            if ($this->session->userdata('RoleIdAktif') == 4) {

            ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>site/penilaian_kepala" class="nav-link">
                  <i class="fas fa-save nav-icon"></i>
                  <p>
                    Penilaian Dari Kepala

                  </p>
                </a>
              </li>

            <?php
            }
            ?>

            <?php

            if ($this->session->userdata('RoleIdAktif') == 1) {

            ?>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>site/satuan" class="nav-link">
                  <i class="fas fa-save nav-icon"></i>
                  <p>
                    Satuan

                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>site/pengguna" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>
                    Pengguna

                  </p>
                </a>
              </li>

            <?php
            }
            ?>
                          

            <?php

            if ($this->session->userdata('RoleIdAktif') == 3) {

            ?>
              <!-- <li class="nav-item">
                <a href="<?php echo base_url(); ?>site/penilaian_dari_saya" class="nav-link">
                  <i class="fa fa-gift nav-icon"></i>
                  <p>
                    Penilaian Saya untuk Pegawai

                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>site/penilaian_bulanan" class="nav-link">
                  <i class="fa fa-gift nav-icon"></i>
                  <p>
                    Penilaian Saya untuk Pegawai

                  </p>
                </a>
              </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>site/logout" class="nav-link">
                <i class='fas fa-sign-out-alt nav-icon'></i>
                <p>
                  Logout

                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?php echo $judul; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>"> Home </a></li>
                <li class="breadcrumb-item"><a href=""><?php echo $judul; ?></a></li>

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

      <?php

      $this->load->view($menu);
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="">BPS Kabupaten Rembang</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>

<link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE-master/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="<?php echo base_url(); ?>AdminLTE-master/plugins/select2/js/select2.full.min.js"></script>
