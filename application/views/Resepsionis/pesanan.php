
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APK-HOTEL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><h3>Aplikasi Reservasi Hotel</h3></a>
      </li>
      
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('home_res');?>" class="brand-link">
      <img src="<?php echo base_url();?>aset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APH_WAHAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('home_res');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('pesanan/index');?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Pesanan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('login_res/logout');?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pesanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="card col-7 " width="100%">
                    <tr>
                      <th ><label>Cari Berdasarkan Nama tamu</label></th>
                      <th ><label>Cari Berdasarkan Tanggal cek-in</label></th>
                    </tr>
                    <tr>
                      <td>
             <?php echo form_open('pesanan/search') ?>
                        <div class="input-group">
                            <input type="search" name="keyword" class="form-control" placeholder="Type your keywords here">
                            <div class="input-group-append">
                                <button type="submit" class="btn  btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
             <?php echo form_close() ?>
             </td>
             <td>
             <?php echo form_open('pesanan/search') ?>
                        <div class="input-group">
                            <input type="date" name="keyword" class="form-control">
                         <button type="submit" class="btn  btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                        </div>
             <?php echo form_close() ?>
           </td>
           </tr>
   </table>
    
            
    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>nama tamu</th>
                      <th>tanggal cek-in</th>
                      <th>tanggal cek-out</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <?php
                    foreach ($pesanan as $p) {
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $p->nama_tamu;?></td>
                      <td><?php echo $p->tgl_cek_in;?></td>
                      <td><?php echo $p->tgl_cek_out;?></td>
                      <td><a href="detail/<?php echo $p->id_pemesan;?>" class="btn btn-primary" ><i class="fa fa-search"></i></a></td>
                    </tr>

                  </tbody>
                <?php } ?>
                </table>
              </div>
            </div>
                  
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>aset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>aset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>aset/dist/js/adminlte.min.js"></script>
</body>
</html>
