
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>APK-HOTEL</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>aset/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>aset/boot/css/bootstrap.min.css">
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
<div class="album  bg-light">
  <div class="container"> 
  <div class="card-body">
  <h1>Hotel hebat</h1>          
  </div>
  <?php foreach($data as $key => $kamar): ?>
          
      <div class="col-lg-12 col-md-14 mx-auto">
        <div class="card shadow-sm">
            <img src="aset/dist/img/<?=$kamar['Info_kamar']->foto?>" width="100%" height="400">
            <div class="card-header"><label><?=$kamar['Info_kamar']->tipe_kamar?></label></div>
            <div class="card-body">
              <p class="card-text"><label>Fasilitas:</label></p>
              <p >
                <ul>
                  <?php if(!empty($kamar['f_kamar'])) :?>
              <?php foreach ($kamar['f_kamar'] as $key2 => $f): ?>
                  <li><?=$f->nama_fasilitas?></li>
                
                <?php endforeach; ?>
            <?php endif;?>
                </ul>
            
              </p>
              
            </div>
          </div>
      </div>
<?php endforeach ?>
    </div>
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- Main Footer -->
  </div>
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
