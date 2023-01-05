
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-gradient-primary">
    

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo base_url('home');?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('f_kamar');?>" class="nav-link">Fasilitas Kamar</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('f_hotel');?>" class="nav-link">Fasilitas Hotel</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>        
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown"><i class="fas fa-bars"></i></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo base_url('pesan/lihat');?>" class="dropdown-item">lihat riwayat pesanan</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a href="<?php echo base_url('login_admin');?>" class="dropdown-item">Login</a>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
      </ul>
    
  </nav>
  <!-- /.navbar -->

    <!-- Main content -->
    <!-- Content Header (Page header) -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Reservasi Kamar</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>tipe kamar</th>
                      <th>jumlah kamar</th>
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
                      <td><?php echo $p->tipe_kamar;?></td>
                      <td><?php echo $p->jml_kamar;?></td>
                      <td><?php echo $p->tgl_cek_in;?></td>
                      <td><?php echo $p->tgl_cek_out;?></td>
                      <td><a class="btn btn-danger" href="print/<?php echo $p->id_pemesan;?>"> <i class="fa fa-print"></i></a></td>
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

  <!-- Control Sidebar -->
  
  <!-- Main Footer -->
  
  <footer class="main-footer">
  </footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>aset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>aset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>aset/dist/js/adminlte.min.js"></script>
</body>
</html>
